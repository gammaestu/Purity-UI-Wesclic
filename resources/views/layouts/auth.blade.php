<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Auth - Purity UI')</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-white font-sans text-slate-800">
        <div class="min-h-screen flex flex-col">
            {{-- Top navbar --}}
            <header class="pt-6">
                <div class="mx-auto max-w-6xl px-6">
                    <div class="rounded-2xl bg-white shadow-sm border border-slate-100 px-6 py-4 flex items-center justify-between">
                        <a href="{{ route('dashboard.index') }}" class="flex items-center gap-3">
                            <span class="h-8 w-8 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-700 font-semibold">
                                PU
                            </span>
                            <span class="text-xs font-semibold text-slate-700 tracking-wide">PURITY UI DASHBOARD</span>
                        </a>

                        <nav class="hidden md:flex items-center gap-8 text-[11px] font-semibold text-slate-500">
                            <a href="{{ route('dashboard.index') }}" class="hover:text-slate-700">Dashboard</a>
                            <a href="#" class="hover:text-slate-700">Profile</a>
                            <a href="{{ route('auth.signup') }}" class="hover:text-slate-700">Sign Up</a>
                            <a href="{{ route('auth.signin') }}" class="hover:text-slate-700">Sign In</a>
                        </nav>

                        <a href="#" class="rounded-full bg-slate-800 text-white text-[11px] font-semibold px-5 py-2 shadow-sm hover:bg-slate-900">
                            Free Download
                        </a>
                    </div>
                </div>
            </header>

            {{-- Split content --}}
            <main class="flex-1">
                <div class="mx-auto max-w-6xl px-6 py-10">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                        {{-- Left content --}}
                        <div class="flex justify-center lg:justify-start">
                            @yield('content')
                        </div>

                        {{-- Right teal panel --}}
                        <div class="hidden lg:block">
                            <div class="relative overflow-hidden rounded-3xl h-[560px] bg-emerald-400">
                                <div class="absolute inset-0 opacity-35 bg-[radial-gradient(circle_at_20%_20%,rgba(255,255,255,0.5),transparent_55%),radial-gradient(circle_at_70%_40%,rgba(255,255,255,0.35),transparent_60%),radial-gradient(circle_at_40%_90%,rgba(255,255,255,0.25),transparent_50%)]"></div>
                                <div class="absolute inset-0 opacity-35 bg-[linear-gradient(110deg,rgba(255,255,255,0.28),transparent_40%,rgba(255,255,255,0.18))]"></div>
                                <div class="absolute inset-0 opacity-25 bg-[repeating-linear-gradient(135deg,rgba(255,255,255,0.20)_0px,rgba(255,255,255,0.20)_1px,transparent_1px,transparent_7px)]"></div>

                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="flex items-center gap-6 text-white">
                                        <div class="h-20 w-20 rounded-full bg-white/20 flex items-center justify-center">
                                            <span class="text-4xl font-semibold">⚡</span>
                                        </div>
                                        <span class="text-6xl font-semibold tracking-tight">chakra</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="pb-8">
                <div class="mx-auto max-w-6xl px-6 text-xs text-slate-400 flex items-center justify-between">
                    <span>© 2021, Made with ♥ by Creative Tim &amp; Simmmple for a better web</span>
                    <div class="space-x-6">
                        <a href="#" class="hover:text-slate-600">Creative Tim</a>
                        <a href="#" class="hover:text-slate-600">Simmmple</a>
                        <a href="#" class="hover:text-slate-600">Blog</a>
                        <a href="#" class="hover:text-slate-600">License</a>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>

