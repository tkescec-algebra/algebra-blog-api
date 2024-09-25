<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Js;

class AuthController extends Controller
{
    public function login(): JsonResponse
    {
        $serviceAction = fn() => throw new \Exception('Not implemented');
        return $this->executeServiceAction($serviceAction);
    }
}
