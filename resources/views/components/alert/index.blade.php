{{--
    Alert Component
    Documentation: docs/components/alert.md
--}}
@props(['color' => 'default'])

@php
    $color = match ($color) {
        'success' => 'border-green-600/50 text-green-600 dark:border-green-600 [&>svg]:text-green-600',
        'warning' => 'border-yellow-600/50 text-yellow-600 dark:border-yellow-600 [&>svg]:text-yellow-600',
        'destructive' => 'border-destructive/50 text-destructive dark:border-destructive [&>svg]:text-destructive',
        default => '[&>svg]:text-foreground bg-background text-foreground',
    };
@endphp

<div role="alert" {{ $attributes->merge(['class' => 'relative w-full rounded-lg border p-4 [&>svg~*]:pl-7 [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4 '. $color]) }}>
    {{ $slot }}
</div>