@extends('layouts.auth')

@section('title', 'Sign In - Purity UI')

@section('content')
    <div class="w-full max-w-md">
        <h1 class="text-4xl font-semibold text-[#4FD1C5] mb-2">Welcome Back</h1>
        <p class="text-xs text-slate-400 mb-8">Enter your email and password to sign in</p>

        <form action="#" method="post" class="space-y-5">
            @csrf

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

            <div class="flex items-center gap-3 pt-1">
                <button type="button" class="relative inline-flex h-5 w-10 items-center rounded-full bg-[#4FD1C5]">
                    <span class="inline-block h-4 w-4 translate-x-5 rounded-full bg-white shadow-sm"></span>
                </button>
                <span class="text-[11px] text-slate-500">Remember me</span>
            </div>

            <button type="button" class="w-full rounded-xl bg-[#4FD1C5] text-white text-xs font-semibold py-3 hover:brightness-95">
                SIGN IN
            </button>

            <p class="text-center text-[11px] text-slate-400 pt-1">
                Don't have an account?
                <a href="{{ route('auth.signup') }}" class="text-[#4FD1C5] font-semibold hover:brightness-95">Sign up</a>
            </p>
        </form>
    </div>
@endsection

