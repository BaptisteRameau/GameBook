<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel=“stylesheet” href=“https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css” integrity=“sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==” crossorigin=“anonymous” referrerpolicy=“no-referrer” />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <title>Laravel</title>
    </head>

    <body>
            <x-guest-layout>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="text-white"/>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" class="text-white"/>

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4 mb-4 text-white">
                        <a href="{{ url('/register') }}">
                            {{ __('Sign up') }}
                        </a>
                        <x-primary-button class="ml-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="bg-gray-500 h-1 w-32"></div>
                        <div class="text-center font-bold text-lg">or sign in with</div>
                        <div class="bg-gray-500 h-1 w-32"></div>
                    </div>
                    <a href="/login/github" class="flex items-center justify-center px-4 py-2 mt-4 text-white font-semibold rounded-lg" style="background-color: #464646;">
                        <span class="mr-2">
                            <i class="fab fa-github text-white" style="font-size: 25px;"></i>
                        </span>
                        Login with GitHub
                    </a>
                    <a href="/login/google" class="flex items-center justify-center px-4 py-2 mt-4 hover:bg-gray-700 text-white font-semibold rounded-lg" style="background-color: #D84830;">
                        <span class="mr-2">
                            <i class="fab fa-google text-white" style="font-size: 25px;"></i>
                        </span>
                        Login with Google
                    </a>
                </form>
            </x-guest-layout>
    </body>
</html>
