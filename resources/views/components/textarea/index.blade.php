{{--
    Textarea Component
    Based on shadcn/ui Textarea design
    Documentation: docs/components/textarea.md
--}}
@props([
    'autoResize' => false,
])

@if ($autoResize)
<textarea
    x-data="{
        resize() {
            $el.style.height = '0px';
            $el.style.height = $el.scrollHeight + 'px';
        }
    }"
    x-init="resize()"
    @input="resize()"
    {{ $attributes->merge([
        'class' => 'flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50',
    ]) }}
>
    {{ $slot }}
</textarea>
@else
<textarea
    {{ $attributes->merge([
        'class' => 'flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50',
    ]) }}
>
    {{ $slot }}
</textarea>
@endif
