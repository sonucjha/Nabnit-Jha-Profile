<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:Sanctum', ['except' => ['login']]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            // Set expiration time (e.g., 60 minutes from now)
            $expiresAt = now()->addMinutes(60);

            // Create token with expiration metadata
            // $token = $user->createToken('API Token', ['expires_at' => $expiresAt->toISOString()])->plainTextToken;
            $token = $user->createToken('API Token')->plainTextToken;

            return $this->respondWithToken($token, $expiresAt);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    protected function respondWithToken($token, $expiresAt)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => $expiresAt->diffInSeconds(now()), // Seconds until expiration
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out successfully'], 200);
    }

    public function refresh(Request $request)
    {
        // Sanctum doesn't directly provide token refresh functionality.
        return response()->json(['message' => 'Token refresh not applicable in Sanctum'], 400);
    }

    public function me(Request $request)
    {
        return response()->json($request->user(), 200);
    }

}
