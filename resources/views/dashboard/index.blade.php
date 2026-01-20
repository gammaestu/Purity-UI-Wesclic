@extends('layouts.app')

@section('title', 'Purity UI Dashboard')

@section('content')
    {{-- Top stats cards --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
        <div class="rounded-2xl bg-white shadow-sm border border-slate-100 px-5 py-4">
            <p class="text-xs font-semibold text-slate-400 mb-2">Today’s Money</p>
            <div class="flex items-end justify-between">
                <p class="text-lg font-semibold text-slate-800">$53,000</p>
                <span class="text-xs font-semibold text-emerald-500">+55%</span>
            </div>
        </div>
        <div class="rounded-2xl bg-white shadow-sm border border-slate-100 px-5 py-4">
            <p class="text-xs font-semibold text-slate-400 mb-2">Today’s Users</p>
            <div class="flex items-end justify-between">
                <p class="text-lg font-semibold text-slate-800">2,300</p>
                <span class="text-xs font-semibold text-emerald-500">+3%</span>
            </div>
        </div>
        <div class="rounded-2xl bg-white shadow-sm border border-slate-100 px-5 py-4">
            <p class="text-xs font-semibold text-slate-400 mb-2">New Clients</p>
            <div class="flex items-end justify-between">
                <p class="text-lg font-semibold text-slate-800">+3,052</p>
                <span class="text-xs font-semibold text-rose-500">-14%</span>
            </div>
        </div>
        <div class="rounded-2xl bg-white shadow-sm border border-slate-100 px-5 py-4">
            <p class="text-xs font-semibold text-slate-400 mb-2">Total Sales</p>
            <div class="flex items-end justify-between">
                <p class="text-lg font-semibold text-slate-800">$173,000</p>
                <span class="text-xs font-semibold text-emerald-500">+8%</span>
            </div>
        </div>
    </div>

    {{-- Middle hero row --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        {{-- Purity card --}}
        <div class="lg:col-span-2 rounded-3xl bg-gradient-to-r from-sky-500 to-emerald-400 text-white px-8 py-7 flex items-center justify-between overflow-hidden">
            <div class="max-w-sm">
                <p class="text-xs uppercase tracking-wide font-semibold mb-2 opacity-80">Built by developers</p>
                <h2 class="text-xl font-semibold mb-2">Purity UI Dashboard</h2>
                <p class="text-xs text-white/80">
                    From colors, cards, typography to complex elements, you will find the full documentation.
                </p>
            </div>
            <div class="hidden md:flex items-center justify-center rounded-full bg-white/10 border border-white/30 h-32 w-32">
                <span class="text-lg font-semibold">chakra</span>
            </div>
        </div>

        {{-- Rockets card --}}
        <div class="rounded-3xl bg-white shadow-sm border border-slate-100 overflow-hidden flex flex-col">
            <div class="h-28 bg-[url('https://images.pexels.com/photos/1181675/pexels-photo-1181675.jpeg?auto=compress&cs=tinysrgb&w=800')] bg-cover bg-center"></div>
            <div class="px-6 py-5">
                <p class="text-xs uppercase tracking-wide text-slate-400 mb-1">Work with the Rockets</p>
                <p class="text-sm font-semibold text-slate-800 mb-2">
                    Wealth creation is an evolutionary recent positive-sum game. It is all about who takes the opportunity first.
                </p>
                <button class="text-xs font-semibold text-sky-500">Read more →</button>
            </div>
        </div>
    </div>

    {{-- Charts row --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        {{-- Active users chart --}}
        <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6 flex flex-col gap-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sm font-semibold text-slate-800 mb-1">Active Users</h3>
                    <p class="text-xs text-emerald-500">(+23) than last week</p>
                </div>
            </div>
            <div class="rounded-2xl bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 h-40 flex items-end justify-between px-5 pb-5">
                @for ($i = 0; $i < 10; $i++)
                    <div class="w-4 rounded-full bg-white/20" style="height: {{ 30 + ($i % 5) * 12 }}%"></div>
                @endfor
            </div>
            <div class="grid grid-cols-4 gap-3 text-xs mt-1">
                <div>
                    <p class="text-slate-400 mb-1">Users</p>
                    <p class="font-semibold text-slate-800">32,984</p>
                </div>
                <div>
                    <p class="text-slate-400 mb-1">Clicks</p>
                    <p class="font-semibold text-slate-800">2,42m</p>
                </div>
                <div>
                    <p class="text-slate-400 mb-1">Sales</p>
                    <p class="font-semibold text-slate-800">2,400$</p>
                </div>
                <div>
                    <p class="text-slate-400 mb-1">Items</p>
                    <p class="font-semibold text-slate-800">320</p>
                </div>
            </div>
        </div>

        {{-- Sales overview chart --}}
        <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6 flex flex-col gap-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sm font-semibold text-slate-800 mb-1">Sales overview</h3>
                    <p class="text-xs text-emerald-500">(+5) more in 2021</p>
                </div>
            </div>
            <div class="relative h-44">
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-t from-sky-200 via-emerald-100 to-white border border-sky-100"></div>
                <div class="absolute inset-3 flex items-end justify-between">
                    @for ($i = 0; $i < 12; $i++)
                        <div class="w-4 rounded-full bg-sky-400/40" style="height: {{ 30 + (($i + 3) % 6) * 8 }}%"></div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom row: projects + orders --}}
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
        {{-- Projects --}}
        <div class="xl:col-span-2 rounded-3xl bg-white shadow-sm border border-slate-100 p-6">
            <div class="flex items-center justify-between mb  -4">
                <div>
                    <h3 class="text-sm font-semibold text-slate-800">Projects</h3>
                    <p class="text-xs text-emerald-500">30 done this month</p>
                </div>
            </div>
            <div class="mt-4 overflow-x-auto">
                <table class="min-w-full text-xs">
                    <thead class="text-slate-400 text-[11px] uppercase tracking-wide">
                        <tr class="border-b border-slate-100">
                            <th class="text-left py-2">Companies</th>
                            <th class="text-left py-2">Members</th>
                            <th class="text-left py-2">Budget</th>
                            <th class="text-left py-2">Completion</th>
                        </tr>
                    </thead>
                    <tbody class="text-[13px]">
                        @php
                            $projects = [
                                ['name' => 'Chakra Soft UI Version', 'budget' => '$14,000', 'completion' => 60],
                                ['name' => 'Add Progress Track', 'budget' => '$3,000', 'completion' => 10],
                                ['name' => 'Fix Platform Errors', 'budget' => 'Not set', 'completion' => 100],
                                ['name' => 'Launch our Mobile App', 'budget' => '$32,000', 'completion' => 100],
                                ['name' => 'Add the New Pricing Page', 'budget' => '$400', 'completion' => 25],
                                ['name' => 'Redesign New Online Shop', 'budget' => '$7,600', 'completion' => 40],
                            ];
                        @endphp
                        @foreach ($projects as $project)
                            <tr class="border-b border-slate-50 last:border-0">
                                <td class="py-3">
                                    <div class="flex items-center gap-3">
                                        <div class="h-8 w-8 rounded-xl bg-slate-100"></div>
                                        <span class="font-medium text-slate-700">{{ $project['name'] }}</span>
                                    </div>
                                </td>
                                <td class="py-3">
                                    <div class="flex -space-x-1.5">
                                        @for ($i = 0; $i < 4; $i++)
                                            <span class="h-6 w-6 rounded-full border-2 border-white bg-slate-200"></span>
                                        @endfor
                                    </div>
                                </td>
                                <td class="py-3 text-slate-600">{{ $project['budget'] }}</td>
                                <td class="py-3">
                                    <div class="flex items-center gap-3">
                                        <div class="flex-1 h-1.5 rounded-full bg-slate-100 overflow-hidden">
                                            <div class="h-full rounded-full bg-emerald-400" style="width: {{ $project['completion'] }}%"></div>
                                        </div>
                                        <span class="text-xs font-semibold text-slate-600">{{ $project['completion'] }}%</span>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Orders overview --}}
        <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6">
            <div class="flex items-center justify-between mb-3">
                <div>
                    <h3 class="text-sm font-semibold text-slate-800">Orders overview</h3>
                    <p class="text-xs text-emerald-500">+30% this month</p>
                </div>
            </div>
            <div class="mt-4 text-xs relative pl-12">
                {{-- vertical line (centered with the 28px icon bubble => 14px from left) --}}
                <div class="absolute left-3.5 top-0 bottom-0 border-l border-slate-100"></div>
                @php
                    $orders = [
                        ['color' => 'bg-emerald-400', 'icon' => '🔔', 'title' => '$2400, Design changes', 'time' => '22 DEC 7:20 PM'],
                        ['color' => 'bg-rose-500', 'icon' => '🛡️', 'title' => 'New order #4219423', 'time' => '21 DEC 11:21 PM'],
                        ['color' => 'bg-sky-500', 'icon' => '🛒', 'title' => 'Server Payments for April', 'time' => '21 DEC 9:28 PM'],
                        ['color' => 'bg-amber-400', 'icon' => '💳', 'title' => 'New card added for order #3210145', 'time' => '20 DEC 3:52 PM'],
                        ['color' => 'bg-slate-800', 'icon' => '📦', 'title' => 'Unlock packages for Development', 'time' => '19 DEC 11:35 PM'],
                        ['color' => 'bg-purple-500', 'icon' => 'XD', 'title' => 'New order #9851258', 'time' => '18 DEC 4:41 PM'],
                    ];
                @endphp
                @foreach ($orders as $order)
                    <div class="relative flex items-start gap-3 pb-4 last:pb-0">
                        <span class="relative z-10 mt-0.5 h-7 w-7 rounded-full {{ $order['color'] }} flex items-center justify-center text-[10px] text-white shadow-sm">
                            <span class="leading-none @if($order['icon'] === 'XD') text-[9px] font-semibold tracking-tight @endif">
                                {{ $order['icon'] }}
                            </span>
                        </span>
                        <div class="flex-1">
                            <p class="text-slate-700 text-[13px]">{{ $order['title'] }}</p>
                            <p class="text-[11px] text-slate-400 uppercase tracking-wide">{{ $order['time'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

