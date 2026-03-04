{{--
    Select Item Component
    Documentation: docs/components/select.md
--}}
@props([
    'value' => null,
    'disabled' => false,
])

<div
    role="option"
    tabindex="0"
    x-data="{
        itemValue: @js($value),
        itemLabel: '',
        isItemDisabled: @js((bool) $disabled),
        selectCurrentItem() {
            if (this.isItemDisabled || this.isDisabled) {
                return;
            }

            this.$dispatch('select-item', {
                selectId: this.selectId,
                value: this.itemValue,
                label: this.itemLabel
            });
        }
    }"
    x-init="itemLabel = ($el.textContent || '').trim()"
    x-bind:data-select-item-value="normalizeValue(itemValue)"
    x-bind:data-select-item-label="itemLabel"
    x-bind:data-highlighted="false"
    x-bind:data-state="normalizeValue(value) === normalizeValue(itemValue) ? 'checked' : 'unchecked'"
    x-bind:aria-selected="normalizeValue(value) === normalizeValue(itemValue)"
    x-bind:class="{
        'bg-accent dark:bg-gray-700 text-accent-foreground dark:text-gray-100': normalizeValue(value) === normalizeValue(itemValue),
        'text-primary dark:text-gray-200': normalizeValue(value) !== normalizeValue(itemValue),
        'pointer-events-none opacity-50': isItemDisabled || isDisabled,
        'hover:bg-accent hover:text-accent-foreground dark:hover:bg-gray-700 dark:hover:text-gray-100': !isItemDisabled && !isDisabled
    }"
    x-on:click="selectCurrentItem()"
    x-on:keydown.enter.prevent="selectCurrentItem()"
    x-on:keydown.space.prevent="selectCurrentItem()"
    {{ $attributes->merge([
        'class' => 'relative flex w-full cursor-default select-none items-center rounded-sm py-1.5 pl-8 pr-2 text-sm outline-none focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50',
    ]) }}
>
    <span class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center">
        <span x-show="normalizeValue(value) === normalizeValue(itemValue)">
            <x-myui::icons.check class="h-4 w-4 text-indigo-600 dark:text-indigo-400" />
        </span>
    </span>
    <span class="truncate">{{ $slot }}</span>
</div>
