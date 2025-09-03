@props(['class' => ''])

@php
    $baseClasses = 'flex flex-col space-y-1.5 p-6';
    $classes = trim("$baseClasses $class");
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
