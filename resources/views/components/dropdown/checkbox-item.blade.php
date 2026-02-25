{{--
    Dropdown Checkbox Item Component
    A dropdown item with checkbox functionality
--}}
@props([
    'checked' => false,
    'disabled' => false,
])

@php
// Base classes matching shadcn dropdown menu item
$baseClasses = 'group/dropdown-menu-item relative flex cursor-default items-center gap-1.5 rounded-md py-1 pl-7 pr-1.5 text-sm outline-hidden select-none focus:bg-accent focus:text-accent-foreground text-popover-foreground [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*=\'size-\'])]:size-4';

// Disabled state
$disabledClasses = $disabled
    ? 'pointer-events-none opacity-50'
    : 'data-[disabled]:pointer-events-none data-[disabled]:opacity-50';

$classes = $baseClasses . ' ' . $disabledClasses;
@endphp

<button
    type="button"
    role="menuitemcheckbox"
    x-data="{ checked: {{ $checked ? 'true' : 'false' }} }"
    x-on:click="checked = !checked"
    x-bind:aria-checked="checked"
    @if($disabled) data-disabled @endif
    {{ $attributes->merge(['class' => $classes]) }}
    @if($disabled) disabled tabindex="-1" aria-disabled="true" @endif
>
    <!-- Checkbox indicator -->
    <span class="absolute left-1.5 flex h-3.5 w-3.5 items-center justify-center">
        <span
            x-show="checked"
            class="flex h-4 w-4 items-center justify-center rounded border border-primary bg-primary text-primary-foreground"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-3 w-3"><path d="M20 6 9 17l-5-5"/></svg>
        </span>
        <span
            x-show="!checked"
            class="h-4 w-4 rounded border border-muted-foreground/30"
        ></span>
    </span>
    {{ $slot }}
</button>
