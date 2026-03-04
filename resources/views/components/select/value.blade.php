{{--
    Select Value Component
    Documentation: docs/components/select.md
--}}
@props([
    'placeholder' => null,
])

<span
    x-bind:data-placeholder="selectedLabel ? null : true"
    class="pointer-events-none block flex-1 overflow-hidden text-ellipsis text-left"
>
    <span
        x-text="selectedLabel || @js($placeholder ?? '')"
        x-bind:class="selectedLabel ? '' : 'text-muted-foreground dark:text-gray-400'"
    ></span>
</span>
