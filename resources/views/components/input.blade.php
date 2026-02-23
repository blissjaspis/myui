{{--
    Input Component
    Displays a form input field or a component that looks like an input field.
    Documentation: docs/components/input.md
--}}
@props([
    'type' => 'text',
    'placeholder' => null,
    'disabled' => false,
    'readonly' => false,
    'required' => false,
    'autofocus' => false,
    'name' => null,
    'id' => null,
    'value' => null,
    'wire' => null,
])

@php
$inputId = $id ?? 'input_' . uniqid();
@endphp

<input
    type="{{ $type }}"
    @if($name) name="{{ $name }}" @endif
    id="{{ $inputId }}"
    @if($value) value="{{ $value }}" @endif
    @if($placeholder) placeholder="{{ $placeholder }}" @endif
    @if($wire) wire:model="{{ $wire }}" @endif
    @if($disabled) disabled @endif
    @if($readonly) readonly @endif
    @if($required) required @endif
    @if($autofocus) autofocus @endif
    {{ $attributes->merge([
        'class' => 'flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50'
    ]) }}
>
