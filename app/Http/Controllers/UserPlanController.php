<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\UserPlan;

class UserPlanController extends Controller
{
    /**
     * Save user plans
     */
    public function saveSubscription($user_id, Request $request) {

        $subscriptionDetails = $request->all();
        $userPlans = [];

        foreach($subscriptionDetails as $index => $subscription) {
            $userPlans[] = [
                'user_id'   => $user_id,
                'plan_id'   => $subscription['plan_id'],
                'frequency' => $subscription['frequency'],
                'created_at' => Carbon::now()
            ];
        }

        $save = UserPlan::insert($userPlans);

        return response()->json($save, 200);

    }
}
