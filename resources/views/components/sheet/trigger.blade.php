{{--
    Sheet Trigger Component
    The element that opens the sheet.
    Documentation: docs/components/sheet.md
--}}
@props(['asChild' => false])

@php
$baseClasses = 'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50';

$triggerClasses = 'bg-primary text-primary-foreground hover:bg-primary/90 h-9 px-4 py-2';

$classes = $baseClasses . ' ' . $triggerClasses;
@endphp

@if($asChild)
    {{-- For asChild, we apply trigger classes and click handler to the child element --}}
    @php
        $slotContent = trim($slot);
        // Add @click handler and accessibility attributes to the first HTML tag
        $slotContent = preg_replace(
            '/^(<[a-zA-Z][^>]*)(>)/',
            '$1 @click="openSheet()" class="' . $classes . '" $2',
            $slotContent,
            1
        );
    @endphp
    {!! $slotContent !!}
@else
    <button
        type="button"
        @click="openSheet()"
        {{ $attributes->merge(['class' => $classes]) }}
    >
        {{ $slot }}
    </button>
@endif
