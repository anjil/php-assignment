<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('plans/{plan_id?}', 'PlanController@plans');
Route::post('plans/subscription', 'PlanController@subscription');
Route::post('user/{user_id}/subscription/save', 'UserPlanController@saveSubscription');