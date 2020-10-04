<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Plan;

class PlanTest extends TestCase
{
    
    public function test_retrive_all_planss()
    {
        $plan = factory(Plan::class)->create();

        $this->get(route('api/plans', $post->id))
            ->assertStatus(200);
    }
}
