<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function post_login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();
        if (!Hash::check($request->password, $user?->password)) {
            throw ValidationException::withMessages([
                'email' => 'These credentials do not match our records.'
            ]);
        }

        Auth::login($user, $request->remember);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        return redirect()->intended('admin/dashboard');
        // }
    }
}
