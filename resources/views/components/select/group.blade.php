{{--
    Select Group Component - shadcn/ui style
    Based on: https://ui.shadcn.com/docs/components/radix/select
    Documentation: docs/components/select.md
--}}
<div
    role="group"
    aria-label="{{ $attributes->get('label') }}"
    {{ $attributes->merge(['class' => 'p-1 w-full']) }}
>
    {{ $slot }}
</div>
