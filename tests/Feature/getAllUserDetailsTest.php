<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class getAllUserDetailsTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_get_all_user_details()
    {
        $response = $this->get('api/get-all-users');

        $response->assertStatus(200);

    }
}