{{--
    Checkbox Button Component
    The visual checkbox input that displays the check state
    Documentation: docs/components/checkbox.md
--}}
@props([
    'id' => null,
    'disabled' => false,
    'invalid' => false,
])

@php
$buttonId = $id ?? 'checkbox_button_' . uniqid();
@endphp

<button
    type="button"
    role="checkbox"
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
        'class' => 'peer h-4 w-4 shrink-0 rounded-sm border ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 transition-colors ' .
            ($invalid 
                ? 'border-destructive dark:border-red-500 data-[state=checked]:bg-destructive data-[state=checked]:text-destructive-foreground dark:data-[state=checked]:bg-red-500 dark:data-[state=checked]:text-white' 
                : 'border-primary dark:border-gray-500 data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground dark:data-[state=checked]:bg-indigo-500 dark:data-[state=checked]:text-white'
            ),
    ]) }}
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
