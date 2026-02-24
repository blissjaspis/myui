{{--
    Sheet Content Component
    Contains the sheet content with sliding animation from different sides.
    Uses x-teleport to portal to the body.
    Documentation: docs/components/sheet.md
--}}
@props([
    'teleport' => 'body',
    'side' => 'right', // 'top' | 'right' | 'bottom' | 'left'
    'size' => 'default', // 'sm' | 'default' | 'lg' | 'xl' | 'full' | 'content'
])

@php
// Side and size specific classes
$sideClass = $side . '-0';

if (in_array($side, ['top', 'bottom'])) {
    // Top/Bottom sheets - height based, full width
    $sideClasses = match ($size) {
        'sm' => 'left-0 right-0 ' . $sideClass . ' w-full h-[30vh] ' . ($side === 'top' ? 'border-b' : 'border-t'),
        'lg' => 'left-0 right-0 ' . $sideClass . ' w-full h-[70vh] ' . ($side === 'top' ? 'border-b' : 'border-t'),
        'xl' => 'left-0 right-0 ' . $sideClass . ' w-full h-[85vh] ' . ($side === 'top' ? 'border-b' : 'border-t'),
        'full' => 'left-0 right-0 ' . $sideClass . ' w-full h-full ' . ($side === 'top' ? 'border-b' : 'border-t'),
        default => 'left-0 right-0 ' . $sideClass . ' w-full h-[50vh] ' . ($side === 'top' ? 'border-b' : 'border-t'),
    };
} else {
    // Left/Right sheets - width based, full height
    $sideClasses = match ($size) {
        'sm' => 'top-0 bottom-0 ' . $sideClass . ' h-full w-3/4 border-' . ($side === 'left' ? 'r' : 'l') . ' sm:max-w-xs',
        'lg' => 'top-0 bottom-0 ' . $sideClass . ' h-full w-3/4 border-' . ($side === 'left' ? 'r' : 'l') . ' sm:max-w-lg',
        'xl' => 'top-0 bottom-0 ' . $sideClass . ' h-full w-3/4 border-' . ($side === 'left' ? 'r' : 'l') . ' sm:max-w-xl',
        '2xl' => 'top-0 bottom-0 ' . $sideClass . ' h-full w-3/4 border-' . ($side === 'left' ? 'r' : 'l') . ' sm:max-w-2xl',
        'full' => 'top-0 bottom-0 ' . $sideClass . ' h-full w-full border-' . ($side === 'left' ? 'r' : 'l'),
        default => 'top-0 bottom-0 ' . $sideClass . ' h-full w-3/4 border-' . ($side === 'left' ? 'r' : 'l') . ' sm:max-w-sm',
    };
}

// Slide animation classes based on side
$enterTransform = match ($side) {
    'top' => '-translate-y-full',
    'bottom' => 'translate-y-full',
    'left' => '-translate-x-full',
    'right' => 'translate-x-full',
    default => 'translate-x-full',
};

$enterEndTransform = match ($side) {
    'top' => 'translate-y-0',
    'bottom' => 'translate-y-0',
    'left' => 'translate-x-0',
    'right' => 'translate-x-0',
    default => 'translate-x-0',
};

$leaveTransform = match ($side) {
    'top' => '-translate-y-full',
    'bottom' => 'translate-y-full',
    'left' => '-translate-x-full',
    'right' => 'translate-x-full',
    default => 'translate-x-full',
};

$defaultClasses = 'fixed z-50 bg-background dark:bg-gray-800 p-6 shadow-lg transition ease-in-out duration-300 ' . $sideClasses;
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
            @click="closeSheet()"
            class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm"
            aria-hidden="true"
        ></div>

        {{-- Sheet Container --}}
        <div
            x-show="open"
            x-transition:enter="transform transition ease-out duration-300"
            x-transition:enter-start="{{ $enterTransform }}"
            x-transition:enter-end="{{ $enterEndTransform }}"
            x-transition:leave="transform transition ease-in duration-200"
            x-transition:leave-start="{{ $enterEndTransform }}"
            x-transition:leave-end="{{ $leaveTransform }}"
            @keydown.escape.window="closeSheet()"
            x-trap.inert.noscroll="open"
            {{ $attributes->merge([
                'class' => $defaultClasses,
                'role' => 'dialog',
                'data-state' => 'open',
                'aria-modal' => 'true',
            ]) }}
        >
            {{-- Close Button - Positioned based on side --}}
            <button
                type="button"
                @click="closeSheet()"
                class="absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none p-1"
            >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
                <span class="sr-only">Close</span>
            </button>

            {{-- Sheet Content --}}
            <div x-trap="open" class="h-full flex flex-col">
                {{ $slot }}
            </div>
        </div>
    </div>
</template>
