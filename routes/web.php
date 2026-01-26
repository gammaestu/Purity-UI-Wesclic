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

// Authentication Routes (Public)
Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'signUp'])->name('auth.signup');
    Route::get('/sign-in', [AuthController::class, 'signIn'])->name('auth.signin');
    Route::get('/sign-up', [AuthController::class, 'signUp']);
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
});

// Protected Routes (Require Authentication)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/tables', [TablesController::class, 'index'])->name('tables.index');
    Route::get('/billing', [BillingController::class, 'index'])->name('billing.index');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
