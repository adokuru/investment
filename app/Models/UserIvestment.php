<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserIvestment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function investment()
    {
        return $this->belongsTo(InvestmentPlan::class, 'investment_plan_id');
    }

    public function created_at_difference()
    {
        //   \Carbon\Carbon::parse($investment->created_at)->addDays($investment->investment->contract_duration)
        return Carbon::createFromTimestamp(strtotime($this->created_at))->diff(Carbon::now())->days;
    }

    public function days_remaining()
    {
        return $this->investment->contract_duration - $this->created_at_difference();
    }
}
