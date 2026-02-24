{{--
    Sonner Component (Toaster)
    Based on shadcn/ui Sonner design
    Documentation: docs/components/sonner.md

    Usage: Add this once to your layout, then use $store.toast
--}}
@props([
    'position' => 'bottom-right', // 'top-left' | 'top-center' | 'top-right' | 'bottom-left' | 'bottom-center' | 'bottom-right'
    'richColors' => false,
    'expand' => false,
    'duration' => 4000,
    'visibleToasts' => 3,
    'closeButton' => true,
    'progressBarDelay' => 0, // Delay in ms before showing progress bar (0 = immediate, Infinity = hide)
])

@php
$positionClasses = match ($position) {
    'top-left' => 'top-0 left-0',
    'top-center' => 'top-0 left-1/2 -translate-x-1/2',
    'top-right' => 'top-0 right-0',
    'bottom-left' => 'bottom-0 left-0',
    'bottom-center' => 'bottom-0 left-1/2 -translate-x-1/2',
    'bottom-right' => 'bottom-0 right-0',
    default => 'bottom-0 right-0',
};
@endphp

@once
<script>
    (function() {
        function createToastStore() {
            Alpine.store('toast', {
            toasts: [],
            idCounter: 0,

            show(message, options = {}) {
                return this.addToast(message, null, options);
            },

            success(message, options = {}) {
                return this.addToast(message, 'success', options);
            },

            error(message, options = {}) {
                return this.addToast(message, 'error', options);
            },

            warning(message, options = {}) {
                return this.addToast(message, 'warning', options);
            },

            info(message, options = {}) {
                return this.addToast(message, 'info', options);
            },

            promise(promise, messages = {}) {
                const { loading, success, error } = messages;
                const loadingToast = this.addToast(loading || 'Loading...', 'info', { duration: Infinity });

                return promise
                    .then((result) => {
                        this.updateToast(loadingToast.id, success || 'Success', 'success');
                        return result;
                    })
                    .catch((err) => {
                        this.updateToast(loadingToast.id, error || 'Error', 'error');
                        // Don't re-throw - error is already handled by toast
                    });
            },

            addToast(message, type = null, options = {}) {
                const id = ++this.idCounter;
                const toastDuration = options.duration !== undefined ? options.duration : {{ $duration }};
                const visibleToasts = options.visibleToasts !== undefined ? options.visibleToasts : {{ $visibleToasts }};
                const toastCloseButton = options.closeButton !== undefined ? options.closeButton : {{ $closeButton ? 'true' : 'false' }};
                const toastProgressBarDelay = options.progressBarDelay !== undefined ? options.progressBarDelay : {{ $progressBarDelay }};

                const toast = {
                    id,
                    message,
                    type,
                    title: options.title,
                    description: options.description,
                    action: options.action,
                    duration: toastDuration,
                    closeButton: toastCloseButton,
                    progressBarDelay: toastProgressBarDelay,
                    visible: true,
                    progress: 100,
                    showProgress: false,
                };

                this.toasts.push(toast);

                // Limit visible toasts
                if (this.toasts.length > visibleToasts) {
                    const oldest = this.toasts[0];
                    this.dismiss(oldest.id);
                }

                // Auto dismiss
                if (toastDuration > 0 && toastDuration !== Infinity) {
                    // Show progress bar after delay
                    if (toastProgressBarDelay < Infinity) {
                        setTimeout(() => {
                            const t = this.toasts.find(t => t.id === id);
                            if (t) t.showProgress = true;
                        }, toastProgressBarDelay);
                    }

                    // Animate progress
                    setTimeout(() => {
                        const t = this.toasts.find(t => t.id === id);
                        if (t) t.progress = 0;
                    }, 50);

                    setTimeout(() => {
                        this.dismiss(id);
                    }, toastDuration);
                }

                return toast;
            },

            updateToast(id, message, type) {
                const toast = this.toasts.find(t => t.id === id);
                if (toast) {
                    toast.message = message;
                    toast.type = type;
                    toast.duration = {{ $duration }};
                    toast.progress = 100;
                    toast.showProgress = toast.progressBarDelay < Infinity;

                    if (toast.showProgress) {
                        setTimeout(() => {
                            toast.showProgress = true;
                        }, toast.progressBarDelay);
                    }

                    setTimeout(() => {
                        toast.progress = 0;
                    }, 50);

                    setTimeout(() => {
                        this.dismiss(id);
                    }, {{ $duration }});
                }
            },

            dismiss(id) {
                const toast = this.toasts.find(t => t.id === id);
                if (toast) {
                    toast.visible = false;
                    setTimeout(() => {
                        this.toasts = this.toasts.filter(t => t.id !== id);
                    }, 200);
                }
            },
        });
        }

        // If Alpine is already loaded, create store immediately
        if (window.Alpine && Alpine.store) {
            createToastStore();
        } else {
            // Otherwise wait for alpine:init
            document.addEventListener('alpine:init', createToastStore);
        }
    })();
