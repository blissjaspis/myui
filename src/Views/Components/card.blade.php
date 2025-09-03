@props(['class' => ''])

@php
    $baseClasses = 'rounded-lg border bg-card text-card-foreground shadow-sm';
    $classes = trim("$baseClasses $class");
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
