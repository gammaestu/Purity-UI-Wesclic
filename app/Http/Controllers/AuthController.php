<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    /**
     * Halaman Sign In (UI only, tanpa database).
     */
    public function signIn()
    {
        return view('auth.sign-in');
    }

    /**
     * Halaman Sign Up (UI only, tanpa database).
     */
    public function signUp()
    {
        return view('auth.sign-up');
    }
}

