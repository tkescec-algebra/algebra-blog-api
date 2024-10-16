<?php

use App\Http\Controllers\AuthController;
use App\Services\AuthService;
use Illuminate\Support\Facades\Route;
use App\Interfaces\AuthServiceInterface;

Route::post('register', AuthController::class.'@register');
Route::post('login', AuthController::class.'@login');
Route::post('refresh', AuthController::class.'@refresh');

Route::get('/', function () {
    return response()->json(['message' => 'Hello World!']);
});

Route::group(['middleware' => ['auth:api','auth.verify.token']], function () {
    Route::get('/test', function () {
        return 'Hello World';
    });

    Route::get('logout', AuthController::class.'@logout');
});

Route::get('/test-cicd', function () {
    return response()->json(['message' => 'Testing CI/CD!']);
});
