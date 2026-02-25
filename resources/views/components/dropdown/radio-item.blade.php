{{--
    Dropdown Radio Item Component
    A dropdown item with radio functionality
--}}
@props([
    'value' => null,
    'disabled' => false,
])

@php
// Base classes matching shadcn dropdown menu item
$baseClasses = 'group/dropdown-menu-item relative flex cursor-default items-center gap-1.5 rounded-md py-1 pl-7 pr-1.5 text-sm outline-hidden select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground text-popover-foreground [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*=\'size-\'])]:size-4';

// Disabled state
$disabledClasses = $disabled
    ? 'pointer-events-none opacity-50'
    : 'data-[disabled]:pointer-events-none data-[disabled]:opacity-50';

$classes = $baseClasses . ' ' . $disabledClasses;
@endphp

<button
    type="button"
    role="menuitemradio"
    x-data="{
        itemValue: '{{ $value }}',
        groupData: null,
        init() {
            const group = this.$el.closest('[role=radiogroup]');
            if (group && group._x_dataStack && group._x_dataStack.length > 0) {
                this.groupData = group._x_dataStack[0];
            }
        },
        select() {
            if (this.groupData) {
                this.groupData.selectedValue = this.itemValue;
            }
        },
        isSelected() {
            return this.groupData && this.groupData.selectedValue === this.itemValue;
        }
    }"
    x-on:click="select()"
    x-bind:aria-checked="isSelected()"
    @if($disabled) data-disabled @endif
    {{ $attributes->merge(['class' => $classes]) }}
    @if($disabled) disabled tabindex="-1" aria-disabled="true" @endif
>
    <!-- Radio indicator -->
    <span class="absolute left-1.5 flex h-3.5 w-3.5 items-center justify-center">
        <span
            x-show="isSelected()"
            class="h-2 w-2 rounded-full bg-primary"
        ></span>
        <span
            x-show="!isSelected()"
            class="h-2 w-2 rounded-full border border-muted-foreground/30"
        ></span>
    </span>
    {{ $slot }}
</button>
