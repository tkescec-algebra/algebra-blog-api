<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_with_valid_credentials()
    {
        $user = User::factory()->create([
            'first_name' => 'Pero',
            'last_name' => 'Peric',
            'email' => 'pp@test.com',
            'password' => bcrypt('123456789'),
        ]);

        $response = $this->post('/api/v1/login', [
            'email' => 'pp@test.com',
            'password' => '123456789',
        ]);

        Log::error($response->getContent());

        $response->assertStatus(200);
    }

    public function test_login_with_invalid_credentials()
    {
        $user = User::factory()->create([
            'first_name' => 'Pero',
            'last_name' => 'Peric',
            'email' => 'pp@test.com',
            'password' => bcrypt('123456789'),
        ]);

        $response = $this->post('/api/v1/login', [
            'email' => 'pp@test.com',
            'password' => 'wrong-password',
        ]);

        Log::error($response->getContent());

        $response->assertStatus(401);
    }

}
