@props(['keys' => ''])

<span {{ $attributes->merge(['class' => 'ml-auto text-xs tracking-widest text-muted-foreground']) }}>
    {{ $keys ?: $slot }}
</span> 