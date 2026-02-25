{{--
    Tooltip Content Component
    Displays a tooltip popup positioned relative to the trigger.
    Uses Alpine.js x-teleport to portal content to the body.
    Documentation: docs/components/tooltip.md
--}}
@props([
    'side' => 'top',
    'align' => 'center',
    'sideOffset' => 4,
    'class' => '',
])

@php
// Build Alpine anchor directive
// Format: x-anchor.{side}.{align?}.offset.{offset}="$refs.trigger"

// Build Alpine anchor directive
// Alpine.js anchor plugin syntax:
// - x-anchor.top.offset.4 = position above with 4px offset
// - x-anchor.top-start.offset.4 = position above, align to start (left) with 4px offset
// - x-anchor.top-end.offset.4 = position above, align to end (right) with 4px offset
// Alignment is appended to position with a dash

$position = $side;

// If alignment is not center, append it to position with dash
if ($align !== 'center') {
    $position .= '-' . $align;
}

$anchorDirective = 'x-anchor.' . $position . '.offset.' . $sideOffset . '="$refs.trigger"';

// Animation classes based on side
$enterClasses = match ($side) {
    'top' => 'opacity-0 translate-y-1',
    'bottom' => 'opacity-0 -translate-y-1',
    'left' => 'opacity-0 translate-x-1',
    'right' => 'opacity-0 -translate-x-1',
    default => 'opacity-0 translate-y-1',
};

$enterEndClasses = 'opacity-0 translate-y-0 translate-x-0';

$defaultClasses = 'z-50 overflow-hidden rounded-md border bg-primary dark:bg-gray-800 dark:border-gray-700 px-3 py-1.5 text-xs text-primary-foreground dark:text-gray-200 shadow-md animate-in fade-in-0 zoom-in-95';
@endphp

<template x-teleport="body">
    <div
        x-show="open"
        x-ref="content"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="{{ $enterClasses }}"
        x-transition:enter-end="opacity-100 translate-y-0 translate-x-0"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 translate-y-0 translate-x-0"
        x-transition:leave-end="opacity-0"
        {!! $anchorDirective !!}
        id="tooltip-content"
        role="tooltip"
        {{ $attributes->merge([
            'class' => $defaultClasses . ' ' . $class,
            'data-side' => $side,
            'data-align' => $align,
            'data-state' => 'open',
        ]) }}
        style="display: none;"
    >
        {{ $slot }}
    </div>
</template>
