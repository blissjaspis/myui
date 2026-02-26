{{--
    AvatarImage Component - shadcn/ui style
    Documentation: docs/components/avatar.md
--}}
@props(['src', 'alt' => ''])

<img
    src="{{ $src }}"
    alt="{{ $alt }}"
    {{ $attributes->merge(['class' => 'aspect-square h-full w-full object-cover']) }}
/>
