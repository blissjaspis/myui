{{--
    Tabs Content Component
    Documentation: docs/components/tabs.md
--}}
@props([
    'value' => '',
])

<div
    x-show="__selected === '{{ $value }}'"
    {{ $attributes->merge(['class' => 'mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2']) }}
>
    {{ $slot }}
</div>