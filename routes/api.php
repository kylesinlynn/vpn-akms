<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// authentication
Route::prefix('auth')->group(function () {
    Route::post('register', [RegisterController::class, 'action'])->name('auth.register');
    Route::post('login', [LoginController::class, 'action'])->name('auth.login');
    Route::get('logout', [LogoutController::class, 'action'])->name('auth.logout');
});
