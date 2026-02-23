{{--
    Sheet Title Component
    The title text for the sheet.
    Documentation: docs/components/sheet.md
--}}
<h2 {{ $attributes->merge(['class' => 'text-lg font-semibold leading-none tracking-tight']) }}>
    {{ $slot }}
</h2>
