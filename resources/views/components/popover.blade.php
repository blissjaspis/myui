{{--
    Popover Component (Single File)
    Displays rich content in a portal, triggered by a button.
    Documentation: docs/components/popover.md
--}}
@props([
    'align' => 'center',
    'side' => 'bottom',
    'sideOffset' => 4,
    'open' => false,
])

@php
$hasSlotContent = trim($slot) !== '';
@endphp

<div
    x-data="{
        open: {{ $open ? 'true' : 'false' }},
        toggle() {
            this.open = !this.open;
        },
        close() {
            this.open = false;
        }
    }"
    x-modelable="open"
    class="relative inline-block"
    {{ $attributes }}
>
    @if($hasSlotContent)
        {{-- Composable pattern: render slot content only --}}
        {{ $slot }}
    @else
        {{-- Single component pattern requires trigger and content slots --}}
        <p class="text-sm text-muted-foreground">Popover component requires slot content. Use composable pattern with trigger and content sub-components.</p>
    @endif
</div>
