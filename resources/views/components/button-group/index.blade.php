{{--
    Button Group Component - shadcn/ui style
    A container that groups related buttons together with consistent styling.
    Documentation: docs/components/button-group.md
--}}
@props([
    'orientation' => 'horizontal',
    'variant' => 'default',
])

@php
$isVertical = $orientation === 'vertical';

$orientations = [
    'horizontal' => 'inline-flex flex-row items-stretch w-fit',
    'vertical' => 'inline-flex flex-col items-stretch h-fit',
];

// Base styles: remove all radius from children, add z-index on focus
$baseClasses = '[&>*]:relative [&>*]:rounded-none [&>*:focus-visible]:z-10 [&>*:focus-visible]:relative';

// Border radius: first gets left/top, last gets right/bottom
$radiusClasses = $isVertical
    ? '[&>*:first-child]:rounded-t-md [&>*:last-child]:rounded-b-md'
    : '[&>*:first-child]:rounded-l-md [&>*:last-child]:rounded-r-md';

// Border handling: remove left border (horizontal) or top border (vertical) from non-first children
$borderClasses = match ($variant) {
    'outline' => $isVertical
        ? '[&>*:not(:first-child)]:border-t-0 rounded-md border border-input'
        : '[&>*:not(:first-child)]:border-l-0 rounded-md border border-input',
    'ghost' => 'gap-1',
    default => $isVertical
        ? '[&>*:not(:first-child)]:border-t-0'
        : '[&>*:not(:first-child)]:border-l-0',
};

$classes = $orientations[$orientation] . ' ' . $baseClasses . ' ' . $radiusClasses . ' ' . $borderClasses;
@endphp

<div role="group" data-button-group="{{ $orientation }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
