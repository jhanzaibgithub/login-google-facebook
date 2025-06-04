<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class FacebookLoginController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->scopes(['email'])->redirect();
    }

    // Facebook Callback
    public function handleFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->user();
        $user = User::firstOrCreate(
            ['email' => $facebookUser->getEmail()],
            [
                'name' => $facebookUser->getName(),
                'password' => bcrypt(str_random(16)),
            ]
        );

        Auth::login($user);

        return redirect()->route('home');
    }
    public function home(){
        return view ('home');
    }
}
