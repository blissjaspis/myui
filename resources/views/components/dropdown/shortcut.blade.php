@props(['keys' => ''])

<span {{ $attributes->merge(['class' => 'ml-auto text-xs tracking-widest opacity-60']) }}>
    {{ $keys ?: $slot }}
</span> 