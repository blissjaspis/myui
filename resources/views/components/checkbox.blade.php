{{--
    Checkbox Component (Single File)
    A complete checkbox with label in one component
    Or use as wrapper with slot content for composable pattern
    Documentation: docs/components/checkbox.md
--}}
@props([
    'wire' => null,
    'name' => null,
    'id' => null,
    'value' => null,
    'label' => null,
    'description' => null,
    'error' => null,
    'checked' => false,
    'disabled' => false,
    'required' => false,
    'invalid' => false,
])

@php
$checkboxId = $id ?? 'checkbox_' . uniqid();
$hasSlotContent = trim($slot) !== '';
$isInvalid = $invalid || $error;
@endphp

<div
    x-data="{
        checked: {{ $wire ? '$wire.entangle(\''.$wire.'\')' : ($checked ? 'true' : 'false') }},
        toggle() {
            if (!{{ $disabled ? 'true' : 'false' }}) {
                this.checked = !this.checked;
            }
        }
    }"
    x-modelable="checked"
    x-bind:data-invalid="{{ $isInvalid ? 'true' : 'false' }}"
    class="flex items-start space-x-3"
    {{ $attributes }}
>
    @if($hasSlotContent)
        {{-- Composable pattern: render slot content only --}}
        {{ $slot }}
    @else
        {{-- Single component pattern: render built-in button and label --}}
        <button
            type="button"
            role="checkbox"
            id="{{ $checkboxId }}"
            x-bind:aria-checked="checked"
            x-bind:aria-invalid="{{ $isInvalid ? 'true' : 'false' }}"
            x-bind:data-state="checked ? 'checked' : 'unchecked'"
            x-bind:data-disabled="{{ $disabled ? 'true' : 'false' }}"
            x-bind:data-invalid="{{ $isInvalid ? 'true' : 'false' }}"
            x-on:click="toggle()"
            x-on:keydown.space.prevent="toggle()"
            x-on:keydown.enter.prevent="toggle()"
            @if($disabled) disabled @endif
            @if($isInvalid) aria-invalid="true" @endif
            class="peer h-4 w-4 shrink-0 rounded-sm border ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 transition-colors
                {{ $isInvalid 
                    ? 'border-destructive dark:border-red-500 data-[state=checked]:bg-destructive data-[state=checked]:text-destructive-foreground dark:data-[state=checked]:bg-red-500 dark:data-[state=checked]:text-white' 
                    : 'border-primary dark:border-gray-500 data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground dark:data-[state=checked]:bg-indigo-500 dark:data-[state=checked]:text-white' 
                }}"
        >
            <span
                x-show="checked"
                style="display: none;"
                class="flex items-center justify-center w-full h-full text-current"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="12"
                    height="12"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="4"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    aria-hidden="true"
                >
                    <path d="M20 6 9 17l-5-5"></path>
                </svg>
            </span>
        </button>

        <div class="grid gap-1.5 leading-none">
            @if($label)
                <label
                    for="{{ $checkboxId }}"
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 cursor-pointer select-none"
                >
                    {{ $label }}
                </label>
            @endif
            @if($description)
                <p class="text-sm text-muted-foreground">
                    {{ $description }}
                </p>
            @endif
            @if($error)
                <p class="text-sm text-destructive dark:text-red-400">
                    {{ $error }}
                </p>
            @endif
        </div>
    @endif

    @if($name && !$wire)
        <input
            type="checkbox"
            name="{{ $name }}"
            value="{{ $value ?? '1' }}"
            x-model="checked"
            @if($disabled) disabled @endif
            @if($required) required @endif
            @if($isInvalid) aria-invalid="true" @endif
            class="hidden"
        >
    @endif
</div>
