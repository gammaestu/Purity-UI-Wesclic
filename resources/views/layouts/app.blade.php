<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Purity UI Dashboard')</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-50 font-sans text-slate-800">
        <div class="flex min-h-screen">
            {{-- Sidebar --}}
            <aside class="w-64 bg-white border-r border-slate-100 px-6 py-8 flex flex-col gap-6">
                <x-brand.purity container-class="flex items-center gap-2 mb-2" />

                <nav class="space-y-6">
                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase mb-3">Pages</p>

                        <x-sidebar.nav-item :href="route('dashboard.index')" label="Dashboard" :active="request()->routeIs('dashboard.index')">
                            <x-slot:icon>
                                <x-icons.dashboard class="h-5 w-5"/>
                            </x-slot:icon>
                        </x-sidebar.nav-item>

                        <div class="mt-3 space-y-3">
                            <x-sidebar.nav-item :href="route('tables.index')" label="Tables" :active="request()->routeIs('tables.index')">
                                <x-slot:icon>
                                    <x-icons.chart-bar class="h-5 w-5"/>
                                </x-slot:icon>
                            </x-sidebar.nav-item>

                            <x-sidebar.nav-item :href="route('billing.index')" label="Billing" :active="request()->routeIs('billing.index')">
                                <x-slot:icon>
                                    <x-icons.credit-card class="h-5 w-5"/>
                                </x-slot:icon>
                            </x-sidebar.nav-item>

                            <x-sidebar.nav-item href="#" label="RTL" :active="false">
                                <x-slot:icon>
                                    <x-icons.rtl class="h-5 w-5"/>
                                </x-slot:icon>
                            </x-sidebar.nav-item>
                        </div>
                    </div>

                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase mb-3">Account pages</p>
                        <div class="space-y-3">
                            <x-sidebar.nav-item :href="route('profile.index')" label="Profile" :active="request()->routeIs('profile.index')">
                                <x-slot:icon>
                                    <x-icons.user class="h-5 w-5"/>
                                </x-slot:icon>
                            </x-sidebar.nav-item>

                            <x-sidebar.nav-item :href="route('auth.signin')" label="Sign In" :active="request()->routeIs('auth.signin')">
                                <x-slot:icon>
                                    <x-icons.document class="h-5 w-5"/>
                                </x-slot:icon>
                            </x-sidebar.nav-item>

                            <x-sidebar.nav-item :href="route('auth.signup')" label="Sign Up" :active="request()->routeIs('auth.signup')">
                                <x-slot:icon>
                                    <x-icons.rocket class="h-5 w-5"/>
                                </x-slot:icon>
                            </x-sidebar.nav-item>
                        </div>
                    </div>

                </nav>

                {{-- Help card --}}
                <div class="rounded-2xl bg-[#4FD1C5] text-white px-4 py-5 shadow-sm">
                    <div class="mb-4 inline-flex h-9 w-9 items-center justify-center rounded-xl bg-white/90 text-[#4FD1C5] font-semibold">
                        ?
                    </div>
                    <p class="text-sm font-semibold leading-tight">Need help?</p>
                    <p class="text-xs font-medium text-white/90 mb-4">Please check our docs</p>
                    <button class="w-full rounded-xl bg-white text-slate-700 text-[11px] font-semibold py-2 shadow-[0_10px_25px_-15px_rgba(0,0,0,0.45)]">
                        DOCUMENTATION
                    </button>
                </div>
            </aside>

            {{-- Main content --}}
            <div class="flex-1 flex flex-col">
                {{-- Top bar --}}
                <header class="px-8 pt-6 pb-4 flex items-center justify-between">
                    <div>
                        <p class="text-xs text-slate-400 mb-1">@yield('breadcrumb', 'Pages / Dashboard')</p>
                        <h1 class="text-xl font-semibold text-slate-800">@yield('page_heading', 'Dashboard')</h1>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
                                <x-icons.search class="h-4 w-4" />
                            </span>
                            <input
                                type="text"
                                placeholder="Type here..."
                                class="h-9 w-56 rounded-full border border-slate-200 bg-slate-50 pl-8 pr-3 text-xs outline-none focus:border-[#4FD1C5] focus:bg-white"
                            />
                        </div>
                        <div class="flex items-center gap-3 pl-1">
                            <a href="{{ route('auth.signin') }}" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-slate-800">
                                <x-icons.user class="h-4 w-4 text-slate-500" />
                                <span>Sign In</span>
                            </a>

                            <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-full text-slate-400 hover:text-slate-600 hover:bg-slate-100">
                                <x-icons.settings class="h-5 w-5" />
                            </button>

                            <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-full text-slate-400 hover:text-slate-600 hover:bg-slate-100">
                                <x-icons.bell class="h-5 w-5" />
                            </button>
                        </div>
                    </div>
                </header>

                <main class="flex-1 px-8 pb-10">
                    @yield('content')
                </main>

                <footer class="px-8 py-4 border-t border-slate-100 text-xs text-slate-400 flex items-center justify-between">
                    <span>
                        @ 2026, Made with
                        <span class="mx-1 text-rose-500">♥</span>
                        by
                        <span class="font-semibold text-[#4FD1C5]">Gamma Estu Mahardika</span>
                    </span>
                    <div class="space-x-4">
                        <button class="hover:text-slate-600">Dashboard UI</button>
                        <button class="hover:text-slate-600">Tailwind</button>
                        <button class="hover:text-slate-600">Laravel</button>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>

