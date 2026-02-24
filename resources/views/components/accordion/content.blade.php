{{--
    Accordion Content Component
    Based on shadcn/ui Accordion design
    Documentation: docs/components/accordion.md
--}}
<div
    x-show="isOpen(value)"
    x-collapse
    :data-state="isOpen(value) ? 'open' : 'closed'"
    {{ $attributes->merge([
        'class' => 'overflow-hidden text-sm transition-all',
    ]) }}
>
    <div class="pb-4 pt-0">
        {{ $slot }}
    </div>
</div>
