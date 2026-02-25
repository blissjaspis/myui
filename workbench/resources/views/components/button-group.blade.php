<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Group Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Button Group Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Button Group Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Button Group Components</x-myui::card.title>
                <x-myui::card.description>
                    A container that groups related buttons together with consistent styling.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

            <!-- Basic Button Group -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Basic Button Group</h3>
                <p class="text-sm text-gray-500 mb-3">Group multiple buttons together.</p>
                <div class="bg-white p-4 rounded-md border">
                    <x-myui::button-group>
                        <x-myui::button>Button 1</x-myui::button>
                        <x-myui::button>Button 2</x-myui::button>
                        <x-myui::button>Button 3</x-myui::button>
                    </x-myui::button-group>
                </div>
            </div>

            <!-- Button Group with Variants -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Button Group Variants</h3>
                <div class="space-y-3">
                    <!-- Default -->
                    <div class="bg-white p-4 rounded-md border">
                        <p class="text-xs text-gray-400 mb-2">Default</p>
                        <x-myui::button-group variant="default">
                            <x-myui::button variant="outline">Left</x-myui::button>
                            <x-myui::button variant="outline">Center</x-myui::button>
                            <x-myui::button variant="outline">Right</x-myui::button>
                        </x-myui::button-group>
                    </div>
                    <!-- Outline -->
                    <div class="bg-white p-4 rounded-md border">
                        <p class="text-xs text-gray-400 mb-2">Outline (with built-in borders)</p>
                        <x-myui::button-group variant="outline">
                            <x-myui::button variant="outline">Left</x-myui::button>
                            <x-myui::button variant="outline">Center</x-myui::button>
                            <x-myui::button variant="outline">Right</x-myui::button>
                        </x-myui::button-group>
                    </div>
                    <!-- Ghost -->
                    <div class="bg-white p-4 rounded-md border">
                        <p class="text-xs text-gray-400 mb-2">Ghost (spaced)</p>
                        <x-myui::button-group variant="ghost">
                            <x-myui::button variant="ghost">Left</x-myui::button>
                            <x-myui::button variant="ghost">Center</x-myui::button>
                            <x-myui::button variant="ghost">Right</x-myui::button>
                        </x-myui::button-group>
                    </div>
                </div>
            </div>

            <!-- Vertical Orientation -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Vertical Orientation</h3>
                <p class="text-sm text-gray-500 mb-3">Stack buttons vertically.</p>
                <div class="bg-white p-4 rounded-md border">
                    <x-myui::button-group orientation="vertical">
                        <x-myui::button variant="outline">Top</x-myui::button>
                        <x-myui::button variant="outline">Middle</x-myui::button>
                        <x-myui::button variant="outline">Bottom</x-myui::button>
                    </x-myui::button-group>
                </div>
            </div>

            <!-- With Separator -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">With Separator</h3>
                <p class="text-sm text-gray-500 mb-3">Visually divide buttons within a group.</p>
                <div class="bg-white p-4 rounded-md border">
                    <x-myui::button-group variant="ghost">
                        <x-myui::button variant="ghost">Save</x-myui::button>
                        <x-myui::button-group.separator />
                        <x-myui::button variant="ghost">Cancel</x-myui::button>
                        <x-myui::button-group.separator />
                        <x-myui::button variant="ghost" class="text-destructive">Delete</x-myui::button>
                    </x-myui::button-group>
                </div>
            </div>

            <!-- Split Button -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Split Button</h3>
                <p class="text-sm text-gray-500 mb-3">Create a split button group for actions.</p>
                <div class="bg-white p-4 rounded-md border">
                    <x-myui::button-group>
                        <x-myui::button>Main Action</x-myui::button>
                        <x-myui::button-group.separator />
                        <x-myui::button size="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                        </x-myui::button>
                    </x-myui::button-group>
                </div>
            </div>

            <!-- With Text -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">With Text Label</h3>
                <p class="text-sm text-gray-500 mb-3">Add text labels within the button group.</p>
                <div class="bg-white p-4 rounded-md border">
                    <x-myui::button-group>
                        <x-myui::button-group.text>View:</x-myui::button-group.text>
                        <x-myui::button variant="outline" size="sm">Grid</x-myui::button>
                        <x-myui::button variant="outline" size="sm">List</x-myui::button>
                        <x-myui::button variant="outline" size="sm">Map</x-myui::button>
                    </x-myui::button-group>
                </div>
            </div>

            <!-- Size Variations -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Size Variations</h3>
                <p class="text-sm text-gray-500 mb-3">Control button sizes individually.</p>
                <div class="space-y-3">
                    <div class="bg-white p-4 rounded-md border">
                        <p class="text-xs text-gray-400 mb-2">Small</p>
                        <x-myui::button-group>
                            <x-myui::button size="sm" variant="outline">Small 1</x-myui::button>
                            <x-myui::button size="sm" variant="outline">Small 2</x-myui::button>
                        </x-myui::button-group>
                    </div>
                    <div class="bg-white p-4 rounded-md border">
                        <p class="text-xs text-gray-400 mb-2">Default</p>
                        <x-myui::button-group>
                            <x-myui::button variant="outline">Default 1</x-myui::button>
                            <x-myui::button variant="outline">Default 2</x-myui::button>
                        </x-myui::button-group>
                    </div>
                    <div class="bg-white p-4 rounded-md border">
                        <p class="text-xs text-gray-400 mb-2">Large</p>
                        <x-myui::button-group>
                            <x-myui::button size="lg" variant="outline">Large 1</x-myui::button>
                            <x-myui::button size="lg" variant="outline">Large 2</x-myui::button>
                        </x-myui::button-group>
                    </div>
                </div>
            </div>

            <!-- With Icons -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">With Icons</h3>
                <p class="text-sm text-gray-500 mb-3">Combine buttons with icons.</p>
                <div class="bg-white p-4 rounded-md border">
                    <x-myui::button-group>
                        <x-myui::button size="icon" variant="outline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 17h2l-5 5v-5H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-2"/></svg>
                        </x-myui::button>
                        <x-myui::button size="icon" variant="outline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/><path d="M9 18h6"/><path d="M10 22h4"/></svg>
                        </x-myui::button>
                        <x-myui::button size="icon" variant="outline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.09a2 2 0 0 1-1-1.74v-.47a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.39a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
                        </x-myui::button>
                    </x-myui::button-group>
                </div>
            </div>

            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
