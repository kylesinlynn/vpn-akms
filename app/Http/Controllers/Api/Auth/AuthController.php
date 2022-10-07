<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum', ['only' => ['logout']]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        // if validation succeeds, create a new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'message' => 'User created successfully',
        ], Response::HTTP_CREATED);
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        // if validation succeeds, get user by email
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // validate user password
            if (!Hash::check($request->password, $user->password)) {
                throw ValidationException::withMessages([
                    'password' => 'Incorrect password.',
                ]);
            }

            // validation passed, create auth token
            $token = $user->createToken('access_token');

            return response([
                'message' => 'Authentication Token has been generated.',
                'token' => $token->plainTextToken,
            ], Response::HTTP_ACCEPTED);
        } else {
            // if email not found
            throw ValidationException::withMessages([
                'email' => ['User does not exist.'],
            ]);
        }
    }


    public function logout()
    {
        // revoke user token
        auth()->user()->tokens()->delete();

        // return the response
        return response([
            'message' => 'Logged out successfully.',
        ], Response::HTTP_ACCEPTED);
    }
}
