<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Register extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function action(Request $request)
    {
        // validate the input(s)
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' =>  'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);

        // if the input(s) validate, create a new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        // redirect to login page
        return response([
            'message' => 'Registered successfully!',
        ], Response::HTTP_CREATED);
    }
}