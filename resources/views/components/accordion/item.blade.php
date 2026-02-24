{{--
    Accordion Item Component
    Based on shadcn/ui Accordion design
    Documentation: docs/components/accordion.md
--}}
@props([
    'value' => '',
    'disabled' => false,
])

<div
    x-data="{ value: '{{ $value }}', disabled: {{ $disabled ? 'true' : 'false' }} }"
    :data-state="isOpen(value) ? 'open' : 'closed'"
    :data-disabled="disabled"
    {{ $attributes->merge([
        'class' => 'border-b',
    ]) }}
>
    {{ $slot }}
</div>
