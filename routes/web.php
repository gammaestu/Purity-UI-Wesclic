<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Default URL mengarah ke halaman Sign Up (UI only, tanpa backend auth)
Route::get('/', [AuthController::class, 'signUp'])->name('auth.signup');

// Halaman dashboard utama (UI purity)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Halaman tables (UI only)
Route::get('/tables', [TablesController::class, 'index'])->name('tables.index');

// Halaman billing (UI only)
Route::get('/billing', [BillingController::class, 'index'])->name('billing.index');

// Halaman profile (UI only)
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

// Halaman Login (UI only)
Route::get('/sign-in', [AuthController::class, 'signIn'])->name('auth.signin');
Route::get('/sign-up', [AuthController::class, 'signUp']);
