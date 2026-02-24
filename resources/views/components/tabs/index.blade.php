{{--
    Tabs Component
    Based on shadcn/ui Tabs design
    Documentation: docs/components/tabs.md
--}}
<div
    x-data="{
        activeTab: '{{ $attributes->get('defaultValue', '') }}'
    }"
    {{ $attributes->except(['defaultValue']) }}
>
    {{ $slot }}
</div>
