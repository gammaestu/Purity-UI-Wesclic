<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Purity UI - Auth')</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-white font-sans text-slate-800">
        <div class="min-h-screen flex flex-col">
            {{-- Top navbar --}}
            <header class="w-full pt-6">
                <div class="mx-auto max-w-6xl px-6">
                    <div class="flex items-center justify-between">
                        <a href="{{ route('dashboard.index') }}" class="flex items-center gap-2">
                            <x-brand.purity :invert="true" />
                        </a>

                        <nav class="hidden md:flex items-center gap-8 text-xs font-semibold text-white/90">
                            <a href="{{ route('dashboard.index') }}" class="hover:text-white">Dashboard</a>
                            <a href="#" class="hover:text-white">Profile</a>
                            <a href="{{ route('auth.signup') }}" class="hover:text-white">Sign Up</a>
                            <a href="{{ route('auth.signin') }}" class="hover:text-white">Sign In</a>
                        </nav>

                        <a href="#" class="rounded-full bg-white text-slate-700 text-xs font-semibold px-4 py-2 shadow-sm hover:bg-slate-50">
                            Free Download
                        </a>
                    </div>
                </div>
            </header>

            {{-- Hero background --}}
            <section class="relative mt-6">
                <div class="mx-auto max-w-6xl px-6">
                    <div class="relative overflow-hidden rounded-2xl h-[280px] bg-[#4FD1C5]">
                        <div class="absolute inset-0 opacity-40 bg-[radial-gradient(circle_at_20%_20%,rgba(255,255,255,0.5),transparent_55%),radial-gradient(circle_at_70%_40%,rgba(255,255,255,0.35),transparent_60%),radial-gradient(circle_at_40%_90%,rgba(255,255,255,0.25),transparent_50%)]"></div>
                        <div class="absolute inset-0 opacity-35 bg-[linear-gradient(110deg,rgba(255,255,255,0.28),transparent_40%,rgba(255,255,255,0.18))]"></div>
                        <div class="absolute -right-24 -top-10 h-[420px] w-[420px] rounded-full bg-white/10 blur-2xl"></div>
                        <div class="absolute -left-32 top-24 h-[420px] w-[420px] rounded-full bg-white/10 blur-2xl"></div>
                    </div>
                </div>

                {{-- Center content on top of hero --}}
                <div class="pointer-events-none absolute inset-x-0 top-0">
                    <div class="mx-auto max-w-6xl px-6">
                        <div class="h-[280px] flex flex-col items-center justify-center text-white text-center">
                            <h1 class="text-3xl font-semibold mb-2">Welcome!</h1>
                            <p class="text-xs text-white/90 max-w-md">
                                Use these awesome forms to login or create new account in your project for free.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Page content (card overlaps hero) --}}
            <main class="-mt-28 flex-1">
                <div class="mx-auto max-w-6xl px-6">
                    <div class="flex justify-center">
                        @yield('content')
                    </div>
                </div>
            </main>

            {{-- Footer --}}
            <footer class="mt-10 pb-8">
                <div class="mx-auto max-w-6xl px-6 text-xs text-slate-400 flex items-center justify-between">
                    <span>© 2026, made with ♥ by Creative Tim &amp; Simmmple for a better web</span>
                    <div class="space-x-6">
                        <a href="#" class="hover:text-slate-600">Creative Tim</a>
                        <a href="#" class="hover:text-slate-600">Simmmple</a>
                        <a href="#" class="hover:text-slate-600">Blog</a>
                        <a href="#" class="hover:text-slate-600">License</a>
                    </div>
                </div>
            </footer>
        </div>

        <div class="pointer-events-none absolute inset-x-0 top-0 h-[360px] bg-[#4FD1C5]"></div>
    </body>
</html>

