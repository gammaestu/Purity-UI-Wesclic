@props([
    'title' => '',
    'subtitle' => null,
])

<div class="rounded-3xl bg-white shadow-sm border border-slate-100 overflow-hidden">
    <div class="px-6 pt-6 pb-4">
        <h3 class="text-sm font-semibold text-slate-800">{{ $title }}</h3>
        @if ($subtitle)
            <p class="text-xs text-slate-400 mt-1">{{ $subtitle }}</p>
        @endif
    </div>
    <div class="px-6 pb-6">
        {{ $slot }}
    </div>
</div>

