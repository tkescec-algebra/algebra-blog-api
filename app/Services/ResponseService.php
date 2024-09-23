<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use JsonSerializable;

class ResponseService
{
    public static function success(array|JsonSerializable $data, int $status = 200): JsonResponse
    {
        return response()->json(['status' => 'OK', 'data' => $data], $status);
    }

    public static function error(\Throwable $e): JsonResponse
    {
        return response()->json(
            data: ['status' => 'ERR', 'message' => $e->getMessage()],
            status: $e->getCode() ?: 400
        );
    }
}
