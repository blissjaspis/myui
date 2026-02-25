{{--
    Dropdown Radio Group Component
    Container for radio items in a dropdown
--}}
@props(['value' => null])

<div
    x-data="{ selectedValue: '{{ $value }}' }"
    x-modelable="selectedValue"
    role="radiogroup"
    {{ $attributes->merge(['class' => '']) }}
>
    {{ $slot }}
</div>
