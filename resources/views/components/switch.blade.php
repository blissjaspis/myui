{{--
    Switch Component (Single File)
    A control that allows the user to toggle between checked and not checked
    Documentation: docs/components/switch.md
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
    'size' => 'default', // 'sm' | 'default'
])

@php
$switchId = $id ?? 'switch_' . uniqid();
$hasSlotContent = trim($slot) !== '';
$isInvalid = $invalid || $error;

$sizeClasses = match ($size) {
    'sm' => 'h-4 w-7',
    default => 'h-6 w-11',
};

$thumbSizeClasses = match ($size) {
    'sm' => 'h-3 w-3',
    default => 'h-5 w-5',
};

$thumbTranslateClasses = match ($size) {
    'sm' => 'translate-x-3.5',
    default => 'translate-x-5',
};
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
    class="flex items-center space-x-3"
    {{ $attributes }}
>
    @if($hasSlotContent)
        {{-- Composable pattern: render slot content only --}}
        {{ $slot }}
    @else
        {{-- Single component pattern: render built-in switch and label --}}
        <button
            type="button"
            role="switch"
            id="{{ $switchId }}"
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
            class="peer inline-flex shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 {{ $sizeClasses }} 
                {{ $isInvalid 
                    ? 'bg-input data-[state=checked]:bg-destructive dark:data-[state=checked]:bg-red-500' 
                    : 'bg-input data-[state=checked]:bg-primary dark:data-[state=checked]:bg-indigo-500' 
                }}"
        >
            <span
                x-bind:class="checked ? '{{ $thumbTranslateClasses }}' : 'translate-x-0'"
                class="pointer-events-none block rounded-full bg-background shadow-lg ring-0 transition-transform {{ $thumbSizeClasses }}"
            ></span>
        </button>

        <div class="grid gap-1.5 leading-none">
            @if($label)
                <label
                    for="{{ $switchId }}"
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
