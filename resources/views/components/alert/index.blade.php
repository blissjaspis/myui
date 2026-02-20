{{--
    Alert Component - shadcn/ui style
    Documentation: docs/components/alert.md
--}}
@props(['variant' => 'default'])

@php
    $baseClasses = 'relative w-full rounded-lg border p-4 [&>svg~*]:pl-7 [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4 [&>svg]:text-foreground';

    $variantClasses = match ($variant) {
        'destructive' => 'border-destructive/50 text-destructive dark:border-destructive [&>svg]:text-destructive',
        default => 'bg-background text-foreground',
    };

    $classes = $baseClasses . ' ' . $variantClasses;
@endphp

<div role="alert" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>