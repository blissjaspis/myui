{{--
    Input Group Text Component - shadcn/ui style
    For text addons like currency symbols, domains, etc.
--}}
@props(['align' => 'start'])

@php
    $alignValue = match ($align) {
        'end' => 'inline-end',
        default => 'inline-start',
    };
@endphp

<span {{ $attributes->merge(['class' => 'flex items-center px-3 text-sm text-muted-foreground', 'data-align' => $alignValue]) }}>
    {{ $slot }}
</span>