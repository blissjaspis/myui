{{--
    Popover Component
    The root container managing state for the popover.
    Documentation: docs/components/popover.md
--}}
<div
    x-data="{
        open: false,
        toggle() {
            this.open = !this.open;
        },
        close() {
            this.open = false;
        }
    }"
    x-modelable="open"
    class="relative inline-block"
>
    {{ $slot }}
</div>
