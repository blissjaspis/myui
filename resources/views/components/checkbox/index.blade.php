{{--
    Checkbox Component
    Documentation: docs/components/checkbox.md
--}}
@props(['variant' => 'single', 'model' => ''])

@php
    $class = match ($variant) {
        'multiline' => 'flex flex-row items-start space-x-3 space-y-0',
        default => 'flex items-center space-x-2',
    }
@endphp

<div x-data="{check: $wire.entangle('{{ $model }}') ? true : false, handleClick(){this.check = ! this.check; $wire.handleCheckbox();}}" {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</div>