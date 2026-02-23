<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popover Components - Myui</title>
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
            <h1 class="text-3xl font-bold mb-2">Popover Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Popover Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Popover Components</x-myui::card.title>
                <x-myui::card.description>
                    shadcn/ui style popover components built with Laravel Blade and Alpine.js.
                    Based on <a href="https://ui.shadcn.com/docs/components/radix/popover" class="text-blue-600 hover:underline" target="_blank">shadcn/ui Popover</a>.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

                <!-- Basic Popover -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Basic Popover</h3>
                    <p class="text-sm text-muted-foreground mb-4">A simple popover with a header, title, and description.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::popover>
                            <x-myui::popover.trigger>
                                Open Popover
                            </x-myui::popover.trigger>

                            <x-myui::popover.content>
                                <x-myui::popover.header>
                                    <x-myui::popover.title>Dimensions</x-myui::popover.title>
                                    <x-myui::popover.description>
                                        Set the dimensions for the layer.
                                    </x-myui::popover.description>
                                </x-myui::popover.header>
                                <div class="grid gap-2 mt-4">
                                    <div class="grid grid-cols-3 items-center gap-4">
                                        <label class="text-sm">Width</label>
                                        <x-myui::form.input type="text" value="100%" class="col-span-2 h-8" />
                                    </div>
                                    <div class="grid grid-cols-3 items-center gap-4">
                                        <label class="text-sm">Height</label>
                                        <x-myui::form.input type="text" value="100%" class="col-span-2 h-8" />
                                    </div>
                                </div>
                            </x-myui::popover.content>
                        </x-myui::popover>
                    </div>
                </div>

                <!-- Align Variants -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Align Variants</h3>
                    <p class="text-sm text-muted-foreground mb-4">Use the align prop on PopoverContent to control the horizontal alignment.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border flex flex-wrap gap-4">
                        <x-myui::popover>
                            <x-myui::popover.trigger asChild>
                                <x-myui::button variant="outline">Align Start</x-myui::button>
                            </x-myui::popover.trigger>

                            <x-myui::popover.content align="start">
                                <x-myui::popover.header>
                                    <x-myui::popover.title>Align Start</x-myui::popover.title>
                                    <x-myui::popover.description>
                                        This popover is aligned to the start of the trigger.
                                    </x-myui::popover.description>
                                </x-myui::popover.header>
                            </x-myui::popover.content>
                        </x-myui::popover>

                        <x-myui::popover>
                            <x-myui::popover.trigger asChild>
                                <x-myui::button variant="outline">Align Center</x-myui::button>
                            </x-myui::popover.trigger>

                            <x-myui::popover.content align="center">
                                <x-myui::popover.header>
                                    <x-myui::popover.title>Align Center</x-myui::popover.title>
                                    <x-myui::popover.description>
                                        This popover is centered to the trigger.
                                    </x-myui::popover.description>
                                </x-myui::popover.header>
                            </x-myui::popover.content>
                        </x-myui::popover>

                        <x-myui::popover>
                            <x-myui::popover.trigger asChild>
                                <x-myui::button variant="outline">Align End</x-myui::button>
                            </x-myui::popover.trigger>

                            <x-myui::popover.content align="end">
                                <x-myui::popover.header>
                                    <x-myui::popover.title>Align End</x-myui::popover.title>
                                    <x-myui::popover.description>
                                        This popover is aligned to the end of the trigger.
                                    </x-myui::popover.description>
                                </x-myui::popover.header>
                            </x-myui::popover.content>
                        </x-myui::popover>
                    </div>
                </div>

                <!-- Side Variants -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Side Variants</h3>
                    <p class="text-sm text-muted-foreground mb-4">Use the side prop on PopoverContent to control which side of the trigger the popover appears on.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border flex flex-wrap gap-4">
                        <x-myui::popover>
                            <x-myui::popover.trigger asChild>
                                <x-myui::button variant="outline">Top</x-myui::button>
                            </x-myui::popover.trigger>

                            <x-myui::popover.content side="top">
                                <x-myui::popover.header>
                                    <x-myui::popover.title>Top Side</x-myui::popover.title>
                                    <x-myui::popover.description>
                                        This popover appears above the trigger.
                                    </x-myui::popover.description>
                                </x-myui::popover.header>
                            </x-myui::popover.content>
                        </x-myui::popover>

                        <x-myui::popover>
                            <x-myui::popover.trigger asChild>
                                <x-myui::button variant="outline">Right</x-myui::button>
                            </x-myui::popover.trigger>

                            <x-myui::popover.content side="right">
                                <x-myui::popover.header>
                                    <x-myui::popover.title>Right Side</x-myui::popover.title>
                                    <x-myui::popover.description>
                                        This popover appears to the right of the trigger.
                                    </x-myui::popover.description>
                                </x-myui::popover.header>
                            </x-myui::popover.content>
                        </x-myui::popover>

                        <x-myui::popover>
                            <x-myui::popover.trigger asChild>
                                <x-myui::button variant="outline">Bottom</x-myui::button>
                            </x-myui::popover.trigger>

                            <x-myui::popover.content side="bottom">
                                <x-myui::popover.header>
                                    <x-myui::popover.title>Bottom Side</x-myui::popover.title>
                                    <x-myui::popover.description>
                                        This popover appears below the trigger.
                                    </x-myui::popover.description>
                                </x-myui::popover.header>
                            </x-myui::popover.content>
                        </x-myui::popover>

                        <x-myui::popover>
                            <x-myui::popover.trigger asChild>
                                <x-myui::button variant="outline">Left</x-myui::button>
                            </x-myui::popover.trigger>

                            <x-myui::popover.content side="left">
                                <x-myui::popover.header>
                                    <x-myui::popover.title>Left Side</x-myui::popover.title>
                                    <x-myui::popover.description>
                                        This popover appears to the left of the trigger.
                                    </x-myui::popover.description>
                                </x-myui::popover.header>
                            </x-myui::popover.content>
                        </x-myui::popover>
                    </div>
                </div>

                <!-- With Form -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">With Form</h3>
                    <p class="text-sm text-muted-foreground mb-4">A popover with form fields inside.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::popover>
                            <x-myui::popover.trigger asChild>
                                <x-myui::button variant="outline">Open Form</x-myui::button>
                            </x-myui::popover.trigger>

                            <x-myui::popover.content class="w-80">
                                <div class="grid gap-4">
                                    <div class="space-y-2">
                                        <h4 class="font-medium leading-none">Update Profile</h4>
                                        <p class="text-sm text-muted-foreground">
                                            Make changes to your profile here.
                                        </p>
                                    </div>
                                    <div class="grid gap-2">
                                        <div class="grid grid-cols-4 items-center gap-4">
                                            <label class="text-right text-sm">Name</label>
                                            <x-myui::form.input class="col-span-3 h-8" value="John Doe" />
                                        </div>
                                        <div class="grid grid-cols-4 items-center gap-4">
                                            <label class="text-right text-sm">Email</label>
                                            <x-myui::form.input class="col-span-3 h-8" value="john@example.com" />
                                        </div>
                                    </div>
                                    <x-myui::button size="sm" class="w-full">Save Changes</x-myui::button>
                                </div>
                            </x-myui::popover.content>
                        </x-myui::popover>
                    </div>
                </div>

                <!-- Custom Content -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Custom Content</h3>
                    <p class="text-sm text-muted-foreground mb-4">Popovers can contain any content, not just forms.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::popover>
                            <x-myui::popover.trigger asChild>
                                <x-myui::button variant="outline">Open Menu</x-myui::button>
                            </x-myui::popover.trigger>

                            <x-myui::popover.content class="w-56">
                                <div class="grid gap-1">
                                    <button class="flex items-center gap-2 px-2 py-1.5 text-sm hover:bg-accent hover:text-accent-foreground rounded-sm text-left transition-colors">
                                        <span>📋</span> Copy Link
                                    </button>
                                    <button class="flex items-center gap-2 px-2 py-1.5 text-sm hover:bg-accent hover:text-accent-foreground rounded-sm text-left transition-colors">
                                        <span>✏️</span> Edit
                                    </button>
                                    <button class="flex items-center gap-2 px-2 py-1.5 text-sm hover:bg-accent hover:text-accent-foreground rounded-sm text-left transition-colors">
                                        <span>🗑️</span> Delete
                                    </button>
                                    <div class="h-px bg-border my-1"></div>
                                    <button class="flex items-center gap-2 px-2 py-1.5 text-sm hover:bg-accent hover:text-accent-foreground rounded-sm text-left transition-colors">
                                        <span>⚙️</span> Settings
                                    </button>
                                </div>
                            </x-myui::popover.content>
                        </x-myui::popover>
                    </div>
                </div>

            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
