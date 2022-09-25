<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/{route?}', function () {
    return view('main');
});

// authentication
Route::prefix('auth')->group(function () {
    Route::post('register', [RegisterController::class, 'action'])->name('auth.register');
    Route::post('login', [LoginController::class, 'action'])->name('auth.login');
    Route::post('logout', [LogoutController::class, 'action'])->name('auth.logout');
});
