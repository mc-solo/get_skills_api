<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|unique:users,phone_number',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);


        $validated['password'] = Hash::make($validated['password']);

        // todo: debug why this is not working

        // DB::table('users')->insert($validated);
        $user = new User($validated);
        $user->save();

        if(!$user) {
            return response()->json(['error'=>'User not created'], 500);
        }

        return response()->json(['message' => 'User created successfully', 'user' => $validated], 201);
    }

    public function login() {
        return 'Login';
    }

    public function logout() {
        return 'Logout';
    }
}
