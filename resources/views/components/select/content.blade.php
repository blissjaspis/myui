{{--
    Select Content Component
    Documentation: docs/components/select.md
--}}
@props([
    'position' => 'popper', // 'popper' | 'item-aligned'
    'align' => 'start', // 'start' | 'center' | 'end'
    'side' => 'bottom', // 'top' | 'bottom'
    'sideOffset' => 4,
    'class' => null,
])

@php
$positionClasses = match ($position) {
    'item-aligned' => 'w-full max-h-96',
    default => 'relative z-50 max-h-96 min-w-[8rem] overflow-hidden rounded-md border shadow-md',
};

$alignClasses = match ($align) {
    'center' => 'left-1/2 -translate-x-1/2',
    'end' => 'right-0',
    default => 'left-0',
};

$sideClasses = match ($side) {
    'top' => 'bottom-full mb-1',
    default => 'mt-1',
};
@endphp

<div
    x-show="open"
    x-transition:enter="transition ease-out duration-150"
    x-transition:enter-start="opacity-0 translate-y-1 scale-95"
    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
    x-transition:leave="transition ease-in duration-100"
    x-transition:leave-start="opacity-100 translate-y-0 scale-100"
    x-transition:leave-end="opacity-0 translate-y-1 scale-95"
    x-cloak
    role="listbox"
    x-ref="content"
    x-bind:data-state="open ? 'open' : 'closed'"
    class="absolute z-50 w-full {{ $sideClasses }} {{ $positionClasses }} {{ $alignClasses }} {{ $class ?? '' }}"
    {{ $attributes }}
>
    <div class="w-full rounded-md border border-border dark:border-gray-700 bg-popover dark:bg-gray-800 text-popover-foreground dark:text-gray-200 shadow-md {{ $position === 'item-aligned' ? '' : 'p-1' }}">
        {{ $slot }}
    </div>
</div>
