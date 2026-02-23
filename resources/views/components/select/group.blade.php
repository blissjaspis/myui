{{--
    Select Group Component
    Documentation: docs/components/select.md
--}}
<div
    role="group"
    aria-label="{{ $attributes->get('label') }}"
    {{ $attributes->merge(['class' => 'p-1 w-full']) }}
>
    {{ $slot }}
</div>
