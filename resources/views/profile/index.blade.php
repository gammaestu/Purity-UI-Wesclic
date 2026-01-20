@extends('layouts.app')

@section('title', 'Purity UI Profile')
@section('breadcrumb', 'Pages / Profile')
@section('page_heading', 'Profile')

@section('content')
    @php
        $user = [
            'name' => 'Gamma Estu Mahardika',
            'email' => 'gammaestu05@gmail.com',
            'avatar' => 'https://i.pravatar.cc/120?img=12',
        ];

        $platformSettings = [
            'Account' => [
                ['label' => 'Email me when someone follows me', 'enabled' => true],
                ['label' => 'Email me when someone answers my post', 'enabled' => false],
                ['label' => 'Email me when someone mentions me', 'enabled' => true],
            ],
            'Application' => [
                ['label' => 'New launches and projects', 'enabled' => false],
                ['label' => 'Monthly product updates', 'enabled' => false],
                ['label' => 'Subscribe to newsletter', 'enabled' => true],
            ],
        ];

        $profileInfo = [
            'bio' => "Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).",
            'full_name' => 'Alec M. Thompson',
            'mobile' => '(44) 123 1234 123',
            'email' => 'alecthompson@mail.com',
            'location' => 'United States',
        ];

        $conversations = [
            ['name' => 'Alec Thompson', 'avatar' => 'https://i.pravatar.cc/80?img=12', 'message' => 'Hi! I need more informations...', 'action' => 'REPLY'],
            ['name' => 'Alexa Liras', 'avatar' => 'https://i.pravatar.cc/80?img=32', 'message' => 'Awesome work, can you change...', 'action' => 'REPLY'],
            ['name' => 'Laurent Perrier', 'avatar' => 'https://i.pravatar.cc/80?img=44', 'message' => 'Have a great afternoon...', 'action' => 'REPLY'],
            ['name' => 'Michael Levi', 'avatar' => 'https://i.pravatar.cc/80?img=21', 'message' => 'About files I can...', 'action' => 'REPLY'],
        ];

        $projects = [
            [
                'image' => 'https://images.pexels.com/photos/37347/office-sitting-room-executive-sitting.jpg?auto=compress&cs=tinysrgb&w=1200',
                'tag' => 'Project #1',
                'title' => 'Modern',
                'desc' => 'As Uber works through a huge amount of internal management turmoil.',
            ],
            [
                'image' => 'https://images.pexels.com/photos/1866149/pexels-photo-1866149.jpeg?auto=compress&cs=tinysrgb&w=1200',
                'tag' => 'Project #2',
                'title' => 'Scandinavian',
                'desc' => 'Music is something that every person has his or her own specific opinion about.',
            ],
            [
                'image' => 'https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=1200',
                'tag' => 'Project #3',
                'title' => 'Minimalist',
                'desc' => 'Different people have different taste, and various types of music.',
            ],
        ];
    @endphp

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
                        <img src="{{ $user['avatar'] }}" alt="" class="h-16 w-16 rounded-2xl ring-2 ring-white shadow-sm object-cover">
                        <span class="absolute -bottom-1 -right-1 inline-flex h-7 w-7 items-center justify-center rounded-xl bg-white ring-1 ring-slate-100 text-[#4FD1C5]">
                            <x-icons.pencil class="h-4 w-4" />
                        </span>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-800">{{ $user['name'] }}</p>
                        <p class="text-xs text-slate-400">{{ $user['email'] }}</p>
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

            @foreach ($platformSettings as $group => $items)
                <p class="text-[11px] uppercase tracking-wide font-semibold text-slate-400 mb-3">{{ $group }}</p>
                <div class="space-y-3 mb-5 last:mb-0">
                    @foreach ($items as $item)
                        @php
                            $on = $item['enabled'];
                        @endphp
                        <label class="flex items-center justify-between gap-4">
                            <span class="text-xs text-slate-500">{{ $item['label'] }}</span>
                            <span class="relative inline-flex h-5 w-9 items-center rounded-full {{ $on ? 'bg-[#4FD1C5]' : 'bg-slate-200' }}">
                                <span class="h-4 w-4 rounded-full bg-white shadow-sm transform transition {{ $on ? 'translate-x-4' : 'translate-x-1' }}"></span>
                            </span>
                        </label>
                    @endforeach
                </div>
            @endforeach
        </div>

        {{-- Profile information --}}
        <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6">
            <h3 class="text-sm font-semibold text-slate-800 mb-2">Profile Information</h3>
            <p class="text-xs text-slate-400 leading-relaxed mb-5">{{ $profileInfo['bio'] }}</p>

            <div class="space-y-3 text-xs">
                <div class="flex gap-2">
                    <span class="text-slate-400 w-24">Full Name:</span>
                    <span class="font-semibold text-slate-700">{{ $profileInfo['full_name'] }}</span>
                </div>
                <div class="flex gap-2">
                    <span class="text-slate-400 w-24">Mobile:</span>
                    <span class="font-semibold text-slate-700">{{ $profileInfo['mobile'] }}</span>
                </div>
                <div class="flex gap-2">
                    <span class="text-slate-400 w-24">Email:</span>
                    <span class="font-semibold text-slate-700">{{ $profileInfo['email'] }}</span>
                </div>
                <div class="flex gap-2">
                    <span class="text-slate-400 w-24">Location:</span>
                    <span class="font-semibold text-slate-700">{{ $profileInfo['location'] }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-slate-400 w-24">Social Media:</span>
                    <div class="flex items-center gap-3 text-[#4FD1C5]">
                        <span class="text-xs font-semibold">f</span>
                        <span class="text-xs font-semibold">t</span>
                        <span class="text-xs font-semibold">i</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Conversations --}}
        <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6">
            <h3 class="text-sm font-semibold text-slate-800 mb-4">Conversations</h3>
            <div class="space-y-4">
                @foreach ($conversations as $c)
                    <div class="flex items-center justify-between gap-4">
                        <div class="flex items-center gap-3">
                            <img src="{{ $c['avatar'] }}" alt="" class="h-10 w-10 rounded-2xl object-cover ring-1 ring-slate-100">
                            <div>
                                <p class="text-xs font-semibold text-slate-700">{{ $c['name'] }}</p>
                                <p class="text-[11px] text-slate-400">{{ $c['message'] }}</p>
                            </div>
                        </div>
                        <button class="text-[11px] font-semibold text-[#4FD1C5]">{{ $c['action'] }}</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Projects --}}
    <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6">
        <h3 class="text-sm font-semibold text-slate-800">Projects</h3>
        <p class="text-xs text-slate-400 mt-1 mb-4">Architects design houses</p>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">
            @foreach ($projects as $p)
                <div class="rounded-3xl bg-white border border-slate-100 overflow-hidden shadow-sm">
                    <div class="h-36 bg-cover bg-center" style="background-image: url('{{ $p['image'] }}')"></div>
                    <div class="p-5">
                        <p class="text-[11px] text-slate-400">{{ $p['tag'] }}</p>
                        <p class="text-sm font-semibold text-slate-800 mt-1">{{ $p['title'] }}</p>
                        <p class="text-xs text-slate-400 mt-2 leading-relaxed">{{ $p['desc'] }}</p>
                        <div class="mt-4 flex items-center justify-between">
                            <button class="h-8 px-4 rounded-xl border border-[#4FD1C5]/40 text-[11px] font-semibold text-[#4FD1C5] hover:bg-[#4FD1C5]/5">
                                VIEW ALL
                            </button>
                            <div class="flex -space-x-2">
                                @for ($i = 0; $i < 3; $i++)
                                    <img src="https://i.pravatar.cc/60?img={{ 10 + $i }}" alt="" class="h-7 w-7 rounded-full ring-2 ring-white object-cover">
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

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

