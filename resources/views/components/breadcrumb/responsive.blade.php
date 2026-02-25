{{--
    Responsive Breadcrumb - Auto-collapses middle items on small screens
    Usage:
    <x-myui::breadcrumb.responsive :items="[
        ['label' => 'Home', 'href' => '/'],
        ['label' => 'Documentation', 'href' => '/docs'],
        ['label' => 'Components', 'href' => '/docs/components'],
        ['label' => 'Breadcrumb', 'href' => null], // null href = current page
    ]" />
--}}
@props([
    'items' => [],
    'maxVisible' => 3,
    'collapseAt' => 4,
])

@php
$totalItems = count($items);
$shouldCollapse = $totalItems > $collapseAt;
$visibleItems = [];

if ($shouldCollapse) {
    // Always show first item
    $visibleItems[] = $items[0];
    // Add ellipsis marker
    $visibleItems[] = ['type' => 'ellipsis'];
    // Show last (maxVisible - 2) items
    $startIndex = $totalItems - ($maxVisible - 1);
    for ($i = $startIndex; $i < $totalItems; $i++) {
        $visibleItems[] = $items[$i];
    }
} else {
    $visibleItems = $items;
}
@endphp

<x-myui::breadcrumb {{ $attributes }}>
    <x-myui::breadcrumb.list>
        @foreach($visibleItems as $index => $item)
            @if($index > 0)
                <x-myui::breadcrumb.separator />
            @endif

            @if(isset($item['type']) && $item['type'] === 'ellipsis')
                <x-myui::breadcrumb.item class="hidden sm:inline-flex">
                    <x-myui::breadcrumb.ellipsis />
                </x-myui::breadcrumb.item>
                {{-- Mobile: Show collapsed indicator inline --}}
                <x-myui::breadcrumb.item class="sm:hidden">
                    <span class="text-muted-foreground">...</span>
                </x-myui::breadcrumb.item>
            @else
                <x-myui::breadcrumb.item
                    @class([
                        'hidden sm:inline-flex' => !$loop->first && !$loop->last && $shouldCollapse && $index < count($visibleItems) - 2,
                    ])
                >
                    @if($loop->last || is_null($item['href'] ?? null))
                        <x-myui::breadcrumb.page>
                            {{ Str::limit($item['label'], 30) }}
                        </x-myui::breadcrumb.page>
                    @else
                        <x-myui::breadcrumb.link :href="$item['href']">
                            {{ Str::limit($item['label'], 25) }}
                        </x-myui::breadcrumb.link>
                    @endif
                </x-myui::breadcrumb.item>
            @endif
        @endforeach
    </x-myui::breadcrumb.list>
</x-myui::breadcrumb>
