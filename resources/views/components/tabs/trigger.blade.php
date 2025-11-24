{{--
    Tabs Trigger Component
    Documentation: docs/components/tabs.md
--}}
@props([
    'value' => '',
    'checked' => false,
])

<div>
    <x-myui::radio-group.item
        :id=$value
        :$value
        :$checked
        class="peer sr-only"
    />
    <label
        @if ($value) for="{{ $value }}" @endif
        {{ $attributes->merge(['class' => 'inline-flex w-full items-center justify-center whitespace-nowrap rounded-md px-3 py-2 text-sm font-medium ring-offset-background transition-all cursor-pointer peer-focus-visible:outline-none peer-focus-visible:ring-2 peer-focus-visible:ring-ring peer-focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 peer-checked:bg-background dark:peer-checked:bg-gray-950 peer-checked:text-foreground dark:peer-checked:text-white peer-checked:shadow text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 hover:text-foreground dark:hover:text-gray-200']) }}
    >
        {{ $slot }}
    </label>
</div>