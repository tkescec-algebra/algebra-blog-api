<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function login(): JsonResponse
    {
        $serviceAction = fn() => collect(['token' => '1234567890']);
        return $this->executeServiceAction($serviceAction);
    }
}
