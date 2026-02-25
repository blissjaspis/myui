{{--
    Button Group Item - Wrapper for buttons within a button group
    Handles border radius adjustments when buttons are grouped
--}}
@props(['first' => false, 'last' => false])

@php
// When in a button group, we need to adjust border radius
// First item: rounded-l-md (or rounded-t-md for vertical)
// Last item: rounded-r-md (or rounded-b-md for vertical)
// Middle items: no border radius
$classes = 'inline-flex focus-within:z-10';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
