{{--
    Sheet Footer Component
    A container for the footer section of a sheet.
    Documentation: docs/components/sheet.md
--}}
<div {{ $attributes->merge(['class' => 'flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2 mt-auto']) }}>
    {{ $slot }}
</div>
