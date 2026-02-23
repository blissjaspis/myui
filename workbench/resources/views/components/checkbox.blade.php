<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Checkbox Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Checkbox Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Checkbox Components</x-myui::card.title>
                <x-myui::card.description>
                    shadcn/ui style checkbox components built with Laravel Blade and Alpine.js.
                    Based on <a href="https://ui.shadcn.com/docs/components/checkbox" class="text-blue-600 hover:underline" target="_blank">shadcn/ui Checkbox</a>.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

                <!-- Single Checkbox Component -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Single Checkbox Component</h3>
                    <p class="text-sm text-muted-foreground mb-4">A complete checkbox with label and description in one component. File: <code>resources/views/components/checkbox.blade.php</code></p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md space-y-4">
                        <x-myui::checkbox
                            id="terms"
                            name="accept_terms"
                            label="Accept terms and conditions"
                            description="By clicking this checkbox, you agree to our terms."
                        />

                        <x-myui::checkbox
                            id="newsletter"
                            name="subscribe"
                            label="Subscribe to newsletter"
                            description="Get the latest updates delivered to your inbox."
                            :checked="true"
                        />
                    </div>
                </div>

                <!-- Composable Checkbox -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Composable Checkbox</h3>
                    <p class="text-sm text-muted-foreground mb-4">Build your own checkbox layout using individual components from <code>resources/views/components/checkbox/</code></p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md space-y-4">
                        <x-myui::checkbox id="enable-notif">
                            <x-myui::checkbox.button id="enable-notif-btn" />
                            <x-myui::checkbox.label for="enable-notif-btn">
                                Enable notifications
                            </x-myui::checkbox.label>
                        </x-myui::checkbox>

                        <x-myui::checkbox id="dark-mode" :checked="true">
                            <x-myui::checkbox.button id="dark-mode-btn" />
                            <div class="grid gap-1.5 leading-none">
                                <x-myui::checkbox.label for="dark-mode-btn">
                                    Dark mode
                                </x-myui::checkbox.label>
                                <p class="text-sm text-muted-foreground">Switch between light and dark themes.</p>
                            </div>
                        </x-myui::checkbox>
                    </div>
                </div>

                <!-- Disabled State -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Disabled Checkbox</h3>
                    <p class="text-sm text-muted-foreground mb-4">Checkboxes can be disabled to prevent interaction.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md space-y-4">
                        <x-myui::checkbox
                            id="disabled-unchecked"
                            name="disabled_unchecked"
                            label="Disabled unchecked"
                            :disabled="true"
                        />

                        <x-myui::checkbox
                            id="disabled-checked"
                            name="disabled_checked"
                            label="Disabled checked"
                            :checked="true"
                            :disabled="true"
                        />
                    </div>
                </div>

                <!-- Checkbox Group -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Checkbox Group</h3>
                    <p class="text-sm text-muted-foreground mb-4">Multiple checkboxes grouped together.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <p class="text-sm font-medium mb-3">Select your interests:</p>
                        <div class="space-y-3">
                            <x-myui::checkbox
                                id="tech"
                                name="interests[]"
                                value="technology"
                                label="Technology"
                            />
                            <x-myui::checkbox
                                id="sports"
                                name="interests[]"
                                value="sports"
                                label="Sports"
                            />
                            <x-myui::checkbox
                                id="music"
                                name="interests[]"
                                value="music"
                                label="Music"
                            />
                            <x-myui::checkbox
                                id="travel"
                                name="interests[]"
                                value="travel"
                                label="Travel"
                            />
                        </div>
                    </div>
                </div>

                <!-- With Custom Content -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Custom Content (Composable)</h3>
                    <p class="text-sm text-muted-foreground mb-4">Checkboxes with custom or rich content using composable components.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md space-y-4">
                        <x-myui::checkbox id="custom-1">
                            <x-myui::checkbox.button id="custom-1-btn" />
                            <div class="grid gap-1.5 leading-none">
                                <label for="custom-1-btn" class="text-sm font-medium cursor-pointer">
                                    <span class="font-bold text-indigo-600">Pro</span> features
                                </label>
                                <p class="text-sm text-muted-foreground">Unlock advanced features with Pro plan.</p>
                            </div>
                        </x-myui::checkbox>

                        <x-myui::checkbox id="custom-2">
                            <x-myui::checkbox.button id="custom-2-btn" />
                            <div class="grid gap-1.5 leading-none">
                                <label for="custom-2-btn" class="text-sm font-medium cursor-pointer">
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">New</span>
                                    Beta access
                                </label>
                                <p class="text-sm text-muted-foreground">Try out new experimental features.</p>
                            </div>
                        </x-myui::checkbox>
                    </div>
                </div>

            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
