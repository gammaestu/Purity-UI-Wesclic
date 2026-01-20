<?php

namespace App\Http\Controllers;

class BillingController extends Controller
{
    /**
     * Halaman Billing (UI only, tanpa database).
     */
    public function index()
    {
        return view('billing.index');
    }
}

