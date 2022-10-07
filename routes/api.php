<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\ServerController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/servers', ServerController::class);

// authentication
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::delete('/logout', [AuthController::class, 'logout']);
});
