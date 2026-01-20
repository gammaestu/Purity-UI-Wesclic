@props(['class' => 'h-4 w-4'])

<svg {{ $attributes->merge(['class' => $class, 'viewBox' => '0 0 20 20', 'fill' => 'currentColor']) }} xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path d="M10.707 1.293a1 1 0 0 0-1.414 0l-7 7A1 1 0 0 0 3 10h1v7a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4h2v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7h1a1 1 0 0 0 .707-1.707l-7-7Z"/>
</svg>

