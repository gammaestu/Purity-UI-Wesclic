@props([
    'href' => '#',
    'label' => '',
    'active' => false,
])

@php
    $base = 'flex w-full items-center gap-4 px-4 py-3 rounded-2xl transition';
    $wrap = $active ? $base.' bg-slate-50 text-slate-800 shadow-[0_10px_25px_-18px_rgba(0,0,0,0.35)]' : $base.' text-slate-400 hover:bg-slate-50 hover:text-slate-700';
    $iconWrap = $active ? 'h-10 w-10 rounded-2xl bg-[#4FD1C5] text-white flex items-center justify-center shadow-sm' : 'h-10 w-10 rounded-2xl bg-white text-[#4FD1C5] flex items-center justify-center shadow-sm ring-1 ring-slate-100';
@endphp

<a href="{{ $href }}" class="{{ $wrap }}">
    <span class="{{ $iconWrap }}">
        {{ $icon }}
    </span>
    <span class="text-sm font-semibold">{{ $label }}</span>
</a>
