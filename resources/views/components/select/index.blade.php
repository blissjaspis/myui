{{--
    Select Component
    Documentation: docs/components/select.md
--}}
@props([
    'wire' => null,
    'name' => null,
    'value' => null,
    'disabled' => false,
    'required' => false,
])

@php
    $wireModel = $wire;

    if (!$wireModel) {
        foreach ($attributes->getAttributes() as $attribute => $attributeValue) {
            if (str_starts_with($attribute, 'wire:model')) {
                $wireModel = $attributeValue;
                break;
            }
        }
    }

    $selectId = $name ?? uniqid('select_');
    $rootAttributes = $attributes->whereDoesntStartWith('wire:model');
@endphp

<div
    x-data="{
        open: false,
        selectId: @js($selectId),
        isDisabled: @js((bool) $disabled),
        value: @if($wireModel)$wire.entangle(@js($wireModel)).live @else @js($value)@endif,
        selectedLabel: null,
        normalizeValue(value) {
            return value === null || value === undefined ? '' : String(value);
        },
        updateSelectedLabel() {
            if (this.value === null || this.value === undefined || this.value === '') {
                this.selectedLabel = null;
                return;
            }

            const normalizedValue = this.normalizeValue(this.value);
            const options = this.$el.querySelectorAll('[data-select-item-value]');
            const selectedOption = Array.from(options).find(
                (option) => option.dataset.selectItemValue === normalizedValue
            );

            this.selectedLabel = selectedOption
                ? selectedOption.dataset.selectItemLabel || selectedOption.textContent.trim()
                : null;
        }
    }"
    x-init="
        $watch('value', () => { $nextTick(() => updateSelectedLabel()); });
        $nextTick(() => updateSelectedLabel());
    "
    x-on:keydown.escape.window="open = false"
    x-on:select-item.window="
        if ($event.detail.selectId === selectId) {
            value = $event.detail.value;
            open = false;
            updateSelectedLabel();
        }
    "
    data-select-id="{{ $selectId }}"
    x-bind:data-disabled="isDisabled ? '' : null"
    data-state="closed"
    x-bind:data-state="open ? 'open' : 'closed'"
    class="relative"
    {{ $rootAttributes->merge(['class' => 'w-full']) }}
>
    {{ $slot }}

    @if($name && !$wireModel)
        <input
            type="hidden"
            name="{{ $name }}"
            x-bind:value="value"
            x-bind:disabled="isDisabled"
            @if($required) required @endif
        >
    @endif
</div>
