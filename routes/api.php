<?php

use App\Http\Controllers\AuthController;
use App\Services\AuthService;
use Illuminate\Support\Facades\Route;
use App\Interfaces\AuthServiceInterface;

Route::post('register', AuthController::class.'@register');
Route::post('login', AuthController::class.'@login');
Route::post('refresh', AuthController::class.'@refresh');

Route::get('/', function () {
    dd(new AuthServiceInterface());
});

Route::get('/test', function () {
    return 'Hello World';
})->middleware('auth:api');
