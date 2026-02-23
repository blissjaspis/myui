<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Switch Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Switch Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Switch Components</x-myui::card.title>
                <x-myui::card.description>
                    shadcn/ui style switch/toggle components built with Laravel Blade and Alpine.js.
                    Based on <a href="https://ui.shadcn.com/docs/components/switch" class="text-blue-600 hover:underline" target="_blank">shadcn/ui Switch</a>.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

                <!-- Single Switch Component -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Single Switch Component</h3>
                    <p class="text-sm text-muted-foreground mb-4">A complete switch with label and description in one component.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md space-y-4">
                        <x-myui::switch
                            id="airplane"
                            name="airplane_mode"
                            label="Airplane Mode"
                        />

                        <x-myui::switch
                            id="wifi"
                            name="wifi_enabled"
                            label="Wi-Fi"
                            description="Connect to available networks"
                            :checked="true"
                        />
                    </div>
                </div>

                <!-- Composable Switch -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Composable Switch</h3>
                    <p class="text-sm text-muted-foreground mb-4">Build your own switch layout using individual components.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md space-y-4">
                        <x-myui::switch id="bluetooth">
                            <x-myui::switch.button id="bluetooth-btn" />
                            <x-myui::switch.label for="bluetooth-btn">
                                Bluetooth
                            </x-myui::switch.label>
                        </x-myui::switch>

                        <x-myui::switch id="notifications" :checked="true">
                            <x-myui::switch.button id="notifications-btn" />
                            <div class="grid gap-1.5 leading-none">
                                <x-myui::switch.label for="notifications-btn">
                                    Push Notifications
                                </x-myui::switch.label>
                                <p class="text-sm text-muted-foreground">Receive notifications about updates.</p>
                            </div>
                        </x-myui::switch>
                    </div>
                </div>

                <!-- Size Variants -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Size Variants</h3>
                    <p class="text-sm text-muted-foreground mb-4">Available in small and default sizes.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md space-y-4">
                        <x-myui::switch
                            id="small"
                            name="small_switch"
                            label="Small Switch"
                            size="sm"
                        />

                        <x-myui::switch
                            id="default"
                            name="default_switch"
                            label="Default Switch"
                            size="default"
                            :checked="true"
                        />
                    </div>
                </div>

                <!-- Disabled State -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Disabled Switch</h3>
                    <p class="text-sm text-muted-foreground mb-4">Switches can be disabled to prevent interaction.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md space-y-4">
                        <x-myui::switch
                            id="disabled-unchecked"
                            name="disabled_unchecked"
                            label="Disabled unchecked"
                            :disabled="true"
                        />

                        <x-myui::switch
                            id="disabled-checked"
                            name="disabled_checked"
                            label="Disabled checked"
                            :checked="true"
                            :disabled="true"
                        />
                    </div>
                </div>

                <!-- Invalid State -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Invalid State</h3>
                    <p class="text-sm text-muted-foreground mb-4">Display error state with red styling and error message.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md space-y-4">
                        <x-myui::switch
                            id="invalid-unchecked"
                            name="invalid_unchecked"
                            label="Invalid unchecked"
                            error="You must enable this setting to continue."
                            :invalid="true"
                        />

                        <x-myui::switch
                            id="invalid-checked"
                            name="invalid_checked"
                            label="Invalid checked"
                            error="This setting has an error."
                            :checked="true"
                            :invalid="true"
                        />
                    </div>
                </div>

                <!-- Choice Card Style -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Choice Card Style</h3>
                    <p class="text-sm text-muted-foreground mb-4">Card-style selection pattern.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md space-y-3">
                        <label class="flex items-center justify-between rounded-lg border p-4 cursor-pointer hover:bg-muted/50 transition-colors">
                            <div class="space-y-0.5">
                                <div class="text-sm font-medium">Focus Mode</div>
                                <div class="text-sm text-muted-foreground">Focus is shared across devices</div>
                            </div>
                            <x-myui::switch id="focus-mode" :checked="true" />
                        </label>

                        <label class="flex items-center justify-between rounded-lg border p-4 cursor-pointer hover:bg-muted/50 transition-colors">
                            <div class="space-y-0.5">
                                <div class="text-sm font-medium">Do Not Disturb</div>
                                <div class="text-sm text-muted-foreground">Silence all notifications</div>
                            </div>
                            <x-myui::switch id="dnd" />
                        </label>
                    </div>
                </div>

            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
