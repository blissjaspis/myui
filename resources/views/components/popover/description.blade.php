{{--
    Popover Description Component
    The description text for the popover header.
    Documentation: docs/components/popover.md
--}}
<p {{ $attributes->merge(['class' => 'text-sm text-muted-foreground']) }}>
    {{ $slot }}
</p>
