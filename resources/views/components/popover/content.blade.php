{{--
    Popover Content Component
    Documentation: docs/components/popover.md
--}}
<div x-anchor.offset.6="$refs.trigger" x-show="show" @click.outside="show = false" {{ $attributes->merge(['class' => 'rounded-lg border bg-card dark:bg-gray-800 dark:border-gray-700 text-card-foreground dark:text-gray-200 shadow-sm absolute top-0 left-0']) }}>
    <div x-trap="show" class="p-4">
        {{ $slot }}
    </div>
</div>