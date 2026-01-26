@extends('layouts.app')

@section('title', 'Purity UI Dashboard')

@section('content')
    {{-- Top stats cards --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
        {{-- Today’s Money --}}
        <div class="rounded-2xl bg-white shadow-sm border border-slate-100 px-5 py-4 flex items-center justify-between">
            <div>
                <p class="text-xs font-semibold text-slate-400 mb-1">Today’s Money</p>
                <p class="text-lg font-semibold text-slate-800 leading-tight">$53,000</p>
                <span class="text-[11px] font-semibold text-[#4FD1C5]">+55%</span>
            </div>
            <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[#4FD1C5] text-white shadow-sm">
                <x-icons.wallet class="h-5 w-5" />
            </div>
        </div>

        {{-- Today’s Users --}}
        <div class="rounded-2xl bg-white shadow-sm border border-slate-100 px-5 py-4 flex items-center justify-between">
            <div>
                <p class="text-xs font-semibold text-slate-400 mb-1">Today’s Users</p>
                <p class="text-lg font-semibold text-slate-800 leading-tight">2,300</p>
                <span class="text-[11px] font-semibold text-[#4FD1C5]">+3%</span>
            </div>
            <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[#4FD1C5] text-white shadow-sm">
                <x-icons.user class="h-5 w-5" />
            </div>
        </div>

        {{-- New Clients --}}
        <div class="rounded-2xl bg-white shadow-sm border border-slate-100 px-5 py-4 flex items-center justify-between">
            <div>
                <p class="text-xs font-semibold text-slate-400 mb-1">{{ $newClients->label ?? 'New Clients' }}</p>
                <p class="text-lg font-semibold text-slate-800 leading-tight">+{{ number_format($newClients->value ?? 3052, 0) }}</p>
                <span class="text-[11px] font-semibold {{ ($newClients->change_type ?? 'negative') === 'positive' ? 'text-[#4FD1C5]' : 'text-rose-500' }}">{{ $newClients->change_percentage ?? '-14%' }}</span>
            </div>
            <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[#4FD1C5] text-white shadow-sm">
                <x-icons.document class="h-5 w-5" />
            </div>
        </div>

        {{-- Total Sales --}}
        <div class="rounded-2xl bg-white shadow-sm border border-slate-100 px-5 py-4 flex items-center justify-between">
            <div>
                <p class="text-xs font-semibold text-slate-400 mb-1">{{ $totalSales->label ?? 'Total Sales' }}</p>
                <p class="text-lg font-semibold text-slate-800 leading-tight">${{ number_format($totalSales->value ?? 173000, 0) }}</p>
                <span class="text-[11px] font-semibold {{ ($totalSales->change_type ?? 'positive') === 'positive' ? 'text-[#4FD1C5]' : 'text-rose-500' }}">{{ $totalSales->change_percentage ?? '+8%' }}</span>
            </div>
            <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[#4FD1C5] text-white shadow-sm">
                <x-icons.cart class="h-5 w-5" />
            </div>
        </div>
    </div>

    {{-- Middle hero row --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        {{-- Purity card --}}
        <div class="lg:col-span-2 rounded-3xl bg-gradient-to-r from-[#4FD1C5] to-[#4FD1C5] text-white px-8 py-7 flex items-center justify-between overflow-hidden">
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
                <button class="text-xs font-semibold text-[#4FD1C5]">Read more →</button>
            </div>
        </div>
    </div>

    {{-- Charts row --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        {{-- Active users chart --}}
        <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6 flex flex-col gap-5">
            {{-- Chart area --}}
            <div class="rounded-2xl bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 h-40 flex items-end justify-between px-5 pb-5">
                @for ($i = 0; $i < 10; $i++)
                    <div class="w-4 rounded-full bg-white/20" style="height: {{ 30 + ($i % 5) * 12 }}%"></div>
                @endfor
            </div>
            {{-- Title & subtitle --}}
            <div>
                <h3 class="text-sm font-semibold text-slate-800 mb-1">Active Users</h3>
                <p class="text-xs text-[#4FD1C5]">(+23) than last week</p>
            </div>

            {{-- Bottom stats row --}}
            <div class="grid grid-cols-4 gap-5 text-xs mt-1">
                {{-- Users --}}
                <div class="flex flex-col">
                    <div class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-[#E6FFFA] text-[#38B2AC] mb-2">
                        <x-icons.wallet class="h-4 w-4" />
                    </div>
                    <p class="text-[11px] text-slate-400 mb-1">Users</p>
                    <p class="font-semibold text-slate-800 text-sm mb-2">{{ number_format($activeUsers->value ?? 32984, 0) }}</p>
                    <div class="h-1 w-full rounded-full bg-slate-100 overflow-hidden">
                        <div class="h-full rounded-full bg-[#4FD1C5]" style="width: 70%"></div>
                    </div>
                </div>

                {{-- Clicks --}}
                <div class="flex flex-col">
                    <div class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-[#E6FFFA] text-[#38B2AC] mb-2">
                        <x-icons.rocket class="h-4 w-4" />
                    </div>
                    <p class="text-[11px] text-slate-400 mb-1">Clicks</p>
                    <p class="font-semibold text-slate-800 text-sm mb-2">{{ $clicks ? number_format($clicks->value / 1000000, 2) . 'm' : '2.42m' }}</p>
                    <div class="h-1 w-full rounded-full bg-slate-100 overflow-hidden">
                        <div class="h-full rounded-full bg-[#4FD1C5]" style="width: 80%"></div>
                    </div>
                </div>

                {{-- Sales --}}
                <div class="flex flex-col">
                    <div class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-[#E6FFFA] text-[#38B2AC] mb-2">
                        <x-icons.cart class="h-4 w-4" />
                    </div>
                    <p class="text-[11px] text-slate-400 mb-1">Sales</p>
                    <p class="font-semibold text-slate-800 text-sm mb-2">${{ number_format($sales->value ?? 2400, 0) }}</p>
                    <div class="h-1 w-full rounded-full bg-slate-100 overflow-hidden">
                        <div class="h-full rounded-full bg-[#4FD1C5]" style="width: 60%"></div>
                    </div>
                </div>

                {{-- Items --}}
                <div class="flex flex-col">
                    <div class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-[#E6FFFA] text-[#38B2AC] mb-2">
                        <x-icons.wrench class="h-4 w-4" />
                    </div>
                    <p class="text-[11px] text-slate-400 mb-1">Items</p>
                    <p class="font-semibold text-slate-800 text-sm mb-2">{{ number_format($items->value ?? 320, 0) }}</p>
                    <div class="h-1 w-full rounded-full bg-slate-100 overflow-hidden">
                        <div class="h-full rounded-full bg-[#4FD1C5]" style="width: 90%"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sales overview chart --}}
        <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6 flex flex-col gap-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sm font-semibold text-slate-800 mb-1">Sales overview</h3>
                    <p class="text-xs text-[#4FD1C5]">(+5) more in 2021</p>
                </div>
            </div>
            <div class="relative h-44">
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-t from-[#4FD1C5]/15 via-[#4FD1C5]/30 to-white border border-[#4FD1C5]/25"></div>
                <div class="absolute inset-3 flex items-end justify-between">
                    @for ($i = 0; $i < 12; $i++)
                        <div class="w-4 rounded-full bg-[#4FD1C5]/40" style="height: {{ 30 + (($i + 3) % 6) * 8 }}%"></div>
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
                    <p class="text-xs text-[#4FD1C5]">30 done this month</p>
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
                        @foreach ($projects as $project)
                            <tr class="border-b border-slate-50 last:border-0">
                                <td class="py-3">
                                    <div class="flex items-center gap-3">
                                        <img
                                            src="{{ $project->logo }}"
                                            alt=""
                                            class="h-8 w-8 rounded-xl shadow-sm ring-1 ring-slate-100 bg-white"
                                        >
                                        <span class="font-medium text-slate-700">{{ $project->name }}</span>
                                    </div>
                                </td>
                                <td class="py-3">
                                    <div class="flex -space-x-1.5">
                                        @for ($i = 0; $i < $project->members_count; $i++)
                                            <span class="h-6 w-6 rounded-full border-2 border-white bg-slate-200"></span>
                                        @endfor
                                    </div>
                                </td>
                                <td class="py-3 text-slate-600">{{ $project->budget }}</td>
                                <td class="py-3">
                                    <div class="flex items-center gap-3">
                                        <div class="flex-1 h-1.5 rounded-full bg-slate-100 overflow-hidden">
                                            <div class="h-full rounded-full bg-[#4FD1C5]" style="width: {{ $project->completion }}%"></div>
                                        </div>
                                        <span class="text-xs font-semibold text-slate-600">{{ $project->completion }}%</span>
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
                    <p class="text-xs text-[#4FD1C5]">+30% this month</p>
                </div>
            </div>
            <div class="mt-4 text-xs relative pl-12">
                {{-- vertical line (centered with the icon) --}}
                <div class="absolute left-4 top-1 bottom-1 border-l-2 border-slate-100"></div>
                @foreach ($orders as $order)
                    <div class="relative flex items-start gap-4 pb-5 last:pb-0">
                        <span class="relative z-10 mt-0.5 inline-flex h-8 w-8 items-center justify-center {{ $order->color }}">
                            @switch($order->type)
                                @case('bell')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-current">
                                        <path d="M12 22a2.5 2.5 0 0 0 2.45-2H9.55A2.5 2.5 0 0 0 12 22Zm7-6V11a7 7 0 1 0-14 0v5l-2 2v1h18v-1l-2-2Z"/>
                                    </svg>
                                    @break
                                @case('html')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-current">
                                        <path d="M3 3h18l-1.6 18.2L12 23l-7.4-1.8L3 3Zm14.6 5.6H8.1l.2 2.2h9.1l-.5 5.6-4.9 1.4-4.9-1.4-.3-3.1h2.4l.2 1.5 2.6.7 2.6-.7.2-2.2H6.1L5.5 6.3h12.4l-.3 2.3Z"/>
                                    </svg>
                                    @break
                                @case('cart')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-current">
                                        <path d="M7 18a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm10 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4ZM6.2 6l.3 2h13.4a1 1 0 0 1 1 .8l-1.2 6.2a2 2 0 0 1-2 1.6H8.2a2 2 0 0 1-2-1.7L4.7 4H2V2h4a1 1 0 0 1 1 .8L7.2 6Z"/>
                                    </svg>
                                    @break
                                @case('card')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-current">
                                        <path d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v1H3V6Zm0 4h18v8a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-8Zm4 7a1 1 0 0 0 1 1h8a1 1 0 1 0 0-2H8a1 1 0 0 0-1 1Z"/>
                                    </svg>
                                    @break
                                @case('box')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-current">
                                        <path d="M12 2 3 6.5v11L12 22l9-4.5v-11L12 2Zm0 2.2 6.6 3.3L12 10.8 5.4 7.5 12 4.2ZM5 9.2l6 3v7.1l-6-3V9.2Zm14 0v7.1l-6 3v-7.1l6-3Z"/>
                                    </svg>
                                    @break
                                @case('xd')
                                    <span class="inline-flex h-6 w-6 items-center justify-center rounded-md bg-purple-700 text-[10px] font-bold text-white">Xd</span>
                                    @break
                            @endswitch
                        </span>
                        <div class="flex-1">
                            <p class="text-slate-800 text-[13px] font-semibold leading-tight">{{ $order->title }}</p>
                            <p class="text-[11px] text-slate-400 uppercase tracking-wide mt-1">{{ $order->order_date->format('d M Y, h:i A') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

