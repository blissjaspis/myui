{{--
    Dropdown Sub Menu Component
    Container for nested dropdown menus
--}}
@props([])

<div
    x-data="{
        subOpen: false,
        openTimer: null,
        closeTimer: null,
        openSub() {
            clearTimeout(this.closeTimer);
            this.openTimer = setTimeout(() => { this.subOpen = true; }, 40);
        },
        closeSub() {
            clearTimeout(this.openTimer);
            this.closeTimer = setTimeout(() => { this.subOpen = false; }, 120);
        }
    }"
    x-on:mouseenter="openSub()"
    x-on:mouseleave="closeSub()"
    class="relative"
    {{ $attributes }}
>
    {{ $slot }}
</div>
