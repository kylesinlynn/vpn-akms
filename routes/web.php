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
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'login'])->name('login');
