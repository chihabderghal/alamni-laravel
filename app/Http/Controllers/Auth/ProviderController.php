<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

/**
 * @param $provider
 * @return
 */
class ProviderController extends Controller
{
    public function redirect($provider): RedirectResponse
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $social_user = Socialite::driver($provider)->user();

        $user = User::updateOrCreate([
            'provider_id' => $social_user->id,
        ], [
            'name' => $social_user->name,
            'email' => $social_user->email,
            'provider_token' => $social_user->token,
            'provider_refresh_token' => $social_user->refreshToken,
        ]);

        $user->markEmailAsVerified();

        Auth::login($user);

        return view('home');
    }
}
