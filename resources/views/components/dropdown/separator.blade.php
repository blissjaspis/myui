@props(['orientation' => 'horizontal'])

@php
    $classes = match ($orientation) {
        'vertical' => 'h-full w-px bg-border',
        default => 'h-px w-full bg-border',
    };
@endphp

<div 
    role="separator"
    {{ $attributes->merge(['class' => '-mx-1 my-1 ' . $classes]) }}
></div> 