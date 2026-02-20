<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badge Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Badge Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Badge Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Badge Components</x-myui::card.title>
                <x-myui::card.description>
                    Small status indicators and labels with various styles and interactive states.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

            <!-- Variants -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Variants</h3>
                <div class="flex flex-wrap gap-4">
                    <x-myui::badge>Default</x-myui::badge>
                    <x-myui::badge variant="secondary">Secondary</x-myui::badge>
                    <x-myui::badge variant="destructive">Destructive</x-myui::badge>
                    <x-myui::badge variant="outline">Outline</x-myui::badge>
                    <x-myui::badge variant="ghost">Ghost</x-myui::badge>
                    <x-myui::badge variant="link">Link</x-myui::badge>
                </div>
            </div>

            <!-- With Icon -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">With Icon</h3>
                <div class="flex flex-wrap gap-4">
                    <x-myui::badge>
                        <x-myui::icons.check data-icon="inline-start" class="w-3 h-3" />
                        Verified
                    </x-myui::badge>
                    <x-myui::badge variant="secondary">
                        <x-myui::icons.bookmark data-icon="inline-start" class="w-3 h-3" />
                        Bookmarked
                    </x-myui::badge>
                    <x-myui::badge variant="outline">
                        Premium
                        <x-myui::icons.star data-icon="inline-end" class="w-3 h-3" />
                    </x-myui::badge>
                </div>
            </div>

            <!-- With Spinner -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">With Spinner</h3>
                <div class="flex flex-wrap gap-4">
                    <x-myui::badge variant="destructive">
                        <x-myui::icons.loading data-icon="inline-start" class="w-3 h-3 animate-spin" />
                        Deleting
                    </x-myui::badge>
                    <x-myui::badge variant="secondary">
                        <x-myui::icons.loading data-icon="inline-start" class="w-3 h-3 animate-spin" />
                        Generating
                    </x-myui::badge>
                </div>
            </div>

            <!-- Link -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Link (asChild)</h3>
                <div class="flex flex-wrap gap-4">
                    <x-myui::badge asChild>
                        <a href="/profile">
                            <x-myui::icons.external-link data-icon="inline-end" class="w-3 h-3" />
                            Open Link
                        </a>
                    </x-myui::badge>
                    <x-myui::badge variant="outline" asChild>
                        <a href="/docs">Documentation</a>
                    </x-myui::badge>
                </div>
            </div>
            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>