{{--
    Button Component
    Documentation: docs/components/button.md
--}}
@props(['variant' => 'default', 'size' => 'default', 'asChild' => false])

@php
    $baseClasses = 'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50';

    $variantClasses = match ($variant) {
        'secondary' => 'bg-secondary text-secondary-foreground hover:bg-secondary/80',
        'destructive' => 'bg-destructive text-destructive-foreground hover:bg-destructive/90',
        'outline' => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
        'ghost' => 'hover:bg-accent hover:text-accent-foreground',
        'link' => 'text-primary underline-offset-4 hover:underline',
        default => 'bg-primary text-primary-foreground hover:bg-primary/90',
    };

    $sizeClasses = match ($size) {
        'xs' => 'h-7 px-2 text-xs',
        'sm' => 'h-8 px-3 text-xs',
        'default' => 'h-9 px-4 py-2',
        'lg' => 'h-10 px-8',
        'icon' => 'h-9 w-9',
        'icon-xs' => 'h-7 w-7',
        'icon-sm' => 'h-8 w-8',
        'icon-lg' => 'h-10 w-10',
        default => 'h-9 px-4 py-2',
    };

    $classes = $baseClasses . ' ' . $variantClasses . ' ' . $sizeClasses;
@endphp

@if($asChild)
    {{-- For asChild, we apply button classes to the first child element --}}
    @php
        $slotContent = trim($slot);
        // Simple regex to find the first HTML tag and add classes to it
        $slotContent = preg_replace('/^(<[a-zA-Z][^>]*)(>)/', '$1 class="' . $classes . '"$2', $slotContent, 1);
    @endphp
    {!! $slotContent !!}
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif