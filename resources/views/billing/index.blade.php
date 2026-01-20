@extends('layouts.app')

@section('title', 'Purity UI Billing')
@section('breadcrumb', 'Pages / Billing')
@section('page_heading', 'Billing')

@section('content')
    @php
        $invoices = [
            ['date' => 'March, 01, 2020', 'id' => '#MS-415646', 'amount' => '$180'],
            ['date' => 'February, 10, 2021', 'id' => '#RV-126749', 'amount' => '$250'],
            ['date' => 'April, 05, 2020', 'id' => '#QW-103578', 'amount' => '$120'],
            ['date' => 'June, 25, 2019', 'id' => '#FB-212562', 'amount' => '$145'],
            ['date' => 'March, 01, 2019', 'id' => '#AR-803481', 'amount' => '$300'],
        ];

        $billingInfos = [
            ['name' => 'Oliver Liam', 'company' => 'Viking Burrito', 'email' => 'oliver@burrito.com', 'vat' => 'FRB1235476'],
            ['name' => 'Lucas Harper', 'company' => 'Stone Tech Zone', 'email' => 'lucas@stone.com', 'vat' => 'FRB1235476'],
            ['name' => 'Ethan James', 'company' => 'Fiber Notion', 'email' => 'ethan@fiber.com', 'vat' => 'FRB1235476'],
        ];

        $transactions = [
            'Newest' => [
                ['name' => 'Netflix', 'date' => '27 March 2020, at 12:30 PM', 'amount' => '- $2,500', 'negative' => true],
                ['name' => 'Apple', 'date' => '27 March 2020, at 04:30 AM', 'amount' => '+ $2,000', 'negative' => false],
            ],
            'Yesterday' => [
                ['name' => 'Stripe', 'date' => '26 March 2020, at 13:45 PM', 'amount' => '+ $750', 'negative' => false],
                ['name' => 'HubSpot', 'date' => '26 March 2020, at 12:30 PM', 'amount' => '+ $1,050', 'negative' => false],
                ['name' => 'Webflow', 'date' => '26 March 2020, at 05:00 AM', 'amount' => '- $400', 'negative' => true],
            ],
        ];
    @endphp

    <div class="space-y-6">
        {{-- Top area (match reference): Card + Salary + Paypal + Invoices (Invoices spans 2 rows) --}}
        <div class="grid grid-cols-1 xl:grid-cols-5 gap-6">
            {{-- Credit card (2 cols) --}}
            <div class="xl:col-span-2 rounded-3xl bg-gradient-to-r from-[#1b1f3b] via-[#11152e] to-[#0b1020] text-white p-6 shadow-sm relative overflow-hidden min-h-[160px]">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <p class="text-xs text-white/60 mb-1">Purity UI</p>
                        <p class="text-xl font-semibold tracking-[0.15em]">7812&nbsp;2139&nbsp;0823&nbsp;XXXX</p>
                    </div>
                    <div>
                        <div class="inline-flex h-7 w-12 items-center rounded-full bg-white/10 px-1">
                            <div class="h-5 w-5 rounded-full bg-emerald-400 translate-x-4 shadow-sm"></div>
                        </div>
                    </div>
                </div>
                <div class="flex items-end justify-between text-xs text-white/70">
                    <div>
                        <p class="mb-1">VALID THRU</p>
                        <p class="text-sm font-semibold text-white">05/24</p>
                    </div>
                    <div class="text-right">
                        <p class="mb-1">CVV</p>
                        <p class="text-sm font-semibold text-white">09X</p>
                    </div>
                </div>
                <div class="absolute -left-10 -top-10 h-40 w-40 rounded-full border border-white/7"></div>
                <div class="absolute -left-2 -16 top-6 h-48 w-48 rounded-full border border-white/7"></div>
                <div class="absolute -left-6 top-16 h-40 w-40 rounded-full border border-white/7"></div>
            </div>

            {{-- Salary (compact) --}}
            <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6 flex flex-col items-center justify-center text-center">
                <div class="inline-flex h-14 w-14 items-center justify-center rounded-3xl bg-[#4FD1C5] text-white shadow-sm mb-4">
                    <x-icons.wallet class="h-6 w-6" />
                </div>
                <p class="text-sm font-semibold text-slate-800">Salary</p>
                <p class="text-[11px] text-slate-400 mt-1">Belong Interactive</p>
                <p class="text-sm font-semibold text-slate-800 mt-5">+$2000</p>
            </div>

            {{-- Paypal (compact) --}}
            <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6 flex flex-col items-center justify-center text-center">
                <div class="inline-flex h-14 w-14 items-center justify-center rounded-3xl bg-[#4FD1C5] text-white shadow-sm mb-4">
                    <x-icons.paypal class="h-6 w-6" />
                </div>
                <p class="text-sm font-semibold text-slate-800">Paypal</p>
                <p class="text-[11px] text-slate-400 mt-1">Freelance Payment</p>
                <p class="text-sm font-semibold text-slate-800 mt-5">$455.00</p>
            </div>

            {{-- Invoices (right, spans 2 rows) --}}
            <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6 xl:row-span-2">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="text-sm font-semibold text-slate-800">Invoices</h3>
                        <p class="text-xs text-slate-400 mt-1">See your invoices</p>
                    </div>
                    <button class="rounded-xl border border-[#4FD1C5]/40 px-3 py-1.5 text-[11px] font-semibold text-[#4FD1C5] hover:bg-[#4FD1C5]/5">
                        VIEW ALL
                    </button>
                </div>
                <div class="space-y-3 text-xs">
                    @foreach ($invoices as $invoice)
                        <div class="flex items-center justify-between border-b border-slate-50 pb-2 last:border-0 last:pb-0">
                            <div>
                                <p class="font-semibold text-slate-700">{{ $invoice['date'] }}</p>
                                <p class="text-[11px] text-slate-400">{{ $invoice['id'] }}</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="font-semibold text-slate-700">{{ $invoice['amount'] }}</span>
                                <button class="inline-flex items-center gap-1 text-[11px] font-semibold text-slate-500 hover:text-slate-700">
                                    <x-icons.pdf class="h-3 w-3 text-slate-500" />
                                    <span>PDF</span>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Payment Method (below, spans 4 cols) --}}
            <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6 xl:col-span-4">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="text-sm font-semibold text-slate-800">Payment Method</h3>
                    </div>
                    <button class="rounded-xl bg-slate-800 px-4 py-2 text-[11px] font-semibold text-white hover:bg-slate-700">
                        ADD NEW CARD
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="rounded-2xl border border-slate-200 px-4 py-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <span class="relative h-6 w-10">
                                <span class="absolute left-0 top-1/2 -translate-y-1/2 h-3.5 w-3.5 rounded-full bg-rose-500"></span>
                                <span class="absolute left-2.5 top-1/2 -translate-y-1/2 h-3.5 w-3.5 rounded-full bg-amber-400"></span>
                            </span>
                            <p class="text-xs font-semibold text-slate-400">7812 2139 0823 XXXX</p>
                        </div>
                        <button class="text-slate-400 hover:text-slate-600">
                            <x-icons.pencil class="h-4 w-4" />
                        </button>
                    </div>

                    <div class="rounded-2xl border border-slate-200 px-4 py-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <span class="text-[11px] font-semibold text-indigo-600">VISA</span>
                            <p class="text-xs font-semibold text-slate-400">7812 2139 0823 XXXX</p>
                        </div>
                        <button class="text-slate-400 hover:text-slate-600">
                            <x-icons.pencil class="h-4 w-4" />
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Row 3 (bawah): Billing Information (kiri) + Your Transactions (kanan) --}}
        <div class="grid grid-cols-1 xl:grid-cols-5 gap-6">
            {{-- Billing information --}}
            <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6 xl:col-span-3">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-sm font-semibold text-slate-800">Billing Information</h3>
                </div>
                <div class="space-y-4 text-xs">
                    @foreach ($billingInfos as $info)
                        <div class="rounded-2xl border border-slate-100 px-4 py-4 flex items-start justify-between">
                            <div>
                                <p class="text-sm font-semibold text-slate-800 mb-1">{{ $info['name'] }}</p>
                                <p class="text-[11px] text-slate-400 mb-0.5">
                                    Company Name:
                                    <span class="font-semibold text-slate-600">{{ $info['company'] }}</span>
                                </p>
                                <p class="text-[11px] text-slate-400 mb-0.5">
                                    Email Address:
                                    <span class="font-semibold text-slate-600">{{ $info['email'] }}</span>
                                </p>
                                <p class="text-[11px] text-slate-400">
                                    VAT Number:
                                    <span class="font-semibold text-slate-600">{{ $info['vat'] }}</span>
                                </p>
                            </div>
                            <div class="flex flex-col items-end gap-2">
                                <button class="text-[11px] font-semibold text-rose-500">DELETE</button>
                                <button class="text-[11px] font-semibold text-[#4FD1C5]">EDIT</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Your Transactions --}}
            <div class="rounded-3xl bg-white shadow-sm border border-slate-100 p-6 xl:col-span-2">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="text-sm font-semibold text-slate-800">Your Transactions</h3>
                        <p class="text-xs text-slate-400 mt-1">This month</p>
                    </div>
                </div>
                <div class="space-y-4 text-xs">
                    @foreach ($transactions as $section => $items)
                        <div>
                            <p class="text-[11px] font-semibold text-slate-400 mb-2">{{ $section }}</p>
                            <div class="space-y-3">
                                @foreach ($items as $tx)
                                    @php
                                        $negative = $tx['negative'] ?? false;
                                        $color = $negative ? 'text-rose-500' : 'text-emerald-500';
                                    @endphp
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <span class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-slate-50 text-slate-500 text-xs">
                                                {{ $negative ? '-' : '+' }}
                                            </span>
                                            <div>
                                                <p class="font-semibold text-slate-700">{{ $tx['name'] }}</p>
                                                <p class="text-[11px] text-slate-400">{{ $tx['date'] }}</p>
                                            </div>
                                        </div>
                                        <span class="text-xs font-semibold {{ $color }}">{{ $tx['amount'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

