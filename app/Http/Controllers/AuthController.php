<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Halaman Sign In.
     */
    public function signIn()
    {
        // Jika sudah login, redirect ke dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard.index');
        }
        
        return view('auth.sign-in');
    }

    /**
     * Proses login.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->filled('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard.index'));
        }

        throw ValidationException::withMessages([
            'email' => ['The provided credentials do not match our records.'],
        ]);
    }

    /**
     * Proses logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('auth.signin');
    }

    /**
     * Halaman Sign Up.
     */
    public function signUp()
    {
        // Jika sudah login, redirect ke dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard.index');
        }
        
        return view('auth.sign-up');
    }

    /**
     * Proses register.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard.index');
    }
}

