{{--
    Select Component - shadcn/ui style
    Based on: https://ui.shadcn.com/docs/components/radix/select
    Documentation: docs/components/select.md
--}}
@props([
    'wire' => null,
    'name' => null,
    'value' => null,
    'disabled' => false,
    'required' => false,
])

<div
    x-data="{
        open: false,
        value: {{ $wire ? '$wire.entangle(\''.$wire.'\')' : ($value ? "'".$value."'" : 'null') }},
        selectedLabel: null,
        updateSelectedLabel() {
            const item = this.$refs.content?.querySelector(`[data-value='${this.value}']`);
            this.selectedLabel = item?.textContent?.trim() || null;
        }
    }"
    x-init="
        $watch('value', () => { updateSelectedLabel(); });
        updateSelectedLabel();
    "
    x-on:click.away="open = false"
    x-on:keydown.escape.window="open = false"
    x-on:select-item.window="
        if ($event.detail.selectId === $el.dataset.selectId) {
            value = $event.detail.value;
            open = false;
            updateSelectedLabel();
        }
    "
    data-select-id="{{ $name ?? uniqid('select_') }}"
    data-state="closed"
    x-bind:data-state="open ? 'open' : 'closed'"
    class="relative"
    {{ $attributes->merge(['class' => 'w-full']) }}
>
    {{ $slot }}

    @if($name && !$wire)
        <input type="hidden" name="{{ $name }}" x-bind:value="value">
    @endif
</div>
