{{--
    Tab Links Link Component
    Documentation: docs/components/tab-links.md
--}}
@props(['status' => ''])

@php
    $class = match ($status) {
        'active' => 'bg-background dark:bg-gray-950 shadow disabled:cursor-not-allowed disabled:opacity-70 text-primary dark:text-white',
        default => 'hover:bg-background/50 dark:hover:bg-gray-800/50 hover:text-foreground dark:hover:text-gray-200',
    };
@endphp

<a
    {{ $attributes->merge(['class' => 'inline-flex w-full items-center justify-center whitespace-nowrap rounded-md px-3 py-2 text-sm font-medium ring-offset-background transition-all cursor-pointer disabled:pointer-events-none disabled:opacity-50 text-sm font-medium leading-none ' . $class]) }}
>
    {{ $slot }}
</a>