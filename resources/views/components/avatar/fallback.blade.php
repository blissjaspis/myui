{{--
    AvatarFallback Component - shadcn/ui style
    Documentation: docs/components/avatar.md
--}}
@props([])

@php
    $classes = 'flex h-full w-full items-center justify-center rounded-full bg-muted text-muted-foreground font-medium';
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
