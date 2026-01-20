@props(['class' => 'h-4 w-4'])

<svg {{ $attributes->merge(['class' => $class, 'viewBox' => '0 0 20 20', 'fill' => 'currentColor']) }} xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path fill-rule="evenodd" d="M4 4a2 2 0 0 1 2-2h7a1 1 0 1 1 0 2H6v12h7a1 1 0 1 1 0 2H6a2 2 0 0 1-2-2V4Zm12.707 3.293a1 1 0 0 1 0 1.414L14.414 11H19a1 1 0 1 1 0 2h-4.586l2.293 2.293a1 1 0 0 1-1.414 1.414l-4-4a1 1 0 0 1 0-1.414l4-4a1 1 0 0 1 1.414 0Z" clip-rule="evenodd"/>
</svg>

