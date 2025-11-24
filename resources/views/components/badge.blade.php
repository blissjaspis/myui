{{--
    Badge Component
    Documentation: docs/components/badge.md
--}}
@props(['variant' => 'default', 'size' => 'default'])

@php
    $class = match ($variant) {
        'secondary' => 'border-transparent bg-secondary dark:bg-gray-700 text-secondary-foreground dark:text-gray-200 hover:bg-secondary/90 dark:hover:bg-gray-700/90',
        'destructive' => 'border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/90',
        'outline' => 'text-foreground dark:text-gray-200 border border-input dark:border-gray-700',
        default => 'border-transparent bg-primary text-primary-foreground hover:bg-primary/80',
    };

    $size = match ($size) {
        'lg' => 'py-1.5 px-3.5',
        default => 'py-0.5 px-2.5',
    };
@endphp

<div class="inline-flex items-center rounded-full border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 {{ $class }} {{ $size }}">
    {{ $slot }}
</div>