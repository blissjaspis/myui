{{--
    Switch Button Component
    The visual toggle switch
    Documentation: docs/components/switch.md
--}}
@props([
    'id' => null,
    'size' => 'default', // 'sm' | 'default'
    'disabled' => false,
    'invalid' => false,
])

@php
$buttonId = $id ?? 'switch_button_' . uniqid();

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

<button
    type="button"
    role="switch"
    id="{{ $buttonId }}"
    x-bind:aria-checked="checked"
    x-bind:aria-invalid="{{ $invalid ? 'true' : 'false' }}"
    x-bind:data-state="checked ? 'checked' : 'unchecked'"
    x-bind:data-disabled="{{ $disabled ? 'true' : 'false' }}"
    x-bind:data-invalid="{{ $invalid ? 'true' : 'false' }}"
    x-on:click="toggle()"
    x-on:keydown.space.prevent="toggle()"
    x-on:keydown.enter.prevent="toggle()"
    @if($disabled) disabled @endif
    @if($invalid) aria-invalid="true" @endif
    {{ $attributes->merge([
        'class' => 'peer inline-flex shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 ' . $sizeClasses . ' ' .
            ($invalid 
                ? 'bg-input data-[state=checked]:bg-destructive dark:data-[state=checked]:bg-red-500' 
                : 'bg-input data-[state=checked]:bg-primary dark:data-[state=checked]:bg-indigo-500'
            ),
    ]) }}
>
    <span
        x-bind:class="checked ? '{{ $thumbTranslateClasses }}' : 'translate-x-0'"
        class="pointer-events-none block rounded-full bg-background shadow-lg ring-0 transition-transform {{ $thumbSizeClasses }}"
    ></span>
</button>
