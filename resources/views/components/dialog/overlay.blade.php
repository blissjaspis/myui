{{--
    Dialog Overlay Component
    The backdrop that appears behind the dialog content.
    Documentation: docs/components/dialog.md
--}}
<div
    x-show="open"
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    @click="closeDialog()"
    {{ $attributes->merge([
        'class' => 'fixed inset-0 z-50 bg-black/80 backdrop-blur-sm data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0',
        'data-state' => 'open',
    ]) }}
    aria-hidden="true"
>
</div>
