<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            [
            'plan_code' => 'gb',
            'name' => 'uk',
            'monthly_cost' => '10',
            'annual_cost' => '50'
            ],
            [
                'plan_code' => 'fr',
                'name' => 'france',
                'monthly_cost' => '10',
                'annual_cost' => '60'
            ],
            [
                'plan_code' => 'de',
                'name' => 'germany',
                'monthly_cost' => '15',
                'annual_cost' => '75'
            ],
            [
                'plan_code' => 'us',
                'name' => 'usa',
                'monthly_cost' => '25',
                'annual_cost' => '150'
            ],
            [
                'plan_code' => 'jp',
                'name' => 'japan',
                'monthly_cost' => '15',
                'annual_cost' => '65'
            ]
        ]);
    }
}
