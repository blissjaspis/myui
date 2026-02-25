<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tooltip Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
    <!-- Alpine.js Plugins (must be loaded before Alpine.js core) -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/anchor@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine.js Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Tooltip Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">&larr; Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Tooltip Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Tooltip Components</x-myui::card.title>
                <x-myui::card.description>
                    shadcn/ui style tooltip components built with Laravel Blade and Alpine.js.
                    Based on <a href="https://ui.shadcn.com/docs/components/tooltip" class="text-blue-600 hover:underline" target="_blank">shadcn/ui Tooltip</a>.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

                <!-- Basic Tooltip -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Basic Tooltip</h3>
                    <p class="text-sm text-muted-foreground mb-4">A simple tooltip that appears on hover.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md flex justify-center">
                        <x-myui::tooltip>
                            <x-myui::tooltip.trigger>
                                <x-myui::button variant="outline">Hover me</x-myui::button>
                            </x-myui::tooltip.trigger>
                            <x-myui::tooltip.content>
                                <p>Add to library</p>
                            </x-myui::tooltip.content>
                        </x-myui::tooltip>
                    </div>
                </div>

                <!-- Side Variants -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Side Variants</h3>
                    <p class="text-sm text-muted-foreground mb-4">Use the side prop to change the position of the tooltip.</p>
                    <div class="bg-white dark:bg-gray-900 p-8 rounded-md border flex flex-wrap justify-center items-center gap-8">
                        <x-myui::tooltip>
                            <x-myui::tooltip.trigger asChild>
                                <x-myui::button variant="outline">Top</x-myui::button>
                            </x-myui::tooltip.trigger>
                            <x-myui::tooltip.content side="top">
                                <p>This tooltip appears on top</p>
                            </x-myui::tooltip.content>
                        </x-myui::tooltip>

                        <x-myui::tooltip>
                            <x-myui::tooltip.trigger asChild>
                                <x-myui::button variant="outline">Right</x-myui::button>
                            </x-myui::tooltip.trigger>
                            <x-myui::tooltip.content side="right">
                                <p>This tooltip appears on the right</p>
                            </x-myui::tooltip.content>
                        </x-myui::tooltip>

                        <x-myui::tooltip>
                            <x-myui::tooltip.trigger asChild>
                                <x-myui::button variant="outline">Bottom</x-myui::button>
                            </x-myui::tooltip.trigger>
                            <x-myui::tooltip.content side="bottom">
                                <p>This tooltip appears on the bottom</p>
                            </x-myui::tooltip.content>
                        </x-myui::tooltip>

                        <x-myui::tooltip>
                            <x-myui::tooltip.trigger asChild>
                                <x-myui::button variant="outline">Left</x-myui::button>
                            </x-myui::tooltip.trigger>
                            <x-myui::tooltip.content side="left">
                                <p>This tooltip appears on the left</p>
                            </x-myui::tooltip.content>
                        </x-myui::tooltip>
                    </div>
                </div>

                <!-- Align Variants -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Align Variants</h3>
                    <p class="text-sm text-muted-foreground mb-4">Use the align prop to control the alignment of the tooltip relative to the trigger.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <div class="flex gap-4 mb-4">
                            <x-myui::tooltip>
                                <x-myui::tooltip.trigger asChild>
                                    <x-myui::button variant="outline" class="w-32">Align Start</x-myui::button>
                                </x-myui::tooltip.trigger>
                                <x-myui::tooltip.content align="start">
                                    <p>Aligned to start</p>
                                </x-myui::tooltip.content>
                            </x-myui::tooltip>
                        </div>
                        <div class="flex gap-4 mb-4 justify-center">
                            <x-myui::tooltip>
                                <x-myui::tooltip.trigger asChild>
                                    <x-myui::button variant="outline" class="w-32">Align Center</x-myui::button>
                                </x-myui::tooltip.trigger>
                                <x-myui::tooltip.content align="center">
                                    <p>Center aligned</p>
                                </x-myui::tooltip.content>
                            </x-myui::tooltip>
                        </div>
                        <div class="flex gap-4 justify-end">
                            <x-myui::tooltip>
                                <x-myui::tooltip.trigger asChild>
                                    <x-myui::button variant="outline" class="w-32">Align End</x-myui::button>
                                </x-myui::tooltip.trigger>
                                <x-myui::tooltip.content align="end">
                                    <p>Aligned to end</p>
                                </x-myui::tooltip.content>
                            </x-myui::tooltip>
                        </div>
                    </div>
                </div>

                <!-- With Icon -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">With Icon</h3>
                    <p class="text-sm text-muted-foreground mb-4">Tooltips work great with icon buttons and information icons.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md flex gap-4 items-center">
                        <x-myui::tooltip>
                            <x-myui::tooltip.trigger>
                                <x-myui::button variant="ghost" size="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                </x-myui::button>
                            </x-myui::tooltip.trigger>
                            <x-myui::tooltip.content side="bottom">
                                <p>Go to Home</p>
                            </x-myui::tooltip.content>
                        </x-myui::tooltip>

                        <x-myui::tooltip>
                            <x-myui::tooltip.trigger>
                                <x-myui::button variant="ghost" size="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.47a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
                                </x-myui::button>
                            </x-myui::tooltip.trigger>
                            <x-myui::tooltip.content side="bottom">
                                <p>Settings</p>
                            </x-myui::tooltip.content>
                        </x-myui::tooltip>

                        <x-myui::tooltip>
                            <x-myui::tooltip.trigger>
                                <x-myui::button variant="ghost" size="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                </x-myui::button>
                            </x-myui::tooltip.trigger>
                            <x-myui::tooltip.content side="bottom">
                                <p>Profile</p>
                            </x-myui::tooltip.content>
                        </x-myui::tooltip>

                        <div class="flex-1"></div>

                        <x-myui::tooltip>
                            <x-myui::tooltip.trigger>
                                <span class="text-muted-foreground">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                                </span>
                            </x-myui::tooltip.trigger>
                            <x-myui::tooltip.content side="right">
                                <p>More information about this feature</p>
                            </x-myui::tooltip.content>
                        </x-myui::tooltip>
                    </div>
                </div>

                <!-- With Custom Delay -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Custom Delay Duration</h3>
                    <p class="text-sm text-muted-foreground mb-4">Control the delay before the tooltip appears.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md flex gap-4">
                        <x-myui::tooltip delayDuration="0">
                            <x-myui::tooltip.trigger asChild>
                                <x-myui::button variant="outline">Instant (0ms)</x-myui::button>
                            </x-myui::tooltip.trigger>
                            <x-myui::tooltip.content>
                                <p>Appears instantly!</p>
                            </x-myui::tooltip.content>
                        </x-myui::tooltip>

                        <x-myui::tooltip delayDuration="1000">
                            <x-myui::tooltip.trigger asChild>
                                <x-myui::button variant="outline">Slow (1000ms)</x-myui::button>
                            </x-myui::tooltip.trigger>
                            <x-myui::tooltip.content>
                                <p>Takes a second to appear...</p>
                            </x-myui::tooltip.content>
                        </x-myui::tooltip>
                    </div>
                </div>

                <!-- Disabled Button -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Disabled Button</h3>
                    <p class="text-sm text-muted-foreground mb-4">Show a tooltip on a disabled button by wrapping it with the tooltip trigger.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::tooltip>
                            <x-myui::tooltip.trigger>
                                <x-myui::button variant="outline" disabled>Disabled Button</x-myui::button>
                            </x-myui::tooltip.trigger>
                            <x-myui::tooltip.content>
                                <p>This action is not available</p>
                            </x-myui::tooltip.content>
                        </x-myui::tooltip>
                    </div>
                </div>

                <!-- With Keyboard Shortcut -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">With Keyboard Shortcut</h3>
                    <p class="text-sm text-muted-foreground mb-4">Tooltips can display keyboard shortcuts for actions.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::tooltip>
                            <x-myui::tooltip.trigger asChild>
                                <x-myui::button variant="outline">Add to library</x-myui::button>
                            </x-myui::tooltip.trigger>
                            <x-myui::tooltip.content side="bottom">
                                <div class="flex items-center gap-2">
                                    <span>Add to library</span>
                                    <kbd class="pointer-events-none h-5 select-none items-center gap-1 rounded border bg-muted dark:bg-gray-700 px-1.5 font-mono text-[10px] font-medium text-muted-foreground opacity-100 flex">
                                        <span class="text-xs">Ctrl</span>+<span class="text-xs">D</span>
                                    </kbd>
                                </div>
                            </x-myui::tooltip.content>
                        </x-myui::tooltip>
                    </div>
                </div>

                <!-- Multiple Tooltips with Skip Delay -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Skip Delay Feature</h3>
                    <p class="text-sm text-muted-foreground mb-4">When moving between tooltips quickly, the delay is skipped for a smoother experience.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <p class="text-sm mb-4">Hover over these buttons in quick succession:</p>
                        <div class="flex gap-2">
                            <x-myui::tooltip>
                                <x-myui::tooltip.trigger asChild>
                                    <x-myui::button variant="outline" size="sm">Cut</x-myui::button>
                                </x-myui::tooltip.trigger>
                                <x-myui::tooltip.content>
                                    <p>Cut selection</p>
                                </x-myui::tooltip.content>
                            </x-myui::tooltip>

                            <x-myui::tooltip>
                                <x-myui::tooltip.trigger asChild>
                                    <x-myui::button variant="outline" size="sm">Copy</x-myui::button>
                                </x-myui::tooltip.trigger>
                                <x-myui::tooltip.content>
                                    <p>Copy selection</p>
                                </x-myui::tooltip.content>
                            </x-myui::tooltip>

                            <x-myui::tooltip>
                                <x-myui::tooltip.trigger asChild>
                                    <x-myui::button variant="outline" size="sm">Paste</x-myui::button>
                                </x-myui::tooltip.trigger>
                                <x-myui::tooltip.content>
                                    <p>Paste from clipboard</p>
                                </x-myui::tooltip.content>
                            </x-myui::tooltip>
                        </div>
                    </div>
                </div>

            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
