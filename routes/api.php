<?php

use App\Http\Controllers\AuthController;
use App\Services\AuthService;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;
use App\Interfaces\AuthServiceInterface;

Route::post('register', AuthController::class.'@register');

Route::get('/', function () {
    dd(new AuthServiceInterface());
});
