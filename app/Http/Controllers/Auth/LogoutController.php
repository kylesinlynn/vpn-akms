<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function action(Request $request)
    {
        // get the authenticated user by email
        $user = User::where('email', auth()->user()->email)->first();

        // if the user exists, delete the user's tokens
        if ($user) {
            $user->tokens()->delete();
        }

        // return the response
        return response([
            'message' => 'Logged out!',
        ], Response::HTTP_ACCEPTED);
    }
}
