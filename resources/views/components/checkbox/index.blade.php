{{--
    Checkbox Component
    Documentation: docs/components/checkbox.md
--}}
@props(['variant' => 'single', 'model' => null])

@php
    $class = match ($variant) {
        'multiline' => 'flex flex-row items-start space-x-3 space-y-0',
        default => 'flex items-center space-x-2',
    }
@endphp

<div
    x-data="{
        check: @if($model) @entangle($model) @else false @endif,
        toggle() { this.check = !this.check; }
    }"
    {{ $attributes->merge(['class' => $class]) }}
>
    {{ $slot }}
</div>