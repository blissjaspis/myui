{{--
    Textarea Component
    Documentation: docs/components/textarea.md
--}}
@props(['type' => 'resize'])

@if ($type == 'resize')
<textarea
    x-data="{
        resize(){
            $el.style.height = '0px';
            $el.style.height = $el.scrollHeight + 'px';
        }
    }"
    x-init="resize()"
    x-on:input="resize()"
    {{ $attributes->merge(['class' => 'flex min-h-[80px] w-full rounded-md border border-input dark:border-gray-700 bg-transparent dark:bg-gray-900 px-3 py-2 text-sm text-gray-900 dark:text-gray-100 ring-offset-background placeholder:text-muted-foreground dark:placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50']) }}
>
    {{ $slot }}
</textarea>
@else
<textarea
    {{ $attributes->merge(['class' => 'flex min-h-[80px] w-full rounded-md border border-input dark:border-gray-700 bg-transparent dark:bg-gray-900 px-3 py-2 text-sm text-gray-900 dark:text-gray-100 ring-offset-background placeholder:text-muted-foreground dark:placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50']) }}
>
    {{ $slot }}
</textarea>
@endif