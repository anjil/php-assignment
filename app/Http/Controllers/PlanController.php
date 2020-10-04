<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class PlanController extends Controller
{

    private $plan;

    public function __construct() {
        $this->plan = new Plan;
    }

    /**
     * Show all plans if plan_id is not passed
     * show specific plan if plan_id is passed
     * 
     * @param int $plan_id (optional)
     */
    public function plans($plan_id = null) {

        if(!$plan_id) {
            $plans = Plan::all();
        } else {
            $plans = Plan::find($plan_id);
        }

        if(is_null($plans)) {
            return response()->json('Record not found', 404);
        }

        return response()->json($plans, 200);
    }

    public function subscription(Request $request) {

        $subscriptionDetails = $request->all();

        if(empty($subscriptionDetails)) {
            return response()->json('Mendatory data is missing', 400);
        }

        $cost = array();
        $totalCost = 0;

        foreach($subscriptionDetails as $index => $subscription) {

            $planCost = $this->plan->getSubscriptionCost($subscription['code'], $subscription['frequency']);
            
            $totalCost += $planCost;

            $cost[] = [
                'code'      => $subscription['code'],
                'frequency' => $subscription['frequency'],
                'cost'      => $planCost
            ];
        }

        $cost['total'] = $totalCost;

        return response()->json($cost, 200);
        
    }
}
