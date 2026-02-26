{{--
    AvatarGroupCount Component - shadcn/ui style
    Displays a count indicator for additional avatars
    Documentation: docs/components/avatar.md
--}}
@props(['count'])

@php
    $classes = 'relative flex h-10 w-10 items-center justify-center rounded-full border-2 border-background bg-muted text-xs font-medium text-muted-foreground';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    +{{ $count }}
</div>
