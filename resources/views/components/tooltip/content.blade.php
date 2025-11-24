{{--
    Tooltip Content Component
    Documentation: docs/components/tooltip.md
--}}
@aware([
    'delayDuration' => 250,
    'alignment' => 'top',
    'sideOffset' => 5
])

<div
    x-show="show"
    x-transition:enter.delay.{{ $delayDuration }}
    x-anchor.{{ $alignment }}.offset.{{ $sideOffset }}="$refs.trigger"
    {{ $attributes->merge(['class' => 'z-50 overflow-hidden rounded-md bg-primary dark:bg-gray-700 px-3 py-1.5 text-xs text-primary-foreground dark:text-gray-100']) }}
    x-cloak
>
    {{ $slot }}
</div>