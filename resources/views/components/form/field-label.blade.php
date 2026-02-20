{{--
    Field Label Component - shadcn/ui style
--}}
@props(['required' => false])

<label {{ $attributes->merge(['class' => 'text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70']) }}>
    {{ $slot }}
    @if($required)
        <span class="text-destructive ml-1" aria-label="required">*</span>
    @endif
</label>