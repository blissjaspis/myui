@props(['inset' => false])

@php
$insetClasses = $inset ? 'pl-8' : '';
@endphp

<div
    {{ $attributes->merge(['class' => 'px-2 py-1.5 text-sm font-semibold text-muted-foreground ' . $insetClasses]) }}
>
    {{ $slot }}
</div> 