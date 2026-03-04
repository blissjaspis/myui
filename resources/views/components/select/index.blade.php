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
        wireModel: @js($wireModel),
        isDisabled: @js((bool) $disabled),
        value: @js($value),
        selectedLabel: null,
        isSyncingFromWire: false,
        normalizeValue(value) {
            return value === null || value === undefined ? '' : String(value);
        },
        syncValueFromWire() {
            if (!this.wireModel) return;
            const wireValue = $wire.get(this.wireModel);

            if (this.normalizeValue(wireValue) === this.normalizeValue(this.value)) {
                return;
            }

            this.isSyncingFromWire = true;
            this.value = wireValue;
            this.$nextTick(() => {
                this.isSyncingFromWire = false;
            });
        },
        syncValueToWire(value) {
            if (!this.wireModel) return;
            const currentWireValue = $wire.get(this.wireModel);

            if (this.normalizeValue(currentWireValue) === this.normalizeValue(value)) {
                return;
            }

            $wire.set(this.wireModel, value);
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
        if (wireModel) {
            syncValueFromWire();
            $wire.$watch(wireModel, (newValue) => {
                if (normalizeValue(newValue) === normalizeValue(value)) {
                    return;
                }

                isSyncingFromWire = true;
                value = newValue;
                $nextTick(() => updateSelectedLabel());
                $nextTick(() => { isSyncingFromWire = false; });
            });
        }

        $watch('value', (newValue) => {
            if (wireModel && !isSyncingFromWire) {
                syncValueToWire(newValue);
            }
            $nextTick(() => updateSelectedLabel());
        });

        $nextTick(() => updateSelectedLabel());
    "
    x-on:keydown.escape.window="open = false"
    x-on:select-item.window="
        if ($event.detail.selectId === selectId) {
            if (normalizeValue(value) !== normalizeValue($event.detail.value)) {
                value = $event.detail.value;
            }
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
