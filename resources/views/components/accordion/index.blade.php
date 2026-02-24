{{--
    Accordion Component - Root
    Based on shadcn/ui Accordion design
    Documentation: docs/components/accordion.md
--}}
@props([
    'type' => 'single',
    'collapsible' => false,
    'defaultValue' => null,
])

<div
    x-data="{
        type: '{{ $type }}',
        collapsible: {{ $collapsible ? 'true' : 'false' }},
        openItems: {{ $defaultValue ? "['" . $defaultValue . "']" : '[]' }},
        isOpen(value) {
            return this.openItems.includes(value);
        },
        toggle(value) {
            if (this.type === 'single') {
                if (this.isOpen(value)) {
                    if (this.collapsible) {
                        this.openItems = [];
                    }
                } else {
                    this.openItems = [value];
                }
            } else {
                if (this.isOpen(value)) {
                    this.openItems = this.openItems.filter(item => item !== value);
                } else {
                    this.openItems.push(value);
                }
            }
        }
    }"
    {{ $attributes->merge(['class' => 'w-full']) }}
>
    {{ $slot }}
</div>
