{{--
    Input Group Component - shadcn/ui style
    Adds icons, text, or buttons inside an input
--}}
<div {{ $attributes->merge(['class' => 'relative flex items-center']) }}>
    {{ $slot }}
</div>