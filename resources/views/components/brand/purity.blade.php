@props([
    'textClass' => 'text-[13px] font-semibold tracking-wide',
    'logoClass' => 'h-5 w-5',
    'containerClass' => 'flex items-center gap-2',
    'invert' => false, // for dark backgrounds
])

@php
    $wrap = $invert ? 'inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white' : 'inline-flex h-8 w-8 items-center justify-center rounded-lg border border-slate-200 bg-white';
    $text = $invert ? 'text-white' : 'text-slate-800';
@endphp

<div class="{{ $containerClass }}">
    <span class="{{ $wrap }}">
        <img
            src="{{ asset('build/assets/images/creative-tim.svg') }}"
            alt="Creative Tim"
            class="{{ $logoClass }}"
        >
    </span>
    <span class="{{ $textClass }} {{ $text }}">PURITY UI DASHBOARD</span>
</div>
