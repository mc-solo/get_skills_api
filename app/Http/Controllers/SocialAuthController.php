<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SocialAuthController extends Controller
{

    // redirect user to google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // handle google callback
    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate(
            [
                'provider' => 'google',
                'provider_id'=>$googleUser->id,
            ],
            [
                'name' => $googleUser->getName(),
                'provider_id' => $googleUser->getId(),
                'avatar' => $googleUser->getAvatar(),
                'password' => bcrypt(Str::random(8)),
            ]
        );

        Auth::login($user);
        return redirect()->intended('/dashboard');
    }

}
