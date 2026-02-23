{{--
    Checkbox Label Component
    Documentation: docs/components/checkbox.md
--}}
@props([
    'for' => null,
    'id' => null,
])

@php
$labelFor = $for ?? $id ?? '';
@endphp

<label
    @if($labelFor) for="{{ $labelFor }}" @endif
    {{ $attributes->merge([
        'class' => 'text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 cursor-pointer select-none',
    ]) }}
>
    {{ $slot }}
</label>
