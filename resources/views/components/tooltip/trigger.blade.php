{{--
    Tooltip Trigger Component
    The element that triggers the tooltip to show/hide on hover and focus.
    Documentation: docs/components/tooltip.md
--}}
@props(['asChild' => false])

@if($asChild)
    {{-- For asChild, we apply tooltip trigger attributes to the first child element --}}
    @php
        $slotContent = trim($slot);
        // Add x-ref, accessibility attributes, and event handlers to the first HTML tag
        $slotContent = preg_replace(
            '/^(<[a-zA-Z][^>]*)(>)/',
            '$1 x-ref="trigger" @focus="show()" @blur="hide()" @mouseenter="show()" @mouseleave="hide()" aria-describedby="tooltip-content" class="inline-flex" $2',
            $slotContent,
            1
        );
    @endphp
    {!! $slotContent !!}
@else
    <span
        x-ref="trigger"
        @focus="show()"
        @blur="hide()"
        @mouseenter="show()"
        @mouseleave="hide()"
        aria-describedby="tooltip-content"
        {{ $attributes->merge(['class' => 'inline-flex']) }}
    >
        {{ $slot }}
    </span>
@endif
