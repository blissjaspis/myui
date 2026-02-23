<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheet Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
    <!-- Alpine.js Plugins (must be loaded before Alpine.js core) -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine.js Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto space-y-8 p-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Sheet Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Sheet Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Sheet Components</x-myui::card.title>
                <x-myui::card.description>
                    shadcn/ui style sheet (drawer) components built with Laravel Blade and Alpine.js.
                    Based on <a href="https://ui.shadcn.com/docs/components/radix/sheet" class="text-blue-600 hover:underline" target="_blank">shadcn/ui Sheet</a>.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

                <!-- Basic Sheet -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Basic Sheet</h3>
                    <p class="text-sm text-muted-foreground mb-4">A simple sheet sliding in from the right (default).</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::sheet>
                            <x-myui::sheet.trigger asChild>
                                <x-myui::button variant="outline">Open Sheet</x-myui::button>
                            </x-myui::sheet.trigger>

                            <x-myui::sheet.content>
                                <x-myui::sheet.header>
                                    <x-myui::sheet.title>Sheet Title</x-myui::sheet.title>
                                    <x-myui::sheet.description>
                                        This sheet slides in from the right side of the screen.
                                    </x-myui::sheet.description>
                                </x-myui::sheet.header>
                                <div class="py-4">
                                    <p class="text-sm text-muted-foreground">
                                        Your content goes here. Sheets are great for side panels, navigation menus, or forms that don't need the full modal treatment.
                                    </p>
                                </div>
                                <x-myui::sheet.footer>
                                    <x-myui::button variant="outline" @click="closeSheet()">Cancel</x-myui::button>
                                    <x-myui::button>Save Changes</x-myui::button>
                                </x-myui::sheet.footer>
                            </x-myui::sheet.content>
                        </x-myui::sheet>
                    </div>
                </div>

                <!-- Side Variants -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Side Variants</h3>
                    <p class="text-sm text-muted-foreground mb-4">Sheets can slide in from different sides.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border flex flex-wrap gap-4">
                        <x-myui::sheet>
                            <x-myui::sheet.trigger asChild>
                                <x-myui::button variant="outline">From Left</x-myui::button>
                            </x-myui::sheet.trigger>
                            <x-myui::sheet.content side="left">
                                <x-myui::sheet.header>
                                    <x-myui::sheet.title>Left Sheet</x-myui::sheet.title>
                                    <x-myui::sheet.description>
                                        This sheet slides in from the left side.
                                    </x-myui::sheet.description>
                                </x-myui::sheet.header>
                                <div class="py-4">
                                    <p class="text-sm text-muted-foreground">
                                        Great for navigation menus!
                                    </p>
                                </div>
                            </x-myui::sheet.content>
                        </x-myui::sheet>

                        <x-myui::sheet>
                            <x-myui::sheet.trigger asChild>
                                <x-myui::button variant="outline">From Right</x-myui::button>
                            </x-myui::sheet.trigger>
                            <x-myui::sheet.content side="right">
                                <x-myui::sheet.header>
                                    <x-myui::sheet.title>Right Sheet</x-myui::sheet.title>
                                    <x-myui::sheet.description>
                                        This sheet slides in from the right side.
                                    </x-myui::sheet.description>
                                </x-myui::sheet.header>
                                <div class="py-4">
                                    <p class="text-sm text-muted-foreground">
                                        Default behavior, great for detail panels.
                                    </p>
                                </div>
                            </x-myui::sheet.content>
                        </x-myui::sheet>

                        <x-myui::sheet>
                            <x-myui::sheet.trigger asChild>
                                <x-myui::button variant="outline">From Top</x-myui::button>
                            </x-myui::sheet.trigger>
                            <x-myui::sheet.content side="top">
                                <x-myui::sheet.header>
                                    <x-myui::sheet.title>Top Sheet</x-myui::sheet.title>
                                    <x-myui::sheet.description>
                                        This sheet slides in from the top.
                                    </x-myui::sheet.description>
                                </x-myui::sheet.header>
                                <div class="py-4">
                                    <p class="text-sm text-muted-foreground">
                                        Good for alerts or notifications.
                                    </p>
                                </div>
                            </x-myui::sheet.content>
                        </x-myui::sheet>

                        <x-myui::sheet>
                            <x-myui::sheet.trigger asChild>
                                <x-myui::button variant="outline">From Bottom</x-myui::button>
                            </x-myui::sheet.trigger>
                            <x-myui::sheet.content side="bottom">
                                <x-myui::sheet.header>
                                    <x-myui::sheet.title>Bottom Sheet</x-myui::sheet.title>
                                    <x-myui::sheet.description>
                                        This sheet slides in from the bottom.
                                    </x-myui::sheet.description>
                                </x-myui::sheet.header>
                                <div class="py-4">
                                    <p class="text-sm text-muted-foreground">
                                        Great for mobile-style action sheets.
                                    </p>
                                </div>
                            </x-myui::sheet.content>
                        </x-myui::sheet>
                    </div>
                </div>

                <!-- Size Variants -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Size Variants</h3>
                    <p class="text-sm text-muted-foreground mb-4">Sheets can have different sizes.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border flex flex-wrap gap-4">
                        <x-myui::sheet>
                            <x-myui::sheet.trigger asChild>
                                <x-myui::button variant="outline">Small</x-myui::button>
                            </x-myui::sheet.trigger>
                            <x-myui::sheet.content size="sm">
                                <x-myui::sheet.header>
                                    <x-myui::sheet.title>Small Sheet</x-myui::sheet.title>
                                    <x-myui::sheet.description>
                                        max-w-xs (320px) on larger screens.
                                    </x-myui::sheet.description>
                                </x-myui::sheet.header>
                                <div class="py-4">
                                    <p class="text-sm text-muted-foreground">
                                        Compact size for simple content.
                                    </p>
                                </div>
                            </x-myui::sheet.content>
                        </x-myui::sheet>

                        <x-myui::sheet>
                            <x-myui::sheet.trigger asChild>
                                <x-myui::button variant="outline">Default</x-myui::button>
                            </x-myui::sheet.trigger>
                            <x-myui::sheet.content size="default">
                                <x-myui::sheet.header>
                                    <x-myui::sheet.title>Default Sheet</x-myui::sheet.title>
                                    <x-myui::sheet.description>
                                        max-w-sm (384px) on larger screens.
                                    </x-myui::sheet.description>
                                </x-myui::sheet.header>
                                <div class="py-4">
                                    <p class="text-sm text-muted-foreground">
                                        Standard size for most use cases.
                                    </p>
                                </div>
                            </x-myui::sheet.content>
                        </x-myui::sheet>

                        <x-myui::sheet>
                            <x-myui::sheet.trigger asChild>
                                <x-myui::button variant="outline">Large</x-myui::button>
                            </x-myui::sheet.trigger>
                            <x-myui::sheet.content size="lg">
                                <x-myui::sheet.header>
                                    <x-myui::sheet.title>Large Sheet</x-myui::sheet.title>
                                    <x-myui::sheet.description>
                                        max-w-lg (512px) on larger screens.
                                    </x-myui::sheet.description>
                                </x-myui::sheet.header>
                                <div class="py-4">
                                    <p class="text-sm text-muted-foreground">
                                        More space for complex content.
                                    </p>
                                </div>
                            </x-myui::sheet.content>
                        </x-myui::sheet>
                    </div>
                </div>

                <!-- Navigation Sheet -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Navigation Sheet</h3>
                    <p class="text-sm text-muted-foreground mb-4">A sheet commonly used for navigation menus.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::sheet>
                            <x-myui::sheet.trigger asChild>
                                <x-myui::button variant="ghost" size="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                        <line x1="4" x2="20" y1="12" y2="12"/>
                                        <line x1="4" x2="20" y1="6" y2="6"/>
                                        <line x1="4" x2="20" y1="18" y2="18"/>
                                    </svg>
                                    <span class="sr-only">Toggle Menu</span>
                                </x-myui::button>
                            </x-myui::sheet.trigger>

                            <x-myui::sheet.content side="left">
                                <x-myui::sheet.header>
                                    <x-myui::sheet.title>Navigation</x-myui::sheet.title>
                                </x-myui::sheet.header>
                                <nav class="flex flex-col gap-4 mt-8">
                                    <a href="#" class="text-sm font-medium hover:underline">Home</a>
                                    <a href="#" class="text-sm font-medium hover:underline">About</a>
                                    <a href="#" class="text-sm font-medium hover:underline">Services</a>
                                    <a href="#" class="text-sm font-medium hover:underline">Contact</a>
                                </nav>
                            </x-myui::sheet.content>
                        </x-myui::sheet>
                    </div>
                </div>

                <!-- With Form -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">With Form</h3>
                    <p class="text-sm text-muted-foreground mb-4">A sheet containing a complete form.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::sheet>
                            <x-myui::sheet.trigger asChild>
                                <x-myui::button variant="outline">Edit Settings</x-myui::button>
                            </x-myui::sheet.trigger>

                            <x-myui::sheet.content>
                                <x-myui::sheet.header>
                                    <x-myui::sheet.title>Edit Settings</x-myui::sheet.title>
                                    <x-myui::sheet.description>
                                        Make changes to your settings here. Click save when you're done.
                                    </x-myui::sheet.description>
                                </x-myui::sheet.header>
                                <div class="grid gap-4 py-4">
                                    <div class="grid gap-2">
                                        <label class="text-sm font-medium">Username</label>
                                        <x-myui::input placeholder="@username" />
                                    </div>
                                    <div class="grid gap-2">
                                        <label class="text-sm font-medium">Email</label>
                                        <x-myui::input type="email" placeholder="email@example.com" />
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <x-myui::checkbox id="notifications" />
                                        <label for="notifications" class="text-sm font-medium">Enable notifications</label>
                                    </div>
                                </div>
                                <x-myui::sheet.footer>
                                    <x-myui::button variant="outline" @click="closeSheet()">Cancel</x-myui::button>
                                    <x-myui::button>Save Changes</x-myui::button>
                                </x-myui::sheet.footer>
                            </x-myui::sheet.content>
                        </x-myui::sheet>
                    </div>
                </div>

            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
