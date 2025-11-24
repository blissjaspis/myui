{{--
    Dropdown Item Component
    Documentation: docs/components/dropdown.md
--}}
@props(['variant' => 'default', 'disabled' => false, 'href' => null])

@php
    $baseClasses = 'relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground dark:focus:bg-gray-700 dark:focus:text-gray-100';
    
    $variantClasses = match ($variant) {
        'destructive' => 'text-red-600 dark:text-red-400 focus:bg-red-50 dark:focus:bg-red-900/20 focus:text-red-900 dark:focus:text-red-300',
        default => 'text-primary dark:text-gray-200 hover:bg-primary-foreground dark:hover:bg-gray-700',
    };
    
    $disabledClasses = $disabled ? 'pointer-events-none opacity-50' : 'data-[disabled]:pointer-events-none data-[disabled]:opacity-50';
    
    $hoverClasses = !$disabled ? 'hover:bg-accent hover:text-accent-foreground dark:hover:bg-gray-700 dark:hover:text-gray-100' : '';
    
    $classes = $baseClasses . ' ' . $variantClasses . ' ' . $disabledClasses . ' ' . $hoverClasses;
@endphp

@if($href)
    <a 
        href="{{ $href }}"
        role="menuitem"
        {{ $attributes->merge(['class' => $classes]) }}
        @if($disabled) tabindex="-1" aria-disabled="true" @endif
    >
        {{ $slot }}
    </a>
@else
    <button 
        type="button"
        role="menuitem"
        {{ $attributes->merge(['class' => $classes]) }}
        @if($disabled) disabled tabindex="-1" aria-disabled="true" @endif
    >
        {{ $slot }}
    </button>
@endif 