<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiAuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Validation failed', 'errors' => $validator->errors()], 422);
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'is_allowed_login' => true,
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // You can add token generation here if using sanctum or passport
            return response()->json([
                'success' => true,
                'message' => 'Login successful',
                'user' => $user,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Email or Password is incorrect or your account still needs to be checked by the admin!',
            ], 401);
        }
    }

    public function apiLogin(Request $request)
    {
        $login = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'is_allowed_login' => true
        ];

        if (\Auth::attempt($login)) {
            $user = \Auth::user();
            return response()->json([
                'success' => true,
                'user_id' => $user->id,
                'user' => $user,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Email or Password is incorrect or your account still needs to be checked by the admin!',
            ], 401);
        }
    }
}
