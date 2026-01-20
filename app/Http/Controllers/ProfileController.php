<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    /**
     * Halaman Profile (UI only, tanpa database).
     */
    public function index()
    {
        return view('profile.index');
    }
}

