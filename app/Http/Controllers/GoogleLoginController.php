<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Try to find user by google_id
        $user = User::where('google_id', $googleUser->getId())->first();

        // If not found, check if email exists and update or create
        if (!$user) {
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                // Update existing user's google_id
                $user->update([
                    'google_id' => $googleUser->getId(),
                ]);
            } else {
                // Create new user
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => 12345678, // Use a random secure password
                ]);
            }
        }

        Auth::login($user);

        return redirect()->route('home');
    }
public function home(){
    return view ('home');
}
}
