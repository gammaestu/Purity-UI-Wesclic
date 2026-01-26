<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Auth\AuthenticationException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Redirect unauthenticated users to login page
        $middleware->redirectGuestsTo(fn () => route('auth.signin'));
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Handle authentication exceptions
        $exceptions->render(function (AuthenticationException $e, $request) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Unauthenticated.'], 401);
            }
            
            // Add flash message for web requests
            return redirect()->route('auth.signin')
                ->with('error', 'Silakan login terlebih dahulu untuk mengakses halaman tersebut.');
        });
    })->create();
