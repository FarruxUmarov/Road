<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_licences_returns_a_successful_response()
    {
        $response = $this->get('api/licenses');

        $response->assertStatus(200);
    }

    public function test_the_fines_returns_a_successful_response()
    {
        $response = $this->get('api/licenses');

        $response->assertStatus(200);
    }

    public function test_the_cars_returns_a_successful_response()
    {
        $response = $this->get('api/licenses');

        $response->assertStatus(200);
    }
}
