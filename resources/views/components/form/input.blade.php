{{--
    Input Component - shadcn/ui style
    Documentation: docs/components/input.md
--}}
@props(['type' => 'text'])

<input
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => 'flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[disabled]:cursor-not-allowed data-[disabled]:opacity-50 data-[invalid]:border-destructive data-[invalid]:ring-destructive'
    ]) }}
>