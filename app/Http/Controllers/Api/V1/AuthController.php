<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|unique:users,phone_number',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        // dd($validated );

        $user = User::create($validated);
        $token = $user->createToken('auth_token')->plainTextToken;

        if (!$user || !$token) {
            return response()->json(['error' => 'Failed to register user :('], 500);
        }

        return response()->json([
            'message' => 'User created successfully',
            'user' => $validated,
            'token' => $token
        ], 201);
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'message' => 'Login successful',
            'user' => $user,
            'token' => $token
        ]);


    }

    public function logout(Request $request)
    {
        if(!$request->user()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logout successful'], 200);

    }
}
