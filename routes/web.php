<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Untuk slicing dashboard UI kita buat route khusus yang terpisah dan rapi.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Halaman dashboard utama (UI purity)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Halaman Login (UI only)
Route::get('/sign-in', [AuthController::class, 'signIn'])->name('auth.signin');
Route::get('/sign-up', [AuthController::class, 'signUp'])->name('auth.signup');
