{{--
    Popover Content Component
    Displays rich content in a portal positioned relative to the trigger.
    Uses Alpine.js x-teleport to portal content to the body.
    Documentation: docs/components/popover.md
--}}
@props([
    'align' => 'center', // 'start' | 'center' | 'end'
    'side' => 'bottom',  // 'top' | 'right' | 'bottom' | 'left'
    'sideOffset' => 4,
    'teleport' => 'body', // Where to teleport the content
])

@php
// Build Alpine anchor directive
// Format: x-anchor.{side}.{align?}.offset.{offset}="$refs.trigger"

$anchorParts = [];

// Add side (if not default 'bottom')
if ($side !== 'bottom') {
    $anchorParts[] = $side;
}

// Add alignment modifier
// For top/bottom: start = left, end = right
// For left/right: start = top, end = bottom
if ($align !== 'center') {
    if ($side === 'top' || $side === 'bottom') {
        $anchorParts[] = $align === 'start' ? 'left' : 'right';
    } else {
        // left or right side
        $anchorParts[] = $align === 'start' ? 'top' : 'bottom';
    }
}

// Add offset
$anchorParts[] = 'offset';
$anchorParts[] = $sideOffset;

// Build the directive
if (count($anchorParts) > 0) {
    $anchorDirective = 'x-anchor.' . implode('.', $anchorParts) . '="$refs.trigger"';
} else {
    $anchorDirective = 'x-anchor.offset.' . $sideOffset . '="$refs.trigger"';
}

$defaultClasses = 'z-50 w-72 rounded-md border bg-popover dark:bg-gray-800 dark:border-gray-700 text-popover-foreground dark:text-gray-200 shadow-md outline-none';
@endphp

<template x-teleport="{{ $teleport }}">
    <div
        x-show="open"
        x-ref="content"
        @click.outside="close()"
        @keydown.escape.window="close()"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        {!! $anchorDirective !!}
        {{ $attributes->merge([
            'class' => $defaultClasses,
            'role' => 'dialog',
            'data-side' => $side,
            'data-align' => $align,
            'data-state' => 'open',
        ]) }}
        style="display: none;"
    >
        <div x-trap="open" class="p-4">
            {{ $slot }}
        </div>
    </div>
</template>
