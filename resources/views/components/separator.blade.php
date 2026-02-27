{{--
    Separator Component
    Documentation: docs/components/separator.md
--}}
@props([
    'orientation' => 'horizontal',
    'decorative' => false,
])

@php
    $class = match ($orientation) {
        'vertical' => 'shrink-0 bg-border h-full w-[1px]',
        default => 'shrink-0 bg-border h-[1px] w-full',
    };
@endphp

<div
    role="{{ $decorative ? 'none' : 'separator' }}"
    aria-orientation="{{ $decorative ? null : $orientation }}"
    data-orientation="{{ $orientation }}"
    {{ $attributes->merge(['class' => $class]) }}
></div>