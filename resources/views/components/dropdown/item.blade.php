{{--
    Dropdown Item Component
    Documentation: docs/components/dropdown.md
--}}
@props(['variant' => 'default', 'disabled' => false, 'href' => null, 'inset' => false])

@php
// Base classes matching shadcn dropdown menu item
$baseClasses = 'relative flex w-full cursor-default items-center gap-1.5 rounded-md px-1.5 py-1 text-sm outline-hidden select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*=\'size-\'])]:size-4';

// Destructive variant styling
$destructiveClasses = 'text-destructive hover:bg-destructive/10 hover:text-destructive focus:bg-destructive/10 focus:text-destructive [&_svg]:text-destructive';

// Default variant styling
$defaultClasses = 'text-popover-foreground';

// Disabled state
$disabledClasses = $disabled
    ? 'pointer-events-none opacity-50'
    : 'data-[disabled]:pointer-events-none data-[disabled]:opacity-50';

// Inset padding
$insetClasses = $inset ? 'pl-7' : '';

$classes = $baseClasses . ' ' .
    ($variant === 'destructive' ? $destructiveClasses : $defaultClasses) . ' ' .
    $disabledClasses . ' ' .
    $insetClasses;
@endphp

@if($href)
    <a
        href="{{ $href }}"
        role="menuitem"
        data-variant="{{ $variant }}"
        @if($disabled) data-disabled @endif
        @if($inset) data-inset @endif
        x-on:click="open = false"
        {{ $attributes->merge(['class' => $classes]) }}
        @if($disabled) tabindex="-1" aria-disabled="true" @endif
    >
        {{ $slot }}
    </a>
@else
    <button
        type="button"
        role="menuitem"
        data-variant="{{ $variant }}"
        @if($disabled) data-disabled @endif
        @if($inset) data-inset @endif
        x-on:click="open = false"
        {{ $attributes->merge(['class' => $classes]) }}
        @if($disabled) disabled tabindex="-1" aria-disabled="true" @endif
    >
        {{ $slot }}
    </button>
@endif 