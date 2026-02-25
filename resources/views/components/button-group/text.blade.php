{{--
    Button Group Text - Display text within a button group
    Useful for labels or additional information
--}}
@props(['asChild' => false])

@php
$classes = 'inline-flex items-center px-3 py-2 text-sm text-muted-foreground';
@endphp

@if($asChild)
    @php
        $slotContent = trim($slot);
        $slotContent = preg_replace('/^(<[a-zA-Z][^>]*)(>)/', '$1 class="' . $classes . '"$2', $slotContent, 1);
    @endphp
    {!! $slotContent !!}
@else
    <span {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </span>
@endif
