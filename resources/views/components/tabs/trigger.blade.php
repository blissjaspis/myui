{{--
    Tabs Trigger Component
    Based on shadcn/ui Tabs design
    Documentation: docs/components/tabs.md
--}}
@props([
    'value' => '',
])

<button
    type="button"
    role="tab"
    @click="activeTab = '{{ $value }}'"
    :aria-selected="activeTab === '{{ $value }}'"
    :data-state="activeTab === '{{ $value }}' ? 'active' : 'inactive'"
    {{ $attributes->merge([
        'class' => 'inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow-sm',
    ]) }}
>
    {{ $slot }}
</button>
