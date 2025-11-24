{{--
    Link Component
    Documentation: docs/components/link.md
--}}
@props(['color' => 'default'])

@php
    $color = match ($color) {
        'red' => 'text-red-700 dark:text-red-400 hover:text-red-600 dark:hover:text-red-300',
        'blue' => 'text-blue-700 dark:text-blue-400 hover:text-blue-600 dark:hover:text-blue-300',
        'black' => 'text-primary dark:text-gray-200 hover:text-muted-foreground dark:hover:text-gray-400',
        default => 'text-muted-foreground dark:text-gray-400 hover:text-primary dark:hover:text-gray-200',
    };
@endphp

<a {{ $attributes->merge(['class' => 'text-sm font-medium transition-colors '. $color]) }}>
    {{ $slot }}
</a>