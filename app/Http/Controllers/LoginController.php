<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            // Assuming you are using Sanctum for API token authentication
            $token = $user->createToken('token-name')->plainTextToken;

            return response()->json(['message' => 'Login successful', 'token' => $token]);
        }

        // Authentication failed
        return response()->json(['errors' => ['email' => 'These credentials do not match our records.']], 422);
    }
}