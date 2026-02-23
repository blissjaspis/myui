{{--
    Dialog Header Component
    A container for the header section of a dialog with title and description.
    Documentation: docs/components/dialog.md
--}}
<div {{ $attributes->merge(['class' => 'flex flex-col space-y-1.5 text-center sm:text-left']) }}>
    {{ $slot }}
</div>
