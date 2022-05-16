<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

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
    ];

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
        return $this->hasMany(Wallet::class);
    }

    public function getBalanceAttribute()
    {
        $balance = $this->wallet()->sum('usd_balance') ? 0 : $this->earnings;
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
}
