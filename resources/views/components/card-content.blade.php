@props(['class' => ''])

@php
    $baseClasses = 'p-6 pt-0';
    $classes = trim("$baseClasses $class");
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
