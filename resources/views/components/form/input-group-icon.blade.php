{{--
    Input Group Icon Component - shadcn/ui style
--}}
@props(['align' => 'start'])

@php
    $alignValue = match ($align) {
        'end' => 'inline-end',
        default => 'inline-start',
    };

    $order = match ($align) {
        'end' => 'order-last has-[>button]:mr-[-0.3rem] has-[>kbd]:mr-[-0.15rem] pr-2',
        default => 'order-first has-[>button]:ml-[-0.3rem] has-[>kbd]:ml-[-0.15rem] pl-2',
    };
@endphp

<div {{ $attributes->merge(['class' => "h-auto gap-2 py-1.5 text-sm font-medium group-data-[disabled=true]/input-group:opacity-50 [&>kbd]:rounded-[calc(var(--radius)-5px)] [&>svg:not([class*='size-'])]:size-4 flex cursor-text items-center justify-center select-none $order", 'data-align' => $alignValue]) }}>
    {{ $slot }}
</div>