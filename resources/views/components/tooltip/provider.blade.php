{{--
    Tooltip Provider Component
    Wraps your app to provide global tooltip settings.
    All tooltips inside this provider share delay timing state.
    Documentation: docs/components/tooltip.md
--}}
@props([
    'delayDuration' => 250,
    'skipDelayDuration' => 300,
    'disableHoverableContent' => false,
])

<div
    x-data="{
        delayDuration: {{ $delayDuration }},
        skipDelayDuration: {{ $skipDelayDuration }},
        disableHoverableContent: {{ $disableHoverableContent ? 'true' : 'false' }},
        wasOpenRecently: false,
        skipDelayTimeout: null,
        markRecentlyOpen() {
            this.wasOpenRecently = true;
            if (this.skipDelayTimeout) {
                clearTimeout(this.skipDelayTimeout);
            }
            this.skipDelayTimeout = setTimeout(() => {
                this.wasOpenRecently = false;
            }, this.skipDelayDuration);
        },
        getDelayForNextOpen() {
            return this.wasOpenRecently ? 0 : this.delayDuration;
        }
    }"
    class="contents"
>{{ $slot }}</div>
