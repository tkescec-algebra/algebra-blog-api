<?php

namespace App\Http\Controllers;

use App\Services\ResponseService;

abstract class Controller
{
    protected function executeServiceAction(callable $serviceAction)
    {
        try {
            return ResponseService::success($serviceAction());
        } catch (\Throwable $e) {
            return ResponseService::error($e);
        }
    }
}
