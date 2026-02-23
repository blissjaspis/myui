{{--
    Checkbox Component
    Documentation: docs/components/checkbox.md
--}}
@props([
    'wire' => null,
    'name' => null,
    'id' => null,
    'value' => null,
    'checked' => false,
    'disabled' => false,
    'required' => false,
])

@php
$checkboxId = $id ?? 'checkbox_' . uniqid();
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
    class="flex items-center space-x-2"
    {{ $attributes }}
>
    {{ $slot }}

    @if($name && !$wire)
        <input
            type="checkbox"
            name="{{ $name }}"
            value="{{ $value ?? '1' }}"
            x-model="checked"
            @if($disabled) disabled @endif
            @if($required) required @endif
            class="hidden"
        >
    @endif
</div>
