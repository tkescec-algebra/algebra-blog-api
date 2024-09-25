<?php

namespace App\Services;

use App\Interfaces\AuthServiceInterface;
use Illuminate\Support\Enumerable;

class AuthService implements AuthServiceInterface
{
    public function register(array $data): Enumerable
    {
        return collect([]);
    }

    public function login(array $data): Enumerable
    {
        return collect([]);
    }

    public function logout(): void
    {

    }
}
