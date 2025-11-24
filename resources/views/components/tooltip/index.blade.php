{{--
    Tooltip Component
    Documentation: docs/components/tooltip.md
--}}
<div
    x-data="{show: false}"
    x-init="
        $refs.trigger.addEventListener('mouseenter', () => {show = true;});
        $refs.trigger.addEventListener('mouseleave', () => {show = false;});
    "
>{{ $slot }}</div>