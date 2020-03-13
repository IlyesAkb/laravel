<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginVk() {
        session()->get('soc.token');;

        if (Auth::id()) {
            return redirect()->route('home');
        }

        return Socialite::with('vkontakte')->redirect();
    }

    public function responseVK(UserRepository $userRepository) {
        if (Auth::id()) {
            return redirect()->route('home');
        }

        $user = Socialite::driver('vkontakte')->user();
        session(['soc.token' => $user->token]);
        $userInSystem = $userRepository->getUserBySocId($user, 'vk');
        Auth::login($userInSystem);

        return redirect()->route('home');
    }

    public function loginGithub() {
        session()->get('soc.token');;

        if (Auth::id()) {
            return redirect()->route('home');
        }

        return Socialite::with('github')->redirect();
    }

    public function responseGithub(UserRepository $userRepository) {
        if (Auth::id()) {
            return redirect()->route('home');
        }

        $user = Socialite::driver('github')->user();
        session(['soc.token' => $user->token]);
        $userInSystem = $userRepository->getUserBySocId($user, 'github');
        Auth::login($userInSystem);

        return redirect()->route('home');
    }
}
