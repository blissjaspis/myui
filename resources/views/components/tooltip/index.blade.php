{{--
    Tooltip Component
    A popup that displays information related to an element when the element
    receives keyboard focus or the mouse hovers over it.
    Documentation: docs/components/tooltip.md
--}}
@props([
    'delayDuration' => 250,
    'skipDelayDuration' => 300,
    'disableHoverableContent' => false,
    'open' => false,
])

<div
    x-data="{
        open: {{ $open ? 'true' : 'false' }},
        timeout: null,
        skipDelayTimeout: null,
        wasOpenRecently: false,
        show() {
            // Clear any pending hide timeout
            if (this.timeout) {
                clearTimeout(this.timeout);
                this.timeout = null;
            }

            // If was recently open, show immediately (skip delay)
            const delay = this.wasOpenRecently ? 0 : {{ $delayDuration }};

            this.timeout = setTimeout(() => {
                this.open = true;
                this.wasOpenRecently = true;
            }, delay);
        },
        hide() {
            if (this.timeout) {
                clearTimeout(this.timeout);
                this.timeout = null;
            }

            this.timeout = setTimeout(() => {
                this.open = false;

                // Set up the skip delay window
                if (this.skipDelayTimeout) {
                    clearTimeout(this.skipDelayTimeout);
                }
                this.skipDelayTimeout = setTimeout(() => {
                    this.wasOpenRecently = false;
                }, {{ $skipDelayDuration }});
            }, 50);
        },
        toggle() {
            this.open = !this.open;
        }
    }"
    x-modelable="open"
    class="relative inline-block"
    @mouseenter="show()"
    @mouseleave="hide()"
>{{ $slot }}</div>
