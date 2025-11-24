{{--
    Dropdown Content Component
    Documentation: docs/components/dropdown.md
--}}
@props(['align' => 'left', 'width' => 'w-48', 'offset' => '2'])

@php
    $alignmentClasses = match ($align) {
        'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
        'top' => 'origin-top',
        'right' => 'ltr:origin-top-right rtl:origin-top-left end-0',
        default => 'ltr:origin-top-left rtl:origin-top-right start-0',
    };
@endphp

<div 
    x-show="open"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="transform opacity-0 scale-95"
    x-transition:enter-end="transform opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="transform opacity-100 scale-100"
    x-transition:leave-end="transform opacity-0 scale-95"
    class="absolute z-50 mt-{{ $offset }} {{ $width }} {{ $alignmentClasses }}"
    style="display: none;"
    x-on:click="open = false"
    role="menu"
    aria-orientation="vertical"
    {{ $attributes }}
>
    <div class="min-w-32 overflow-hidden rounded-md border border-border dark:border-gray-700 bg-popover dark:bg-gray-800 p-1 text-popover-foreground dark:text-gray-200 shadow-md">
        {{ $slot }}
    </div>
</div> 