{{--
    Select Trigger Component - shadcn/ui style
    Based on: https://ui.shadcn.com/docs/components/radix/select
    Documentation: docs/components/select.md
--}}
@props([
    'class' => null,
    'size' => 'default',
])

@php
$sizeClasses = match ($size) {
    'sm' => 'h-8 px-2 text-xs',
    'lg' => 'h-12 px-4 text-base',
    default => 'h-9 px-3 py-2 text-sm',
};
@endphp

<button
    type="button"
    role="combobox"
    x-on:click="open = !open"
    x-bind:aria-expanded="open"
    aria-controls=""
    x-bind:data-state="open ? 'open' : 'closed'"
    x-bind:disabled="$el.closest('[data-select-id]')?.querySelector('[disabled]') !== null"
    {{ $attributes->merge([
        'class' => 'flex w-full items-center justify-between rounded-md border border-input dark:border-gray-700 bg-transparent '. $sizeClasses .' shadow-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-1 focus:ring-ring disabled:cursor-not-allowed disabled:opacity-50 whitespace-nowrap [&>span]:line-clamp-1 ' . ($class ?? ''),
    ]) }}
>
    {{ $slot }}
    <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="h-4 w-4 opacity-50"
        aria-hidden="true"
    >
        <path d="m6 9 6 6 6-6"></path>
    </svg>
</button>
