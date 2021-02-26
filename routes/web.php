<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('index');
});


Route::resource('/register',UserController::class);
Route::resource('/page',PageController::class);
Route::resource('/login',LoginController::class);