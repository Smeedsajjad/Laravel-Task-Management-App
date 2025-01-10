<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => [
                'required',
                'min: 8',
                'regex:/[@$!%*?&]/'
            ],
            'password_confirmation' => 'required|same:password'
        ], [
            'name.required' => 'The username field is required.',
            'name.min' => 'The username must be at least 4 characters.',
            'email.required' => 'Please provide an email address.',
            'email.email' => 'The email address must be valid.',
            'password.required' => 'A password is required.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.regex' => 'The password must include at least one special character.',
            'password_confirmation.required' => 'Please confirm your password.',
            'password_confirmation.same' => 'The password confirmation does not match.',
        ]);

        $user = User::create($data);

        if ($user) {
            return redirect()->route('index');
        }
        return back()->withErrors(['error' => 'Registration failed. Please try again.']);
    }

    function login(Request $request)
    {
        $cerdentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Please provide an email address.',
            'email.email' => 'The email address must be valid.',
            'password.required' => 'A password is required.',
        ]);

        if (Auth::attempt($cerdentials)) {
            return redirect()->route('index');
        }
        return back()->withErrors(['email' => 'Invalid credentials. Please try again.']);
    }
    function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }


    function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    function handleGoogleCallback()
    {
        // try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email', $googleUser->email)->first();
            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'password' => bcrypt(Str::random($length = 16)),
                ]);
            }

            Auth::login($user, true);
            return redirect()->route('index');
        // } catch (Exception $e) {
        //     dd($e);
        // }
    }
}
