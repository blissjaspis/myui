{{--
    Sheet Component
    A slide-out panel (drawer) that slides in from any edge of the screen.
    Documentation: docs/components/sheet.md
--}}
<div
    x-data="{
        open: false,
        openSheet() {
            this.open = true;
        },
        closeSheet() {
            this.open = false;
        }
    }"
    x-modelable="open"
    {{ $attributes }}
>
    {{ $slot }}
</div>
