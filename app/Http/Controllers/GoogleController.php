<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $google = Socialite::driver('google')->user();
     ;
        $user = User::updateOrCreate([
            'google_id' => $google->id,
        ], [
            'username' => $google->name,
            'email' => $google->email,
            'google_token' => $google->token,
            'google_refresh_token' => $google->refreshToken,
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }


}
