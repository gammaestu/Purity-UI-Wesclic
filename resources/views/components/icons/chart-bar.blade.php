@props(['class' => 'h-4 w-4'])

<svg {{ $attributes->merge(['class' => $class, 'viewBox' => '0 0 20 20', 'fill' => 'currentColor']) }} xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path d="M3 3a1 1 0 0 1 1 1v11h13a1 1 0 1 1 0 2H4a2 2 0 0 1-2-2V4a1 1 0 0 1 1-1Z"/>
    <path d="M7 12a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v3H7v-3Zm4-6a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v9h-3V6Zm4 3a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v6h-3V9Z"/>
</svg>

