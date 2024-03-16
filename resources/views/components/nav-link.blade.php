@props(['active' => false])

@php

$classes = ($active ?? false) 
    ? 'text-white rounded-md px-3 py-2 text-sm font-medium' 
    : 'text-gray-400 hover:text-slate-600 duration-500 rounded-md px-3 py-2 text-sm font-medium';

@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>