<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Menu Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
    <!-- Alpine.js Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 p-5">
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Dropdown Menu Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Dropdown Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Dropdown Menu</x-myui::card.title>
                <x-myui::card.description>
                    Displays a menu to the user — such as a set of actions or functions — triggered by a button.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

            <!-- Basic Dropdown -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Basic Dropdown</h3>
                <p class="text-sm text-gray-500 mb-3">A simple dropdown with labels and items.</p>
                <div class="bg-white p-4 rounded-md border flex items-center justify-center">
                    <x-myui::dropdown>
                        <x-myui::dropdown.trigger variant="outline">Open</x-myui::dropdown.trigger>
                        <x-myui::dropdown.content class="w-56">
                            <x-myui::dropdown.label>My Account</x-myui::dropdown.label>
                            <x-myui::dropdown.separator />
                            <x-myui::dropdown.group>
                                <x-myui::dropdown.item>Profile</x-myui::dropdown.item>
                                <x-myui::dropdown.item>Billing</x-myui::dropdown.item>
                                <x-myui::dropdown.item>Settings</x-myui::dropdown.item>
                            </x-myui::dropdown.group>
                            <x-myui::dropdown.separator />
                            <x-myui::dropdown.group>
                                <x-myui::dropdown.item variant="destructive">Log out</x-myui::dropdown.item>
                            </x-myui::dropdown.group>
                        </x-myui::dropdown.content>
                    </x-myui::dropdown>
                </div>
            </div>

            <!-- With Icons -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">With Icons</h3>
                <p class="text-sm text-gray-500 mb-3">Combine icons with labels for quick scanning.</p>
                <div class="bg-white p-4 rounded-md border flex items-center justify-center">
                    <x-myui::dropdown>
                        <x-myui::dropdown.trigger variant="outline">Actions</x-myui::dropdown.trigger>
                        <x-myui::dropdown.content class="w-56">
                            <x-myui::dropdown.group>
                                <x-myui::dropdown.item>
                                    <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-7"/><path d="M14 2v6h6"/><path d="M10 20.5 13 14l3 6.5"/><path d="m15 17.5-3-3.5 3-3.5"/></svg>
                                    <span>Back</span>
                                    <x-myui::dropdown.shortcut>⌘[</x-myui::dropdown.shortcut>
                                </x-myui::dropdown.item>
                                <x-myui::dropdown.item>
                                    <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 14 6-6-6-6"/><path d="M4 20V4a2 2 0 0 1 2-2h8.5L20 7.5"/><path d="M14 2v6h6"/></svg>
                                    <span>Forward</span>
                                    <x-myui::dropdown.shortcut>⌘]</x-myui::dropdown.shortcut>
                                </x-myui::dropdown.item>
                                <x-myui::dropdown.item disabled>
                                    <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/><path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16"/><path d="M16 21h5v-5"/></svg>
                                    <span>Reload</span>
                                    <x-myui::dropdown.shortcut>⌘R</x-myui::dropdown.shortcut>
                                </x-myui::dropdown.item>
                            </x-myui::dropdown.group>
                        </x-myui::dropdown.content>
                    </x-myui::dropdown>
                </div>
            </div>

            <!-- With Checkboxes -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">With Checkboxes</h3>
                <p class="text-sm text-gray-500 mb-3">Use checkbox items for toggles.</p>
                <div class="bg-white p-4 rounded-md border flex items-center justify-center">
                    <x-myui::dropdown>
                        <x-myui::dropdown.trigger variant="outline">Notifications</x-myui::dropdown.trigger>
                        <x-myui::dropdown.content class="w-56">
                            <x-myui::dropdown.label>Notifications</x-myui::dropdown.label>
                            <x-myui::dropdown.group>
                                <x-myui::dropdown.checkbox-item checked>
                                    Show Notifications
                                </x-myui::dropdown.checkbox-item>
                                <x-myui::dropdown.checkbox-item>
                                    Play Sounds
                                </x-myui::dropdown.checkbox-item>
                                <x-myui::dropdown.checkbox-item>
                                    Desktop Alerts
                                </x-myui::dropdown.checkbox-item>
                            </x-myui::dropdown.group>
                        </x-myui::dropdown.content>
                    </x-myui::dropdown>
                </div>
            </div>

            <!-- With Radio Group -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">With Radio Group</h3>
                <p class="text-sm text-gray-500 mb-3">Use radio items for exclusive choices.</p>
                <div class="bg-white p-4 rounded-md border flex items-center justify-center">
                    <x-myui::dropdown>
                        <x-myui::dropdown.trigger variant="outline">Panel Position</x-myui::dropdown.trigger>
                        <x-myui::dropdown.content class="w-56">
                            <x-myui::dropdown.label>Panel Position</x-myui::dropdown.label>
                            <x-myui::dropdown.radio-group value="top">
                                <x-myui::dropdown.group>
                                    <x-myui::dropdown.radio-item value="top">Top</x-myui::dropdown.radio-item>
                                    <x-myui::dropdown.radio-item value="bottom">Bottom</x-myui::dropdown.radio-item>
                                    <x-myui::dropdown.radio-item value="right">Right</x-myui::dropdown.radio-item>
                                </x-myui::dropdown.group>
                            </x-myui::dropdown.radio-group>
                        </x-myui::dropdown.content>
                    </x-myui::dropdown>
                </div>
            </div>

            <!-- With Submenu -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">With Submenu</h3>
                <p class="text-sm text-gray-500 mb-3">Nest secondary actions in a submenu.</p>
                <div class="bg-white p-4 rounded-md border flex items-center justify-center">
                    <x-myui::dropdown>
                        <x-myui::dropdown.trigger variant="outline">More Actions</x-myui::dropdown.trigger>
                        <x-myui::dropdown.content class="w-56">
                            <x-myui::dropdown.group>
                                <x-myui::dropdown.item>Save</x-myui::dropdown.item>
                                <x-myui::dropdown.item variant="destructive">Delete</x-myui::dropdown.item>
                            </x-myui::dropdown.group>
                            <x-myui::dropdown.separator />
                            <x-myui::dropdown.sub>
                                <x-myui::dropdown.sub-trigger>More Options</x-myui::dropdown.sub-trigger>
                                <x-myui::dropdown.sub-content class="w-48">
                                    <x-myui::dropdown.group>
                                        <x-myui::dropdown.item>Import</x-myui::dropdown.item>
                                        <x-myui::dropdown.item>Export</x-myui::dropdown.item>
                                        <x-myui::dropdown.item>Print</x-myui::dropdown.item>
                                    </x-myui::dropdown.group>
                                </x-myui::dropdown.sub-content>
                            </x-myui::dropdown.sub>
                        </x-myui::dropdown.content>
                    </x-myui::dropdown>
                </div>
            </div>

            <!-- Alignment Options -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Alignment Options</h3>
                <p class="text-sm text-gray-500 mb-3">Dropdown content can align to different sides.</p>
                <div class="bg-white p-4 rounded-md border flex items-center justify-between gap-4">
                    <x-myui::dropdown>
                        <x-myui::dropdown.trigger variant="outline">Left Aligned</x-myui::dropdown.trigger>
                        <x-myui::dropdown.content align="left" class="w-40">
                            <x-myui::dropdown.item>Item 1</x-myui::dropdown.item>
                            <x-myui::dropdown.item>Item 2</x-myui::dropdown.item>
                        </x-myui::dropdown.content>
                    </x-myui::dropdown>

                    <x-myui::dropdown>
                        <x-myui::dropdown.trigger variant="outline">Right Aligned</x-myui::dropdown.trigger>
                        <x-myui::dropdown.content align="right" class="w-40">
                            <x-myui::dropdown.item>Item 1</x-myui::dropdown.item>
                            <x-myui::dropdown.item>Item 2</x-myui::dropdown.item>
                        </x-myui::dropdown.content>
                    </x-myui::dropdown>
                </div>
            </div>

            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
