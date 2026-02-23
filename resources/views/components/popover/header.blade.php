{{--
    Popover Header Component
    A container for the header section of a popover with title and description.
    Documentation: docs/components/popover.md
--}}
<div {{ $attributes->merge(['class' => 'flex flex-col space-y-1.5 text-center sm:text-left']) }}>
    {{ $slot }}
</div>
