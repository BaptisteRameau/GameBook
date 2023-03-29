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

    public function handleCallback()
    {
        $gitHubUser = Socialite::driver('github')->user();

        $user = User::firstOrCreate(
            [
                'provider_id' => $gitHubUser->getId()
            ],
            [
                'email' => $gitHubUser->getEmail(),
                'name' => $gitHubUser->getName(),
            ]
        );

        auth()->login($user, true);

        return redirect('index');
    }
}