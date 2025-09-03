@props(['variant' => 'default'])

@php
    $baseClasses = 'relative w-full rounded-lg border p-4 [&>svg~*]:pl-7 [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4 [&>svg]:text-foreground';

    $variantClasses = match ($variant) {
        'destructive' => 'border-destructive/50 text-destructive dark:border-destructive [&>svg]:text-destructive',
        default => 'bg-background text-foreground',
    };

    $classes = trim("$baseClasses $variantClasses");
@endphp

<div {{ $attributes->merge(['class' => Myui::globalClassesToString() . ' ' . $classes]) }}>
    {{ $slot }}
</div>
