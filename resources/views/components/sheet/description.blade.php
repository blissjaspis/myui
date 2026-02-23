{{--
    Sheet Description Component
    The description text for the sheet.
    Documentation: docs/components/sheet.md
--}}
<p {{ $attributes->merge(['class' => 'text-sm text-muted-foreground']) }}>
    {{ $slot }}
</p>
