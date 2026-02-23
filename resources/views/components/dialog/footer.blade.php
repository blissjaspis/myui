{{--
    Dialog Footer Component
    A container for the footer section of a dialog.
    Documentation: docs/components/dialog.md
--}}
<div {{ $attributes->merge(['class' => 'flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2']) }}>
    {{ $slot }}
</div>
