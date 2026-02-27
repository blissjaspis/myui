{{--
    Select Content Component
    Uses Alpine.js x-teleport to portal content to the body for better positioning.
    Documentation: docs/components/select.md
--}}
@props([
    'position' => 'popper', // 'popper' | 'item-aligned'
    'align' => 'center', // 'start' | 'center' | 'end'
    'side' => 'bottom', // 'top' | 'bottom'
    'sideOffset' => 4,
    'teleport' => 'body', // Where to teleport the content
    'matchTriggerWidth' => true, // Match the width of the trigger button
    'class' => null,
])

@php
// Build Alpine anchor directive for teleport positioning
// Format: x-anchor.{side}.{align?}.offset.{offset}.width="$refs.trigger"

$anchorParts = [];

// Add side (if not default 'bottom')
if ($side !== 'bottom') {
    $anchorParts[] = $side;
}

// Add alignment modifier
if ($align !== 'center') {
    if ($side === 'top' || $side === 'bottom') {
        $anchorParts[] = $align === 'start' ? 'left' : 'right';
    }
}

// Add offset
$anchorParts[] = 'offset';
$anchorParts[] = $sideOffset;

// Add width modifier to match trigger width
if ($matchTriggerWidth) {
    $anchorParts[] = 'width';
}

// Build the directive
if (count($anchorParts) > 0) {
    $anchorDirective = 'x-anchor.' . implode('.', $anchorParts) . '="$refs.trigger"';
} else {
    $anchorDirective = 'x-anchor.offset.' . $sideOffset . '="$refs.trigger"';
}

// Remove min-width constraint when matching trigger width, let the anchor handle it
$defaultClasses = $matchTriggerWidth
    ? 'z-50 max-h-96 overflow-hidden rounded-md border shadow-md bg-popover dark:bg-gray-800 text-popover-foreground dark:text-gray-200'
    : 'z-50 max-h-96 min-w-[8rem] overflow-hidden rounded-md border shadow-md bg-popover dark:bg-gray-800 text-popover-foreground dark:text-gray-200';
@endphp

<template x-teleport="{{ $teleport }}">
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
        x-trap="open"
        @click.outside="open = false"
        @keydown.escape.window="open = false"
        {!! $anchorDirective !!}
        x-bind:data-state="open ? 'open' : 'closed'"
        x-bind:style="{{ $matchTriggerWidth ? '$refs.trigger ? { width: $refs.trigger.offsetWidth + \'px\' } : {}' : '{}' }}"
        class="{{ $defaultClasses }} {{ $class ?? '' }}"
        {{ $attributes }}
        style="display: none;"
    >
        <div class="w-full {{ $position === 'item-aligned' ? '' : 'p-1' }}">
            {{ $slot }}
        </div>
    </div>
</template>
