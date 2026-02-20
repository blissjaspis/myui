{{--
    Badge Component - shadcn/ui style
    Documentation: docs/components/badge.md
--}}
@props(['variant' => 'default', 'asChild' => false])

@php
    $baseClasses = 'inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2';

    $variantClasses = match ($variant) {
        'secondary' => 'border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80',
        'destructive' => 'border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/90',
        'outline' => 'text-foreground',
        'ghost' => 'border-transparent bg-muted text-muted-foreground hover:bg-muted/80',
        'link' => 'border-transparent text-primary underline-offset-4 hover:underline',
        default => 'border-transparent bg-primary text-primary-foreground hover:bg-primary/90',
    };

    $classes = $baseClasses . ' ' . $variantClasses;
@endphp

@if($asChild)
    {{-- For asChild, we apply badge classes to the first child element --}}
    @php
        $slotContent = trim($slot);
        // Simple regex to find the first HTML tag and add classes to it
        $slotContent = preg_replace('/^(<[a-zA-Z][^>]*)(>)/', '$1 class="' . $classes . '"$2', $slotContent, 1);
    @endphp
    {!! $slotContent !!}
@else
    <span {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </span>
@endif