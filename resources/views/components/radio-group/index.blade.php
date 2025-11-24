{{--
    Radio Group Component
    Documentation: docs/components/radio-group.md
--}}
@props([
    'name' => '',
    'defaultValue' => '',
])

<div
    x-data="{
        __selected: @if ($defaultValue) '{{ $defaultValue }}' @else 'undefined' @endif,
        name: '{{ $name }}',
    }"
    x-modelable="__selected"
    {{ $attributes->merge(['class' => 'grid gap-2']) }}
>
    {{ $slot }}
</div>