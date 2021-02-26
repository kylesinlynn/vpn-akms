<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
class LoginController extends Controller
{
    // Refirect if register is success
    public function index() {
        return view('admin.login');
    }
    // Login Action
    public function login(LoginRequest $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('page.index');
        }else {
            return redirect()->route('login.index')->with('status','Email Or Password Do not Math.');
        }
    }

}