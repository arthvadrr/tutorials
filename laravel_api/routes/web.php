<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::get('login', LoginController::class)->middleware('guest');
    Route::get('logout', LogoutController::class);
    Route::get('register', RegisterController::class)->middleware('guest');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
