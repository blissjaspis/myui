{{--
    Field Component - shadcn/ui style
    Wraps form inputs with labels and descriptions
--}}
@props(['orientation' => 'vertical', 'invalid' => false])

@php
    $baseClasses = 'data-[invalid=true]:text-destructive gap-2 group/field flex w-full flex-col *:w-full [&>.sr-only]:w-auto';

    $orientationClasses = match ($orientation) {
        'horizontal' => 'flex-row items-center',
        default => 'flex-col space-y-2',
    };

    $invalidAttr = $invalid ? 'true' : 'false';
@endphp

<div
    role="group"
    data-slot="field"
    data-orientation="{{ $orientation }}"
    data-invalid="{{ $invalidAttr }}"
    {{ $attributes->merge(['class' => $baseClasses . ' ' . $orientationClasses]) }}
>
    {{ $slot }}
</div>