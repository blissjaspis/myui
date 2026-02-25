{{--
    Dropdown Sub Menu Content
    The content of a nested dropdown menu
--}}
@props(['side' => 'right', 'align' => 'start'])

@php
$sideClasses = match ($side) {
    'left' => 'right-full mr-1',
    default => 'left-full ml-1',
};

$alignClasses = match ($align) {
    'center' => 'top-1/2 -translate-y-1/2',
    'end' => 'bottom-0',
    default => 'top-0',
};
@endphp

<div
    x-show="subOpen"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    class="absolute z-50 min-w-[8rem] {{ $sideClasses }} {{ $alignClasses }}"
    style="display: none;"
    x-on:mouseenter="openSub()"
    x-on:mouseleave="closeSub()"
>
    <div class="overflow-hidden rounded-md border border-border bg-popover p-1 text-popover-foreground shadow-md">
        {{ $slot }}
    </div>
</div>
