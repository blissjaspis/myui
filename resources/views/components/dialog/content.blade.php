{{--
    Dialog Content Component
    Contains the dialog content, header, and footer.
    Uses x-teleport to portal to the body.
    Documentation: docs/components/dialog.md
--}}
@props([
    'teleport' => 'body',
    'size' => 'default', // 'sm' | 'default' | 'lg' | 'xl' | 'full'
])

@php
$sizeClasses = match ($size) {
    'sm' => 'max-w-sm',
    'lg' => 'max-w-lg',
    'xl' => 'max-w-xl',
    '2xl' => 'max-w-2xl',
    'full' => 'max-w-full',
    default => 'max-w-lg',
};

$defaultClasses = 'fixed left-[50%] top-[50%] z-50 grid w-full ' . $sizeClasses . ' translate-x-[-50%] translate-y-[-50%] gap-4 border bg-background dark:bg-gray-800 dark:border-gray-700 p-6 shadow-lg duration-200 sm:rounded-lg data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[state=closed]:slide-out-to-left-1/2 data-[state=closed]:slide-out-to-top-[48%] data-[state=open]:slide-in-from-left-1/2 data-[state=open]:slide-in-from-top-[48%]';
@endphp

<template x-teleport="{{ $teleport }}">
    <div x-show="open">
        {{-- Overlay --}}
        <div
            x-show="open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click="closeDialog()"
            class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm"
            aria-hidden="true"
        ></div>

        {{-- Dialog Container --}}
        <div
            x-show="open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            @keydown.escape.window="closeDialog()"
            x-trap.inert.noscroll="open"
            {{ $attributes->merge([
                'class' => $defaultClasses,
                'role' => 'alertdialog',
                'data-state' => 'open',
            ]) }}
        >
            {{-- Close Button - Positioned in the padding area, subtle --}}
            <button
                type="button"
                @click="closeDialog()"
                class="absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none p-1 -mr-2 -mt-2"
            >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
                <span class="sr-only">Close</span>
            </button>

            {{-- Dialog Content --}}
            <div x-trap="open">
                {{ $slot }}
            </div>
        </div>
    </div>
</template>
