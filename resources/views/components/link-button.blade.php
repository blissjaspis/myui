@props(['variant' => 'default', 'size' => 'default', 'align' => 'center'])

@php
    $variant = match ($variant) {
        'secondary' => 'px-4 py-2 bg-secondary text-secondary-foreground hover:bg-secondary/90',
        'destructive' => 'px-4 py-2 bg-destructive text-destructive-foreground hover:bg-destructive/90',
        'outline' => 'px-4 py-2 border border-input bg-background hover:bg-accent hover:text-accent-foreground',
        'ghost' => 'px-4 py-2 hover:bg-accent hover:text-accent-foreground',
        'link' => 'text-muted-foreground hover:text-primary',
        default => 'px-4 py-2 bg-primary text-primary-foreground hover:bg-primary/90',
    };

    $size = match ($size) {
        'icon' => 'h-10 w-10',
        default => 'h-10',
    };

    $align = match ($align) {
        'center' => 'justify-center',
        default => '',
    };

    $result = "$size $variant $align";
@endphp

<a {{ $attributes->merge(['class' => 'inline-flex items-center justify-center1 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 '. $result]) }}>
{{ $slot }}
</a>