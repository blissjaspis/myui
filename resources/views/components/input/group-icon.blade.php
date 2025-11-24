@props(['align' => 'left', 'top' => 'top-3'])

@php
    $align = match ($align) {
        'right' => 'right-2',
        default => 'left-2',
    };
@endphp

<div class="absolute flex {{ $top }} size-4 text-muted-foreground {{ $align }}" {{ $attributes->merge(['class' => '']) }}>
    {{ $slot }}
</div>