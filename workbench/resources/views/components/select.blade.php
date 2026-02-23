<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Select Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Select Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Select Components</x-myui::card.title>
                <x-myui::card.description>
                    shadcn/ui style select components built with Alpine.js and Blade components.
                    Based on <a href="https://ui.shadcn.com/docs/components/radix/select" class="text-blue-600 hover:underline" target="_blank">shadcn/ui Select</a>.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

                <!-- Basic Select -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Basic Select</h3>
                    <p class="text-sm text-muted-foreground mb-4">Simple select with trigger, value, and items.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::select name="theme">
                            <x-myui::select.trigger>
                                <x-myui::select.value placeholder="Select a theme" />
                            </x-myui::select.trigger>
                            <x-myui::select.content>
                                <x-myui::select.item value="light">Light</x-myui::select.item>
                                <x-myui::select.item value="dark">Dark</x-myui::select.item>
                                <x-myui::select.item value="system">System</x-myui::select.item>
                            </x-myui::select.content>
                        </x-myui::select>
                    </div>
                </div>

                <!-- Select with Groups -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Select with Groups</h3>
                    <p class="text-sm text-muted-foreground mb-4">Organize items with labels and separators.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::select name="fruit">
                            <x-myui::select.trigger>
                                <x-myui::select.value placeholder="Select a fruit" />
                            </x-myui::select.trigger>
                            <x-myui::select.content>
                                <x-myui::select.group>
                                    <x-myui::select.label>Citrus</x-myui::select.label>
                                    <x-myui::select.item value="orange">Orange</x-myui::select.item>
                                    <x-myui::select.item value="lemon">Lemon</x-myui::select.item>
                                    <x-myui::select.item value="lime">Lime</x-myui::select.item>
                                </x-myui::select.group>
                                <x-myui::select.separator />
                                <x-myui::select.group>
                                    <x-myui::select.label>Berries</x-myui::select.label>
                                    <x-myui::select.item value="strawberry">Strawberry</x-myui::select.item>
                                    <x-myui::select.item value="blueberry">Blueberry</x-myui::select.item>
                                    <x-myui::select.item value="raspberry">Raspberry</x-myui::select.item>
                                </x-myui::select.group>
                            </x-myui::select.content>
                        </x-myui::select>
                    </div>
                </div>

                <!-- Select with Disabled Items -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Select with Disabled Items</h3>
                    <p class="text-sm text-muted-foreground mb-4">Some items can be disabled and unselectable.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::select name="plan">
                            <x-myui::select.trigger>
                                <x-myui::select.value placeholder="Select a plan" />
                            </x-myui::select.trigger>
                            <x-myui::select.content>
                                <x-myui::select.item value="free">Free</x-myui::select.item>
                                <x-myui::select.item value="pro">Pro</x-myui::select.item>
                                <x-myui::select.item value="enterprise" disabled>Enterprise (Contact Sales)</x-myui::select.item>
                            </x-myui::select.content>
                        </x-myui::select>
                    </div>
                </div>

                <!-- Select with Position Popper -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Select with Position Popper</h3>
                    <p class="text-sm text-muted-foreground mb-4">Using position="popper" for different alignment.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::select name="timezone">
                            <x-myui::select.trigger>
                                <x-myui::select.value placeholder="Select timezone" />
                            </x-myui::select.trigger>
                            <x-myui::select.content position="popper" side="bottom" align="start">
                                <x-myui::select.item value="est">Eastern Time (EST)</x-myui::select.item>
                                <x-myui::select.item value="cst">Central Time (CST)</x-myui::select.item>
                                <x-myui::select.item value="mst">Mountain Time (MST)</x-myui::select.item>
                                <x-myui::select.item value="pst">Pacific Time (PST)</x-myui::select.item>
                                <x-myui::select.item value="utc">Coordinated Universal Time (UTC)</x-myui::select.item>
                            </x-myui::select.content>
                        </x-myui::select>
                    </div>
                </div>

                <!-- Multiple Selects in Form -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Multiple Selects in Form</h3>
                    <p class="text-sm text-muted-foreground mb-4">Multiple selects side by side with different sizes.</p>
                    <div class="bg-white dark:bg-gray-900 p-6 rounded-md border">
                        <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <x-myui::select name="category">
                                <x-myui::select.trigger size="sm">
                                    <x-myui::select.value placeholder="Category (small)" />
                                </x-myui::select.trigger>
                                <x-myui::select.content>
                                    <x-myui::select.item value="electronics">Electronics</x-myui::select.item>
                                    <x-myui::select.item value="clothing">Clothing</x-myui::select.item>
                                    <x-myui::select.item value="books">Books</x-myui::select.item>
                                    <x-myui::select.item value="home">Home & Garden</x-myui::select.item>
                                </x-myui::select.content>
                            </x-myui::select>

                            <x-myui::select name="priority">
                                <x-myui::select.trigger size="default">
                                    <x-myui::select.value placeholder="Priority (default)" />
                                </x-myui::select.trigger>
                                <x-myui::select.content>
                                    <x-myui::select.item value="low">Low</x-myui::select.item>
                                    <x-myui::select.item value="medium">Medium</x-myui::select.item>
                                    <x-myui::select.item value="high">High</x-myui::select.item>
                                    <x-myui::select.item value="urgent">Urgent</x-myui::select.item>
                                </x-myui::select.content>
                            </x-myui::select>
                        </form>
                    </div>
                </div>

            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
