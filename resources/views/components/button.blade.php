{{--
    Button Component
    Documentation: docs/components/button.md
--}}
@props(['variant' => 'default', 'size' => 'default'])

@php
    $variant = match ($variant) {
        'secondary' => 'px-4 py-2 bg-secondary dark:bg-gray-700 text-secondary-foreground dark:text-gray-200 hover:bg-secondary/90 dark:hover:bg-gray-700/90',
        'success' => 'px-4 py-2 bg-lime-400 dark:bg-lime-600 text-secondary-foreground dark:text-white hover:bg-lime-400/90 dark:hover:bg-lime-600/90',
        'destructive' => 'px-4 py-2 bg-destructive dark:bg-red-600 text-destructive-foreground dark:text-white hover:bg-destructive/90 dark:hover:bg-red-600/90',
        'outline' => 'px-4 py-2 border border-input dark:border-gray-700 bg-background dark:bg-transparent hover:bg-accent hover:text-accent-foreground dark:hover:bg-gray-800 dark:text-gray-200',
        'ghost' => 'px-4 py-2 hover:bg-accent hover:text-accent-foreground dark:hover:bg-gray-800 dark:text-gray-200',
        'link' => 'text-muted-foreground dark:text-gray-400 hover:text-primary dark:hover:text-primary-foreground',
        default => 'px-4 py-2 bg-primary text-primary-foreground hover:bg-primary/90',
    };

    $size = match ($size) {
        'icon' => 'h-10 w-10',
        default => 'h-10',
    };
@endphp

<button {{ $attributes->merge(['class' => 'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 '. $variant.' '. $size]) }}>
{{ $slot }}
</button>