@props(['class' => 'h-4 w-4'])

<svg {{ $attributes->merge(['class' => $class, 'viewBox' => '0 0 20 20', 'fill' => 'currentColor']) }} xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path d="M3 5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v1H3V5Z"/>
    <path fill-rule="evenodd" d="M17 8H3v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Zm-9 6a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
</svg>

