{{--
    Field Group Component - shadcn/ui style
    Groups multiple form fields together
--}}
@props(['orientation' => 'vertical'])

@php
    $orientationClasses = match ($orientation) {
        'horizontal' => 'flex gap-4',
        default => 'space-y-6',
    };
@endphp

<div {{ $attributes->merge(['class' => $orientationClasses]) }}>
    {{ $slot }}
</div>