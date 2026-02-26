{{--
    AvatarBadge Component - shadcn/ui style
    Documentation: docs/components/avatar.md
--}}
@props([])

@php
    $classes = 'absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-background bg-green-500';
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
