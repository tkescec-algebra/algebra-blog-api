<?php

namespace App\Http\Controllers;

use App\Services\ResponseService;
use Illuminate\Http\JsonResponse;

abstract class Controller
{
    protected function executeServiceAction(callable $serviceAction): JsonResponse
    {
        try {
            return ResponseService::success($serviceAction());
        } catch (\Throwable $e) {
            return ResponseService::error($e);
        }
    }
}
