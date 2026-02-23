{{--
    Dialog Component (Single File)
    A window overlaid on either the primary window or another dialog window,
    rendering the content underneath inert.
    Documentation: docs/components/dialog.md
--}}
@props([
    'open' => false,
])

@php
$hasSlotContent = trim($slot) !== '';
@endphp

<div
    x-data="{
        open: {{ $open ? 'true' : 'false' }},
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
    @if($hasSlotContent)
        {{-- Composable pattern: render slot content only --}}
        {{ $slot }}
    @else
        {{-- Single component pattern requires trigger and content slots --}}
        <p class="text-sm text-muted-foreground">Dialog component requires slot content. Use composable pattern with trigger and content sub-components.</p>
    @endif
</div>
