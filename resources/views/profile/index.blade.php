@extends('layouts.app')

@section('title', 'Purity UI Profile')
@section('breadcrumb', 'Pages / Profile')
@section('page_heading', 'Profile')

@section('content')
    {{-- Banner --}}
    <div class="relative mb-6">
        <div class="h-44 rounded-3xl bg-[#4FD1C5] overflow-hidden">
            <div class="absolute inset-0 opacity-40 bg-[radial-gradient(circle_at_70%_30%,rgba(255,255,255,0.55),transparent_55%)]"></div>
            <div class="absolute inset-0 opacity-35 bg-[radial-gradient(circle_at_80%_60%,rgba(255,255,255,0.35),transparent_55%)]"></div>
            <div class="absolute -right-24 -top-16 h-72 w-72 rounded-full border border-white/20"></div>
            <div class="absolute -right-6 top-6 h-72 w-72 rounded-full border border-white/20"></div>
        </div>

        {{-- Profile header card --}}
        <div class="relative -mt-10 px-4">
            <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-4 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <img src="{{ $profileInfo->avatar ?? 'https://i.pravatar.cc/120?img=12' }}" alt="" class="h-16 w-16 rounded-2xl ring-2 ring-white shadow-sm object-cover">
                        <span class="absolute -bottom-1 -right-1 inline-flex h-7 w-7 items-center justify-center rounded-xl bg-white ring-1 ring-slate-100 text-[#4FD1C5]">
                            <x-icons.pencil class="h-4 w-4" />
                        </span>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-800">{{ $user->name }}</p>
                        <p class="text-xs text-slate-400">{{ $user->email }}</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <button class="h-9 px-4 rounded-xl bg-slate-50 text-xs font-semibold text-slate-700 ring-1 ring-slate-100">OVERVIEW</button>
                    <button class="h-9 px-4 rounded-xl text-xs font-semibold text-slate-400 hover:text-slate-700 hover:bg-slate-50">TEAMS</button>
                    <button class="h-9 px-4 rounded-xl text-xs font-semibold text-slate-400 hover:text-slate-700 hover:bg-slate-50">PROJECTS</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Middle sections --}}
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mb-6">
        {{-- Platform settings --}}
        <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6">
            <h3 class="text-sm font-semibold text-slate-800 mb-4">Platform Settings</h3>

            @if($platformSettings && count($platformSettings) > 0)
                @foreach ($platformSettings as $group => $items)
                    <p class="text-[11px] uppercase tracking-wide font-semibold text-slate-400 mb-3">{{ $group }}</p>
                    <div class="space-y-3 mb-5 last:mb-0">
                        @foreach ($items as $item)
                            @php
                                $on = is_array($item) ? $item['enabled'] : $item->enabled;
                            @endphp
                            <label class="flex items-center justify-between gap-4">
                                <span class="text-xs text-slate-500">{{ is_array($item) ? $item['label'] : $item->label }}</span>
                                <span class="relative inline-flex h-5 w-9 items-center rounded-full {{ $on ? 'bg-[#4FD1C5]' : 'bg-slate-200' }}">
                                    <span class="h-4 w-4 rounded-full bg-white shadow-sm transform transition {{ $on ? 'translate-x-4' : 'translate-x-1' }}"></span>
                                </span>
                            </label>
                        @endforeach
                    </div>
                @endforeach
            @else
                <p class="text-xs text-slate-400">No platform settings available.</p>
            @endif
        </div>

        {{-- Profile information --}}
        <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6">
            <h3 class="text-sm font-semibold text-slate-800 mb-2">Profile Information</h3>
            <p class="text-xs text-slate-400 leading-relaxed mb-5">{{ $profileInfo->bio ?? 'No bio available' }}</p>

            <div class="space-y-3 text-xs">
                <div class="flex gap-2">
                    <span class="text-slate-400 w-24">Full Name:</span>
                    <span class="font-semibold text-slate-700">{{ $profileInfo->full_name ?? $user->name }}</span>
                </div>
                <div class="flex gap-2">
                    <span class="text-slate-400 w-24">Mobile:</span>
                    <span class="font-semibold text-slate-700">{{ $profileInfo->mobile ?? 'Not set' }}</span>
                </div>
                <div class="flex gap-2">
                    <span class="text-slate-400 w-24">Email:</span>
                    <span class="font-semibold text-slate-700">{{ $user->email }}</span>
                </div>
                <div class="flex gap-2">
                    <span class="text-slate-400 w-24">Location:</span>
                    <span class="font-semibold text-slate-700">{{ $profileInfo->location ?? 'Not set' }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-slate-400 w-24">Social Media:</span>
                    <div class="flex items-center gap-3 text-[#4FD1C5]">
                        @if($profileInfo && $profileInfo->social_media)
                            @if(isset($profileInfo->social_media['facebook']))
                                <a href="{{ $profileInfo->social_media['facebook'] }}" target="_blank" class="text-xs font-semibold hover:underline">f</a>
                            @endif
                            @if(isset($profileInfo->social_media['twitter']))
                                <a href="{{ $profileInfo->social_media['twitter'] }}" target="_blank" class="text-xs font-semibold hover:underline">t</a>
                            @endif
                            @if(isset($profileInfo->social_media['instagram']))
                                <a href="{{ $profileInfo->social_media['instagram'] }}" target="_blank" class="text-xs font-semibold hover:underline">i</a>
                            @endif
                        @else
                            <span class="text-xs font-semibold">f</span>
                            <span class="text-xs font-semibold">t</span>
                            <span class="text-xs font-semibold">i</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Conversations --}}
        <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6">
            <h3 class="text-sm font-semibold text-slate-800 mb-4">Conversations</h3>
            <div class="space-y-4">
                @if($conversations && count($conversations) > 0)
                    @foreach ($conversations as $c)
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-3">
                                <img src="{{ is_array($c) ? $c['avatar'] : $c->avatar }}" alt="" class="h-10 w-10 rounded-2xl object-cover ring-1 ring-slate-100">
                                <div>
                                    <p class="text-xs font-semibold text-slate-700">{{ is_array($c) ? $c['name'] : $c->name }}</p>
                                    <p class="text-[11px] text-slate-400">{{ is_array($c) ? $c['message'] : $c->message }}</p>
                                </div>
                            </div>
                            <button class="text-[11px] font-semibold text-[#4FD1C5]">REPLY</button>
                        </div>
                    @endforeach
                @else
                    <p class="text-xs text-slate-400">No conversations available.</p>
                @endif
            </div>
        </div>
    </div>

    {{-- Projects --}}
    <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6">
        <h3 class="text-sm font-semibold text-slate-800">Projects</h3>
        <p class="text-xs text-slate-400 mt-1 mb-4">Architects design houses</p>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">
            {{-- Create new project --}}
            <div class="rounded-3xl border border-dashed border-slate-200 bg-white flex flex-col items-center justify-center text-center p-8">
                <div class="h-12 w-12 rounded-2xl bg-slate-50 ring-1 ring-slate-100 flex items-center justify-center text-2xl text-slate-300">
                    +
                </div>
                <p class="text-sm font-semibold text-slate-600 mt-4">Create a New Project</p>
            </div>
        </div>
    </div>
@endsection
