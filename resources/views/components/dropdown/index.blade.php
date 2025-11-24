{{--
    Dropdown Component
    Documentation: docs/components/dropdown.md
--}}
<div 
    x-data="{ open: false }"
    x-on:click.away="open = false"
    x-on:keydown.escape.window="open = false"
    class="relative inline-block text-left"
    {{ $attributes }}
>
    {{ $slot }}
</div>