</script>
@endonce

@php
$isRight = in_array($position, ['top-right', 'bottom-right']);
$isLeft = in_array($position, ['top-left', 'bottom-left']);
$isCenter = in_array($position, ['top-center', 'bottom-center']);
$isTop = in_array($position, ['top-left', 'top-center', 'top-right']);

// Determine transform directions based on position
$enterX = $isRight ? 'translate-x-[120%]' : ($isLeft ? '-translate-x-[120%]' : 'translate-x-0');
$enterY = $isCenter ? ($isTop ? '-translate-y-[200%]' : 'translate-y-[200%]') : 'translate-y-0';
$leaveX = $isRight ? 'translate-x-[120%]' : ($isLeft ? '-translate-x-[120%]' : 'translate-x-0');
$leaveY = $isCenter ? ($isTop ? '-translate-y-4' : 'translate-y-4') : ($isTop ? '-translate-y-4' : 'translate-y-4');
@endphp

<div
    x-data="{
        get toasts() { return $store.toast.toasts; },
        position: '{{ $position }}'
    }"
    class="fixed z-[100] flex flex-col p-4 {{ $positionClasses }} {{ $expand ? 'w-full sm:max-w-[420px]' : '' }}"
    :class="{ 'items-end': ['top-right', 'bottom-right'].includes(position), 'items-start': ['top-left', 'bottom-left'].includes(position), 'items-center': ['top-center', 'bottom-center'].includes(position) }"
>
    <template x-for="(toast, index) in toasts" :key="toast.id">
        <div
            x-show="toast.visible"
            x-transition:enter="transform ease-[cubic-bezier(0.34,1.56,0.64,1)] duration-400"
            x-transition:enter-start="opacity-0 {{ $enterX }} {{ $enterY }} scale-90"
            x-transition:enter-end="opacity-100 translate-x-0 translate-y-0 scale-100"
            x-transition:leave="transform ease-[cubic-bezier(0.4,0,0.2,1)] duration-300"
            x-transition:leave-start="opacity-100 translate-x-0 translate-y-0 scale-100"
            x-transition:leave-end="opacity-0 {{ $leaveX }} {{ $leaveY }} scale-95"
            :style="`transition-delay: ${index * 60}ms`"
            @click="toast.action && toast.action.onClick && (toast.action.onClick(), $store.toast.dismiss(toast.id))"
            class="pointer-events-auto w-full max-w-[380px] rounded-lg border bg-background shadow-lg mb-3 overflow-hidden"
            :class="{
                'border-l-4 border-l-green-500': toast.type === 'success',
                'border-l-4 border-l-red-500': toast.type === 'error',
                'border-l-4 border-l-amber-500': toast.type === 'warning',
                'border-l-4 border-l-blue-500': toast.type === 'info',
                'cursor-pointer': toast.action,
            }"
        >
            <div class="flex items-start gap-3 p-4">
                {{-- Icon --}}
                <div x-show="toast.type" class="shrink-0">
                    {{-- Success Icon --}}
                    <svg x-show="toast.type === 'success'" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                    {{-- Error Icon --}}
                    <svg x-show="toast.type === 'error'" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-500">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="m15 9-6 6"/>
                        <path d="m9 9 6 6"/>
                    </svg>
                    {{-- Warning Icon --}}
                    <svg x-show="toast.type === 'warning'" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-amber-500">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="12" x2="12" y1="8" y2="12"/>
                        <line x1="12" x2="12.01" y1="16" y2="16"/>
                    </svg>
                    {{-- Info Icon --}}
                    <svg x-show="toast.type === 'info'" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="12" x2="12" y1="16" y2="12"/>
                        <line x1="12" x2="12.01" y1="8" y2="8"/>
                    </svg>
                </div>

                {{-- Content --}}
                <div class="flex-1 min-w-0">
                    <p x-show="toast.title" x-text="toast.title" class="text-sm font-semibold"></p>
                    <p x-show="toast.description" x-text="toast.description" class="text-sm text-muted-foreground mt-1"></p>
                    <p x-show="!toast.title && toast.message" x-text="toast.message" class="text-sm"></p>
                    <span x-show="toast.action && toast.action.label" x-text="toast.action?.label" class="inline-block mt-2 text-sm font-medium text-primary hover:underline"></span>
                </div>

                {{-- Close Button --}}
                <button
                    type="button"
                    x-show="toast.closeButton !== false"
                    @click.stop="$store.toast.dismiss(toast.id)"
                    class="shrink-0 rounded-md p-1 text-muted-foreground hover:text-foreground transition-colors"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"/>
                        <path d="m6 6 12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Progress Bar --}}
            <div
                x-show="toast.showProgress && toast.duration > 0"
                class="h-1 bg-muted"
            >
                <div
                    class="h-full bg-foreground/20"
                    :style="`width: ${toast.progress}%; transition: width ${toast.duration}ms linear`"
                ></div>
            </div>
        </div>
    </template>
</div>
