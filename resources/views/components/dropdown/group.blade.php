{{--
    Dropdown Group Component
    Groups related dropdown items together
--}}
<div {{ $attributes->merge(['class' => 'p-1']) }} role="group">
    {{ $slot }}
</div>
