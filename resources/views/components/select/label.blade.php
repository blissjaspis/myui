{{--
    Select Label Component - shadcn/ui style
    Based on: https://ui.shadcn.com/docs/components/radix/select
    Documentation: docs/components/select.md
--}}
<div
    role="label"
    aria-label="{{ $slot }}"
    {{ $attributes->merge(['class' => 'py-1.5 pl-8 pr-2 text-sm font-semibold text-muted-foreground dark:text-gray-400']) }}
>
    {{ $slot }}
</div>
