@props(['variant' => 'default', 'size' => 'default'])

@php
    // Base styles
    $baseClasses =
        'inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium '. 
        'transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring '.
        'disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none1 [&_svg]:size-4 '. 
        '[&_svg]:shrink-0';

    // Variant styles based on shadcn-ui-inspired classes
    $variantClasses = match ($variant) {
        'default' => 'bg-primary text-primary-foreground shadow hover:bg-primary/90',
        'destructive' => 'bg-destructive text-destructive-foreground shadow-sm hover:bg-destructive/90',
        'outline' => 'border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground',
        'secondary' => 'bg-secondary text-secondary-foreground shadow-sm hover:bg-secondary/80',
        'ghost' => 'hover:bg-accent hover:text-accent-foreground',
        'link' => 'text-primary underline-offset-4 hover:underline',
    };

    // Size styles
    $sizeClasses = match ($size) {
        'sm' => 'h-9 px-3 rounded-md',
        'lg' => 'h-11 px-8 rounded-md',
        default => 'h-10 px-4 rounded-md',
    };

    $classes = trim("$baseClasses $variantClasses $sizeClasses");
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
