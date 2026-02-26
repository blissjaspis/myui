{{--
    Avatar Component - shadcn/ui style
    Documentation: docs/components/avatar.md
--}}
@props(['size' => 'default'])

@php
    $sizeClasses = match ($size) {
        'sm' => 'h-8 w-8 text-xs',
        'lg' => 'h-12 w-12 text-base',
        'xl' => 'h-16 w-16 text-lg',
        default => 'h-10 w-10 text-sm',
    };

    $classes = 'relative flex shrink-0 overflow-hidden rounded-full ' . $sizeClasses;
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
