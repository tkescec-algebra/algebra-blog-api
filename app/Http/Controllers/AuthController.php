<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Interfaces\AuthServiceInterface;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    private AuthServiceInterface $authService;

    public function __construct(AuthServiceInterface $authService)
    {
        $this->authService = $authService;
    }

    /**
     * Register a new user.
     *
     * @param RegisterRequest $request
     * @return JsonResponse
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        $serviceAction = fn() => $this->authService->register($request->validated());
        return $this->executeServiceAction($serviceAction);
    }

    public function login(): JsonResponse
    {
        $serviceAction = fn() => throw new \Exception('Not implemented');
        return $this->executeServiceAction($serviceAction);
    }
}
