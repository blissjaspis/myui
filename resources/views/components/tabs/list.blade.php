{{--
    Tabs List Component
    Documentation: docs/components/tabs.md
--}}
<div {{ $attributes->merge(['class' => 'h-10 items-center justify-center rounded-md bg-muted dark:bg-gray-800 p-1 text-muted-foreground dark:text-gray-400 grid w-full grid-cols-2']) }}>
    {{ $slot }}
</div>
