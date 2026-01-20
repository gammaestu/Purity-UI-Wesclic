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
            <aside class="w-64 bg-white border-r border-slate-100 px-6 py-8 flex flex-col">
                <div class="flex items-center gap-3 mb-8">
                    <div class="h-9 w-9 rounded-xl bg-sky-500 flex items-center justify-center text-white font-semibold">
                        PU
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xs uppercase tracking-wide text-slate-400">Purity UI</span>
                        <span class="text-sm font-semibold text-slate-800">Dashboard</span>
                    </div>
                </div>

                <nav class="flex-1 space-y-6 text-sm">
                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase mb-3">Pages</p>
                        <a href="{{ route('dashboard.index') }}"
                           class="flex items-center gap-3 px-3 py-2 rounded-xl bg-sky-500 text-white shadow-sm">
                            <span class="inline-flex h-6 w-6 items-center justify-center rounded-lg bg-white/10">
                                <!-- simple dashboard icon -->
                                <span class="h-3 w-3 rounded-sm bg-white"></span>
                            </span>
                            <span class="font-medium">Dashboard</span>
                        </a>
                        <div class="mt-1 space-y-1">
                            <button type="button" class="flex w-full items-center gap-3 px-3 py-2 rounded-xl text-slate-500 hover:bg-slate-50">
                                <span class="h-6 w-6 rounded-lg bg-slate-100"></span>
                                <span>Tables</span>
                            </button>
                            <button type="button" class="flex w-full items-center gap-3 px-3 py-2 rounded-xl text-slate-500 hover:bg-slate-50">
                                <span class="h-6 w-6 rounded-lg bg-slate-100"></span>
                                <span>Billing</span>
                            </button>
                            <button type="button" class="flex w-full items-center gap-3 px-3 py-2 rounded-xl text-slate-500 hover:bg-slate-50">
                                <span class="h-6 w-6 rounded-lg bg-slate-100"></span>
                                <span>RTL</span>
                            </button>
                        </div>
                    </div>

                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase mb-3">Account pages</p>
                        <div class="space-y-1">
                            <button type="button" class="flex w-full items-center gap-3 px-3 py-2 rounded-xl text-slate-500 hover:bg-slate-50">
                                <span class="h-6 w-6 rounded-lg bg-slate-100"></span>
                                <span>Profile</span>
                            </button>
                            <a href="{{ route('auth.signin') }}" class="flex w-full items-center gap-3 px-3 py-2 rounded-xl text-slate-500 hover:bg-slate-50">
                                <span class="h-6 w-6 rounded-lg bg-slate-100"></span>
                                <span>Sign In</span>
                            </a>
                            <a href="{{ route('auth.signup') }}" class="flex w-full items-center gap-3 px-3 py-2 rounded-xl text-slate-500 hover:bg-slate-50">
                                <span class="h-6 w-6 rounded-lg bg-slate-100"></span>
                                <span>Sign Up</span>
                            </a>
                        </div>
                    </div>

                </nav>

                {{-- Help card --}}
                <div class="mt-8 rounded-2xl bg-sky-500 text-white px-4 py-5">
                    <p class="text-xs font-semibold uppercase tracking-wide opacity-80 mb-1">Need help?</p>
                    <p class="text-sm font-semibold mb-4">Please check our docs</p>
                    <button class="w-full rounded-xl bg-white/90 text-sky-600 text-xs font-semibold py-2">
                        DOCUMENTATION
                    </button>
                </div>
            </aside>

            {{-- Main content --}}
            <div class="flex-1 flex flex-col">
                {{-- Top bar --}}
                <header class="px-8 pt-6 pb-4 flex items-center justify-between">
                    <div>
                        <p class="text-xs text-slate-400 mb-1">Pages / Dashboard</p>
                        <h1 class="text-xl font-semibold text-slate-800">Dashboard</h1>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <span class="absolute inset-y-0 left-3 flex items-center text-slate-400 text-xs">
                                🔍
                            </span>
                            <input
                                type="text"
                                placeholder="Type here..."
                                class="h-9 w-56 rounded-full border border-slate-200 bg-slate-50 pl-8 pr-3 text-xs outline-none focus:border-sky-400 focus:bg-white"
                            />
                        </div>
                        <a href="{{ route('auth.signin') }}" class="text-xs text-slate-500 hover:text-slate-700">Sign In</a>
                    </div>
                </header>

                <main class="flex-1 px-8 pb-10">
                    @yield('content')
                </main>

                <footer class="px-8 py-4 border-t border-slate-100 text-xs text-slate-400 flex justify-between">
                    <span>© 2026, made with ♥ by Creative Tim &amp; Simmmple</span>
                    <div class="space-x-4">
                        <button class="hover:text-slate-600">Creative Tim</button>
                        <button class="hover:text-slate-600">Simmmple</button>
                        <button class="hover:text-slate-600">Blog</button>
                        <button class="hover:text-slate-600">License</button>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>

