@props(['active'])

@php
$classes = ($active ?? false)
            ? 'p-2 flex justify-between items-end leading-none gap-1 border-r-2 bg-blue-gray text-sm font-medium focus:outline-none focus:border-white transition duration-150 ease-in-out'
            : 'p-2 flex justify-between items-end leading-none gap-1 border-r-2 border-transparent text-sm font-medium hover:border-gray-400 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
