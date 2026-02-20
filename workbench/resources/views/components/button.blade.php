<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Button Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Button Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Button Components</x-myui::card.title>
                <x-myui::card.description>
                    Interactive button components with various styles, sizes, and states.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

            <!-- Variants -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Variants</h3>
                <div class="flex flex-wrap gap-4">
                    <x-myui::button variant="default">Default</x-myui::button>
                    <x-myui::button variant="destructive">Destructive</x-myui::button>
                    <x-myui::button variant="outline">Outline</x-myui::button>
                    <x-myui::button variant="secondary">Secondary</x-myui::button>
                    <x-myui::button variant="ghost">Ghost</x-myui::button>
                    <x-myui::button variant="link">Link</x-myui::button>
                </div>
            </div>

            <!-- Sizes -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Sizes</h3>
                <div class="flex flex-wrap gap-4 items-center">
                    <x-myui::button size="xs">XS</x-myui::button>
                    <x-myui::button size="sm">SM</x-myui::button>
                    <x-myui::button size="default">Default</x-myui::button>
                    <x-myui::button size="lg">LG</x-myui::button>
                </div>
            </div>

            <!-- Icon Buttons -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Icon Buttons</h3>
                <div class="flex flex-wrap gap-4 items-center">
                    <x-myui::button size="icon-xs">
                        <x-myui::icons.check class="w-3 h-3" />
                    </x-myui::button>
                    <x-myui::button size="icon-sm">
                        <x-myui::icons.check class="w-4 h-4" />
                    </x-myui::button>
                    <x-myui::button size="icon">
                        <x-myui::icons.check class="w-4 h-4" />
                    </x-myui::button>
                    <x-myui::button size="icon-lg">
                        <x-myui::icons.check class="w-5 h-5" />
                    </x-myui::button>
                </div>
            </div>

            <!-- Buttons with Icons -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Buttons with Icons</h3>
                <div class="flex flex-wrap gap-4">
                    <x-myui::button>
                        <x-myui::icons.check data-icon="inline-start" class="w-4 h-4" />
                        Save
                    </x-myui::button>
                    <x-myui::button variant="outline">
                        <x-myui::icons.loading data-icon="inline-start" class="w-4 h-4 animate-spin" />
                        Loading
                    </x-myui::button>
                    <x-myui::button variant="secondary">
                        Next
                        <x-myui::icons.x data-icon="inline-end" class="w-4 h-4" />
                    </x-myui::button>
                    <x-myui::button variant="ghost" size="sm">
                        <x-myui::icons.check data-icon="inline-start" class="w-4 h-4" />
                        Done
                    </x-myui::button>
                </div>
            </div>

            <!-- Link Buttons -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Link Buttons (asChild)</h3>
                <div class="flex flex-wrap gap-4">
                    <x-myui::button asChild>
                        <a href="/login">Login</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/register">Register</a>
                    </x-myui::button>
                    <x-myui::button variant="link" asChild>
                        <a href="/docs">Documentation</a>
                    </x-myui::button>
                </div>
            </div>
            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>