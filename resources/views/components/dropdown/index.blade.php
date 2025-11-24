{{--
    Dropdown Component
    Documentation: docs/components/dropdown.md
--}}
@props(['align' => 'left', 'width' => 'w-48', 'offset' => '8'])

@php
    $alignmentClasses = match ($align) {
        'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
        'top' => 'origin-top',
        'right' => 'ltr:origin-top-right rtl:origin-top-left end-0',
        default => 'ltr:origin-top-left rtl:origin-top-right start-0',
    };
@endphp

<div 
    x-data="{ open: false }"
    x-on:click.away="open = false"
    x-on:keydown.escape.window="open = false"
    class="relative inline-block text-left"
    {{ $attributes }}
>
    {{ $slot }}
</div>