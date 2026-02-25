{{--
    Button Group Separator - Visually divides buttons within a group
    Only needed for non-outline variants
--}}
@props(['orientation' => 'vertical'])

@php
$classes = match ($orientation) {
    'horizontal' => 'h-px w-full bg-border my-1',
    default => 'w-px bg-border mx-1',
};
@endphp

<div {{ $attributes->merge(['class' => $classes, 'role' => 'separator', 'aria-orientation' => $orientation]) }}></div>
