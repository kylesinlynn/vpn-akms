<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function action(Request $request)
    {
        // validate the input(s)
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // check if the email exists
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // check if the password is correct
            if (! Hash::check($request->password, $user->password)) {
                // throw an error if the password does not match
                throw ValidationException::withMessages([
                    'password' => 'Incorrect password.',
                ]);
            }

            // generate user authentication token if password is correct
            $token = $user->createToken($request->email);

            // return the token
            return response([
                'message' => 'Authentication Token has been generated.',
                'token' => $token->plainTextToken,
            ], Response::HTTP_ACCEPTED);
        } else {
            // throw an error if user with the email has not found
            throw ValidationException::withMessages([
                'email' => ['User does not exist.'],
            ]);
        }
    }
}
