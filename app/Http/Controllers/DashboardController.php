<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * Tampilkan halaman dashboard utama (tanpa database).
     */
    public function index()
    {
        return view('dashboard.index');
    }
}

