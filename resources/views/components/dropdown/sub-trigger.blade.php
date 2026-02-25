{{--
    Dropdown Sub Menu Trigger
    Opens a nested dropdown menu
--}}
@props(['disabled' => false, 'inset' => false])

@php
// Base classes matching shadcn dropdown menu item
$baseClasses = 'group/dropdown-menu-item relative flex cursor-default items-center gap-1.5 rounded-md px-1.5 py-1 text-sm outline-hidden select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground text-popover-foreground [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*=\'size-\'])]:size-4';

// Disabled state
$disabledClasses = $disabled
    ? 'pointer-events-none opacity-50'
    : 'data-[disabled]:pointer-events-none data-[disabled]:opacity-50';

// Inset padding
$insetClasses = $inset ? 'pl-7' : '';

$classes = $baseClasses . ' ' . $disabledClasses . ' ' . $insetClasses;
@endphp

<button
    type="button"
    x-on:mouseenter="openSub()"
    x-on:click.prevent="subOpen = !subOpen"
    @if($disabled) data-disabled @endif
    @if($inset) data-inset @endif
    {{ $attributes->merge(['class' => $classes]) }}
    @if($disabled) disabled tabindex="-1" aria-disabled="true" @endif
>
    {{ $slot }}
    <!-- Chevron right indicator -->
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-auto h-4 w-4"><path d="m9 18 6-6-6-6"/></svg>
</button>
