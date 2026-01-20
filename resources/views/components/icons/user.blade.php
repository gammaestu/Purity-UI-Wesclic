@props(['class' => 'h-4 w-4'])

<svg {{ $attributes->merge(['class' => $class, 'viewBox' => '0 0 20 20', 'fill' => 'currentColor']) }} xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path fill-rule="evenodd" d="M10 2a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm-7 16a7 7 0 0 1 14 0 1 1 0 1 1-2 0 5 5 0 0 0-10 0 1 1 0 0 1-2 0Z" clip-rule="evenodd"/>
</svg>

