@props(['align' => 'left'])

@php
    $align = match ($align) {
        'right' => 'text-right',
        default => 'text-left',
    };
@endphp

<th class="h-12 px-4 align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 {{ $align }}">
    {{ $slot }}
</th>