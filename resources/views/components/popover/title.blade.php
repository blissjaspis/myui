{{--
    Popover Title Component
    The title text for the popover header.
    Documentation: docs/components/popover.md
--}}
<h4 {{ $attributes->merge(['class' => 'text-sm font-semibold leading-none tracking-tight']) }}>
    {{ $slot }}
</h4>
