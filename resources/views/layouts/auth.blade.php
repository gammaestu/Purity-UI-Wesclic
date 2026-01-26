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
            {{-- Header + content wrapper --}}
            <div class="relative flex-1">
                {{-- Right teal panel as background layer --}}
                <div class="pointer-events-none absolute inset-y-0 left-1/2 right-0 hidden lg:block">
                    <div class="absolute inset-y-6 left-0 right-6 overflow-hidden rounded-l-3xl bg-[#4FD1C5] shadow-[0_30px_60px_rgba(15,118,110,0.25)]">
                        {{-- Wave / vector background --}}
                        <div class="absolute inset-0 opacity-45 bg-[radial-gradient(circle_at_10%_10%,rgba(255,255,255,0.60),transparent_55%),radial-gradient(circle_at_80%_20%,rgba(255,255,255,0.45),transparent_60%),radial-gradient(circle_at_30%_90%,rgba(255,255,255,0.35),transparent_55%)]"></div>
                        <div class="absolute inset-0 opacity-35 bg-[linear-gradient(115deg,rgba(255,255,255,0.4),transparent_40%,rgba(255,255,255,0.25))]"></div>
                        <div class="absolute inset-0 opacity-30 bg-[repeating-linear-gradient(140deg,rgba(255,255,255,0.30)_0px,rgba(255,255,255,0.30)_1px,transparent_1px,transparent_9px)]"></div>

                        {{-- Logo chakra --}}
                        <div class="absolute inset-0 flex items-center justify-center">
                            <img
                                src="{{ asset('build/assets/images/logochakra.png') }}"
                                alt="Chakra logo"
                                class="w-[380px] max-w-[72%] drop-shadow-[0_24px_40px_rgba(15,118,110,0.45)]"
                            >
                        </div>
                    </div>
                </div>

                {{-- Top navbar --}}
                <header class="relative z-20 pt-6">
                    <div class="mx-auto max-w-6xl px-6">
                        {{-- Navbar pill --}}
                        <div class="h-[64px] rounded-[40px] bg-white shadow-[0_18px_35px_rgba(15,23,42,0.08)] border border-slate-100 pl-8 pr-10 flex items-center justify-between">
                            <a href="{{ route('dashboard.index') }}" class="flex items-center gap-2">
                                <x-brand.purity />
                            </a>

                            <nav class="hidden md:flex items-center gap-8 text-[11px] font-semibold leading-none text-slate-500">
                                <a href="{{ route('dashboard.index') }}" class="hover:text-slate-700">Dashboard</a>
                                <a href="{{ route('profile.index') }}" class="hover:text-slate-700">Profile</a>
                                <a href="{{ route('auth.signup') }}" class="hover:text-slate-700">Sign Up</a>
                                <a href="{{ route('auth.signin') }}" class="hover:text-slate-700">Sign In</a>
                            </nav>

                            <a href="#" class="flex h-9 items-center rounded-full bg-slate-800 text-white text-[11px] font-semibold px-5 shadow-sm hover:bg-slate-900">
                                Free Download
                            </a>
                        </div>
                    </div>
                </header>

                {{-- Split content --}}
                <main class="relative z-10">
                    <div class="mx-auto max-w-6xl px-6 py-10">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                            {{-- Left content --}}
                            <div class="flex justify-center lg:justify-start">
                                @yield('content')
                            </div>

                            {{-- Spacer column (panel kanan ada di background absolute) --}}
                            <div class="hidden lg:block"></div>
                        </div>
                    </div>
                </main>
            </div>

            <footer class="pb-8">
                <div class="mx-auto max-w-6xl px-6 text-xs text-slate-400 flex items-center justify-between">
                    <span>
                        © 2026, Made with
                        <span class="mx-1 text-rose-500">♥</span>
                        by
                        <span class="font-semibold text-[#4FD1C5]">Gamma Estu Mahardika</span>
                    </span>
                    <div class="space-x-6">
                        <a href="{{ route('dashboard.index') }}" class="hover:text-slate-600">Dashboard</a>
                        <a href="{{ route('profile.index') }}" class="hover:text-slate-600">Profile</a>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>

