<?php
use App\Models\Server;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServerController;

Route::get('/', function () {
    $servers = Server::orderByDesc('id')->get();
    return view('index',compact('servers'));
});


Route::resource('/register',UserController::class);
Route::resource('/page',PageController::class);
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'login'])->name('login');

Route::resource('/server',ServerController::class);