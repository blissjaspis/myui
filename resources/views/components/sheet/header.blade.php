{{--
    Sheet Header Component
    A container for the header section of a sheet with title and description.
    Documentation: docs/components/sheet.md
--}}
<div {{ $attributes->merge(['class' => 'flex flex-col space-y-1.5 text-left pr-10']) }}>
    {{ $slot }}
</div>
