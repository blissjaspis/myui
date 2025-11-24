@props(['variant' => 'default', 'size' => 'default'])

@php
    $variant = match ($variant) {
        'secondary' => 'bg-secondary text-secondary-foreground hover:bg-secondary/90',
        'destructive' => 'bg-destructive text-destructive-foreground hover:bg-destructive/90',
        'outline' => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
        'ghost' => 'hover:bg-accent hover:text-accent-foreground bg-transparent',
        'link' => 'text-muted-foreground hover:text-primary',
        default => 'bg-primary text-primary-foreground hover:bg-primary/90',
    };

    $size = match ($size) {
        'sm' => 'h-8 px-3 text-xs',
        'lg' => 'h-12 px-8',
        'icon' => 'h-10 w-10',
        default => 'h-10 px-4 py-2',
    };
@endphp

<button 
    x-on:click="open = !open"
    x-bind:aria-expanded="open"
    aria-haspopup="true"
    type="button"
    {{ $attributes->merge(['class' => 'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 '. $variant.' '. $size]) }}
>
    {{ $slot }}
</button> 