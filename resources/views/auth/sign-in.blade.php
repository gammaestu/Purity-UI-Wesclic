@extends('layouts.auth')

@section('title', 'Sign In - Purity UI')

@section('content')
    <div class="w-full max-w-md">
        <h1 class="text-4xl font-semibold text-[#4FD1C5] mb-2">Welcome Back</h1>
        <p class="text-xs text-slate-400 mb-8">Enter your email and password to sign in</p>

        @if (session('error'))
            <div class="mb-5 rounded-xl bg-amber-50 border border-amber-200 px-4 py-3 text-xs text-amber-700">
                <p>{{ session('error') }}</p>
            </div>
        @endif

        <form action="{{ route('auth.login') }}" method="post" class="space-y-5">
            @csrf

            @if ($errors->any())
                <div class="rounded-xl bg-rose-50 border border-rose-200 px-4 py-3 text-xs text-rose-600">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div>
                <label class="block text-xs font-semibold text-slate-600 mb-2">Email</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Your email address"
                    required
                    class="h-11 w-full rounded-xl border border-slate-200 bg-white px-4 text-xs text-slate-700 placeholder:text-slate-300 outline-none focus:border-[#4FD1C5]"
                />
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-600 mb-2">Password</label>
                <input
                    type="password"
                    name="password"
                    placeholder="Your password"
                    required
                    class="h-11 w-full rounded-xl border border-slate-200 bg-white px-4 text-xs text-slate-700 placeholder:text-slate-300 outline-none focus:border-[#4FD1C5]"
                />
            </div>

            <div class="flex items-center gap-3 pt-1">
                <label class="relative inline-flex h-5 w-10 items-center rounded-full cursor-pointer">
                    <input type="checkbox" name="remember" class="peer sr-only" {{ old('remember') ? 'checked' : '' }}>
                    <span class="peer h-5 w-10 rounded-full bg-slate-200 transition peer-checked:bg-[#4FD1C5]">
                        <span class="absolute left-0.5 top-0.5 h-4 w-4 rounded-full bg-white shadow-sm transition peer-checked:translate-x-5"></span>
                    </span>
                </label>
                <span class="text-[11px] text-slate-500">Remember me</span>
            </div>

            <button type="submit" class="w-full rounded-xl bg-[#4FD1C5] text-white text-xs font-semibold py-3 hover:brightness-95">
                SIGN IN
            </button>

            <p class="text-center text-[11px] text-slate-400 pt-1">
                Don't have an account?
                <a href="{{ route('auth.signup') }}" class="text-[#4FD1C5] font-semibold hover:brightness-95">Sign up</a>
            </p>
        </form>
    </div>
@endsection

