{{--
    Dialog Title Component
    The title text for the dialog.
    Documentation: docs/components/dialog.md
--}}
<h2 {{ $attributes->merge(['class' => 'text-lg font-semibold leading-none tracking-tight']) }}>
    {{ $slot }}
</h2>
