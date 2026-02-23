{{--
    Select Item Component - shadcn/ui style
    Based on: https://ui.shadcn.com/docs/components/radix/select
    Documentation: docs/components/select.md
--}}
@props([
    'value' => null,
    'disabled' => false,
])

@php
$checkIcon = '<svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
</svg>';
@endphp

<div
    role="option"
    tabindex="0"
    x-data="{ itemValue: '{{ $value }}' }"
    x-bind:data-value="itemValue"
    x-bind:data-highlighted="false"
    x-bind:data-state="value === itemValue ? 'checked' : 'unchecked'"
    x-bind:aria-selected="value === itemValue"
    x-bind:class="{
        'bg-accent dark:bg-gray-700 text-accent-foreground dark:text-gray-100': value === itemValue,
        'text-primary dark:text-gray-200': value !== itemValue,
        'pointer-events-none opacity-50': {{ $disabled ? 'true' : 'false' }},
        'hover:bg-accent hover:text-accent-foreground dark:hover:bg-gray-700 dark:hover:text-gray-100': !{{ $disabled ? 'true' : 'false' }}
    }"
    x-on:click="
        if (!{{ $disabled ? 'true' : 'false' }}) {
            value = itemValue;
            open = false;
            $dispatch('select-item', { selectId: $el.closest('[data-select-id]').dataset.selectId, value: itemValue });
        }
    "
    x-on:keydown.enter.prevent="
        if (!{{ $disabled ? 'true' : 'false' }}) {
            value = itemValue;
            open = false;
            $dispatch('select-item', { selectId: $el.closest('[data-select-id]').dataset.selectId, value: itemValue });
        }
    "
    x-on:keydown.space.prevent="
        if (!{{ $disabled ? 'true' : 'false' }}) {
            value = itemValue;
            open = false;
            $dispatch('select-item', { selectId: $el.closest('[data-select-id]').dataset.selectId, value: itemValue });
        }
    "
    {{ $attributes->merge([
        'class' => 'relative flex w-full cursor-default select-none items-center rounded-sm py-1.5 pl-8 pr-2 text-sm outline-none focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50',
    ]) }}
>
    <span class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center">
        <span x-show="value === itemValue" class="h-4 w-4 text-indigo-600 dark:text-indigo-400">
            {!! $checkIcon !!}
        </span>
    </span>
    <span class="truncate">{{ $slot }}</span>
</div>
