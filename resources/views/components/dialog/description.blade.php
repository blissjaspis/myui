{{--
    Dialog Description Component
    The description text for the dialog.
    Documentation: docs/components/dialog.md
--}}
<p {{ $attributes->merge(['class' => 'text-sm text-muted-foreground']) }}>
    {{ $slot }}
</p>
