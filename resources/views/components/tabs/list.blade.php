{{--
    Tabs List Component
    Based on shadcn/ui Tabs design
    Documentation: docs/components/tabs.md
--}}
<div {{ $attributes->merge(['class' => 'inline-flex h-10 items-center justify-center rounded-md bg-muted p-1 text-muted-foreground']) }}>
    {{ $slot }}
</div>
