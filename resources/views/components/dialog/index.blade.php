{{--
    Dialog Component
    A window overlaid on either the primary window or another dialog window.
    Documentation: docs/components/dialog.md
--}}
<div
    x-data="{
        open: false,
        openDialog() {
            this.open = true;
        },
        closeDialog() {
            this.open = false;
        }
    }"
    x-modelable="open"
    {{ $attributes }}
>
    {{ $slot }}
</div>
