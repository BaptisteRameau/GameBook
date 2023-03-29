<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleCallbackGitHub()
    {
        $gitHubUser = Socialite::driver('github')->user();

        $user = User::firstOrCreate(
            [
                'provider_id' => $gitHubUser->getId()
            ],
            [
                'email' => $gitHubUser->getEmail(),
                'name' => $gitHubUser->getName(),
                'avatar' => $gitHubUser->getAvatar()
            ]
        );

        auth()->login($user, true);

        return redirect('index');
    }

    ///
    /// GOOGLE
    ///

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallbackGoogle()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::firstOrCreate(
            [
                'provider_id' => $googleUser->getId()
            ],
            [
                'email' => $googleUser->getEmail(),
                'name' => $googleUser->getName(),
                'avatar' => $googleUser->getAvatar()
            ]
        );

        auth()->login($user, true);

        return redirect('index');
    }
}