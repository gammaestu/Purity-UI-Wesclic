<?php

namespace App\Http\Controllers;

class TablesController extends Controller
{
    /**
     * Tampilkan halaman Tables (UI only, tanpa database).
     */
    public function index()
    {
        return view('tables.index');
    }
}

