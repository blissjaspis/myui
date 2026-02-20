{{--
    Input Group Icon Component - shadcn/ui style
--}}
@props(['align' => 'left'])

@php
    $alignClasses = match ($align) {
        'right' => 'right-3',
        default => 'left-3',
    };
@endphp

<div data-slot="icon" class="absolute flex size-4 text-muted-foreground {{ $alignClasses }}" {{ $attributes->merge(['class' => '']) }}>
    {{ $slot }}
</div>