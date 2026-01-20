@extends('layouts.auth-landing')

@section('title', 'Sign Up - Purity UI')

@section('body')
    <div class="min-h-screen bg-white text-slate-700 flex flex-col">
        {{-- Hero with navbar --}}
        <div class="relative overflow-hidden bg-[#4FD1C5] pb-44">
            <div class="absolute inset-0 opacity-35 bg-[radial-gradient(circle_at_20%_20%,rgba(255,255,255,0.5),transparent_55%),radial-gradient(circle_at_70%_40%,rgba(255,255,255,0.35),transparent_60%),radial-gradient(circle_at_40%_90%,rgba(255,255,255,0.25),transparent_50%)]"></div>
            <div class="absolute inset-0 opacity-30 bg-[linear-gradient(115deg,rgba(255,255,255,0.4),transparent_40%,rgba(255,255,255,0.3))]"></div>
            <div class="absolute inset-0 opacity-35 bg-[repeating-linear-gradient(135deg,rgba(255,255,255,0.22)_0px,rgba(255,255,255,0.22)_1px,transparent_1px,transparent_7px)]"></div>

            <div class="relative mx-auto max-w-6xl px-6 pt-8">
                <div class="flex items-center justify-between text-white">
                    <x-brand.purity :invert="true" text-class="text-sm font-semibold tracking-wide" />

                    <nav class="hidden lg:flex items-center gap-6 text-[11px] font-semibold">
                        <a href="{{ route('dashboard.index') }}" class="hover:text-white/90">Dashboard</a>
                        <a href="#" class="hover:text-white/90">Profile</a>
                        <a href="{{ route('auth.signup') }}" class="hover:text-white/90">Sign Up</a>
                        <a href="{{ route('auth.signin') }}" class="hover:text-white/90">Sign In</a>
                    </nav>

                    <a href="#" class="rounded-full bg-white text-[#4FD1C5] text-[11px] font-semibold px-5 py-2 shadow-sm hover:bg-white/90">
                        Free Download
                    </a>
                </div>

                <div class="mt-16 text-center text-white">
                    <h1 class="text-4xl font-semibold mb-2">Welcome!</h1>
                    <p class="text-sm font-medium opacity-90">Use these awesome forms to login or create new</p>
                    <p class="text-sm font-medium opacity-90">account in your project for free.</p>
                </div>
            </div>
        </div>

        {{-- Card --}}
        <div class="relative z-10 -mt-28 flex justify-center px-4">
            <div class="w-full max-w-xl rounded-3xl bg-white shadow-2xl ring-1 ring-slate-100 px-10 py-10">
                <h3 class="text-center text-sm font-semibold text-slate-700">Register with</h3>

                <div class="mt-5 flex items-center justify-center gap-3">
                    <button type="button" class="h-12 w-14 rounded-xl border border-slate-100 bg-slate-50 text-slate-600 shadow-[0_8px_20px_-12px_rgba(0,0,0,0.25)] hover:border-slate-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="mx-auto h-5 w-5 fill-current">
                            <path d="M279.14 288l14.22-92.66h-88.91V133.89c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0C150.07 0 99.67 54.42 99.67 152.19V195.3H12.57V288h87.1v224h104.07V288z"/>
                        </svg>
                    </button>
                    <button type="button" class="h-12 w-14 rounded-xl border border-slate-100 bg-slate-50 text-slate-700 shadow-[0_8px_20px_-12px_rgba(0,0,0,0.25)] hover:border-slate-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="mx-auto h-5 w-5 fill-current">
                            <path d="M318.7 268.7c-.2-37.6 16.4-66.1 50.1-87.3-18.8-27.4-47.4-42.4-84.9-45.2-35.7-2.7-74.6 20.8-88.8 20.8-15 0-49.4-19.9-76.3-19.4-39.3.6-75.6 22.9-95.8 58.2-41 71.1-10.5 177.9 29.4 236.1 19.5 28.3 42.8 60.1 73.5 59 29.5-1.2 40.7-19 76.4-19 35.5 0 45.6 19 76.5 18.4 31.6-.5 51.5-28.6 70.8-57.1 22.3-32.7 31.4-64.3 31.7-65.9-.7-.3-60.8-23.3-61-92.6zM260.5 88.1c26.9-32.6 24.6-62.3 23.8-72.8-23 1.3-49.7 15.4-65.5 34.7-17 20.6-26.9 46-24.8 73.4 26.2 2 50.4-11.5 66.5-35.3z"/>
                        </svg>
                    </button>
                    <button type="button" class="h-12 w-14 rounded-xl border border-slate-100 bg-slate-50 text-slate-600 shadow-[0_8px_20px_-12px_rgba(0,0,0,0.25)] hover:border-slate-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" class="mx-auto h-5 w-5 fill-current">
                            <path d="M488 261.8c0-17.8-1.6-35-4.6-51.8H250v98.2h134.6c-5.8 31.2-23.3 57.6-49.6 75.2v62.7h80.3c47.1-43.4 72.7-107.5 72.7-184.5zM250 500c65.7 0 120.8-21.7 161.1-59l-80.3-62.7c-22.2 15-50.6 23.8-80.8 23.8-62 0-114.5-41.8-133.3-98.1H33.5v61.6C73.8 454.3 156.1 500 250 500zM116.7 303c-4.8-14.5-7.5-29.9-7.5-45.7s2.7-31.2 7.5-45.7V150H33.5C12 186.4 0 227.7 0 257.3c0 29.6 12 70.9 33.5 107.3l83.2-61.6zM250 114.3c35.7 0 67.8 12.3 93 36.6l69.7-69.7C370.8 45.4 315.7 24 250 24 156.1 24 73.8 69.7 33.5 150l83.2 61.6C135.5 156.1 188 114.3 250 114.3z"/>
                        </svg>
                    </button>
                </div>

                <div class="mt-5 text-center text-[11px] font-semibold text-slate-400">
                    or
                </div>

                <form action="#" method="post" class="mt-6 space-y-4">
                    @csrf
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 mb-2">Name</label>
                        <input
                            type="text"
                            placeholder="Your full name"
                            class="h-11 w-full rounded-xl border border-slate-200 bg-white px-4 text-xs text-slate-700 placeholder:text-slate-300 outline-none focus:border-[#4FD1C5]"
                        />
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-600 mb-2">Email</label>
                        <input
                            type="email"
                            placeholder="Your email address"
                            class="h-11 w-full rounded-xl border border-slate-200 bg-white px-4 text-xs text-slate-700 placeholder:text-slate-300 outline-none focus:border-[#4FD1C5]"
                        />
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-600 mb-2">Password</label>
                        <input
                            type="password"
                            placeholder="Your password"
                            class="h-11 w-full rounded-xl border border-slate-200 bg-white px-4 text-xs text-slate-700 placeholder:text-slate-300 outline-none focus:border-[#4FD1C5]"
                        />
                    </div>

                    <label class="flex items-center gap-3 pt-1 cursor-pointer select-none">
                        <span class="relative inline-flex h-5 w-10 items-center rounded-full bg-[#4FD1C5] shadow-inner">
                            <input type="checkbox" class="peer sr-only" checked>
                            <span class="absolute left-0.5 top-0.5 h-4 w-4 rounded-full bg-white shadow-sm transition peer-checked:translate-x-5"></span>
                        </span>
                        <span class="text-[11px] text-slate-500">Remember me</span>
                    </label>

                    <button type="button" class="w-full rounded-xl bg-[#4FD1C5] text-white text-xs font-semibold py-3 tracking-wide shadow-sm hover:brightness-95">
                        SIGN UP
                    </button>

                    <p class="text-center text-[11px] text-slate-400 pt-1">
                        Already have an account?
                        <a href="{{ route('auth.signin') }}" class="text-[#4FD1C5] font-semibold hover:brightness-95">Sign in</a>
                    </p>
                </form>
            </div>
        </div>

        {{-- Footer --}}
        <footer class="mt-auto pb-10 pt-20">
            <div class="mx-auto max-w-6xl px-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between text-[11px] text-slate-400">
                <span>© 2021, Made with ♥ by Creative Tim &amp; Simmmple for a better web</span>
                <div class="flex items-center gap-5">
                    <a href="#" class="hover:text-slate-600">Creative Tim</a>
                    <a href="#" class="hover:text-slate-600">Simmmple</a>
                    <a href="#" class="hover:text-slate-600">Blog</a>
                    <a href="#" class="hover:text-slate-600">License</a>
                </div>
            </div>
        </footer>
    </div>
@endsection
