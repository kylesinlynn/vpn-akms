<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/{route?}', function () {
    return view('main');
});

// authentication routes
Route::prefix('auth')->group(function () {
    Route::post('register', [Register::class, 'action'])->name('auth.register');
    Route::post('login', [Login::class, 'action'])->name('auth.login');
    Route::post('logout', [Logout::class, 'action'])->name('auth.logout');
});

Route::get('/{any?}', function () {
    return view('main');
});
