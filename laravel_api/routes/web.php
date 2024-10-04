<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('login', LoginController::class)->middleware('guest');
    Route::post('logout', LogoutController::class);
    Route::post('register', RegisterController::class)->middleware('guest');
});

Route::get('/', function () {
    return view('welcome');
});
