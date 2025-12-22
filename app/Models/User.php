<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Models\UserCode;
use App\Mail\SendCodesMail;
use Exception;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'referrer_id',
        'referral_token',
    ];
    protected $appends = ['referral_link'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function wallet()
    {
        return $this->hasMany(Wallet::class)->with('walletType');
    }

    public function getBalanceAttribute()
    {
        $balance = $this->earnings;
        return $balance;
    }

    public function bitconwallet()
    {
        return $this->wallet()->where('wallet_type_id', 1)->first();
    }

    public function ethwallet()
    {
        return $this->wallet()->where('wallet_type_id', 2)->first();
    }

    public function btccashwallet()
    {
        return $this->wallet()->where('wallet_type_id', 3)->first();
    }

    public function usdtwallet()
    {
        return $this->wallet()->where('wallet_type_id', 4)->first();
    }

    /**
     * A user has a referrer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    public function generateCode($email)
    {
        $code = rand(1000, 9999);

        // Use $this->id since this is called as an instance method
        // Fallback to auth()->user()->id for backward compatibility
        $userId = $this->id ?? auth()->user()?->id;

        if (!$userId) {
            throw new \Exception('User ID is required to generate 2FA code');
        }

        UserCode::updateOrCreate(
            ['user_id' => $userId],
            ['code' => $code]
        );

        try {

            $details = [
                'title' => 'Your 2FA Code',
                'code' => $code
            ];

            Mail::to($email)->send(new SendCodesMail($details));
        } catch (Exception $e) {
            info("Error: " . $e->getMessage());
        }
    }

    /**
     * A user has many referrals.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }

    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->referral_token]);
    }
}