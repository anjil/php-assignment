<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'plan_code',
        'name',
        'monthly_cost',
        'annual_cost'

    ];

    public function getSubscriptionCost($plan_id, $frequency) {

        $plan = Plan::where('plan_code', $plan_id)->first();
        $planCost = ($frequency < 12) ? $frequency * $plan['monthly_cost'] : $plan['annual_cost'];

        return $planCost;
    }
}
