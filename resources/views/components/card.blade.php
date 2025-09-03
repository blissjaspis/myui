@props(['class' => ''])

@php
    $baseClasses = 'rounded-lg border bg-card text-card-foreground shadow-sm';
    $classes = trim("$baseClasses $class");
@endphp

<div {{ $attributes->merge(['class' => Myui::globalClassesToString() . ' ' . $classes]) }}>
    {{ $slot }}
</div>
