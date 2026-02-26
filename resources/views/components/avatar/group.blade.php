{{--
    AvatarGroup Component - shadcn/ui style
    Documentation: docs/components/avatar.md
--}}
@props([])

@php
    $classes = 'flex items-center -space-x-2 overflow-hidden';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
