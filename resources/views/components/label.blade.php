{{--
    Label Component
    Based on shadcn/ui Label design
    Documentation: docs/components/label.md
--}}
@props([
    'asChild' => false,
])

@if ($asChild)
    <span
        {{ $attributes->merge([
            'class' => 'text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70',
        ]) }}
    >
        {{ $slot }}
    </span>
@else
    <label
        {{ $attributes->merge([
            'class' => 'text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70',
        ]) }}
    >
        {{ $slot }}
        @if ($attributes->has('required'))
            <span class="text-destructive">*</span>
        @endif
    </label>
@endif
