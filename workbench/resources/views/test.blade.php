<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myui Components Test</title>
    @vite(['workbench/resources/css/app.css'])
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <h1 class="text-3xl font-bold text-center mb-8">Myui Components Test</h1>

        <!-- Navigation -->
        <x-myui::card class="mb-8">
            <x-myui::card.header>
                <x-myui::card.title>Component Pages</x-myui::card.title>
                <x-myui::card.description>
                    Click the buttons below to view each component individually.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <x-myui::button variant="outline" asChild>
                        <a href="/button">Button Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/alert">Alert Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/badge">Badge Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/card">Card Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/input">Input Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/breadcrumb">Breadcrumb Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/select">Select Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/checkbox">Checkbox Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/switch">Switch Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/popover">Popover Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/dialog">Dialog Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/sheet">Sheet Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/tabs">Tabs Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/sonner">Sonner Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/accordion">Accordion Components</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/tooltip">Tooltip Components</a>
                    </x-myui::button>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- Icons -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Icons</x-myui::card.title>
                <x-myui::card.description>
                    Available icon components for use throughout the UI.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="flex flex-wrap gap-4 items-center">
                    <div class="flex items-center gap-2">
                        <x-myui::icons.loading class="w-6 h-6 animate-spin" />
                        <span>Loading</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-myui::icons.check class="w-6 h-6 text-green-500" />
                        <span>Check</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-myui::icons.x class="w-6 h-6 text-red-500" />
                        <span>Close</span>
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- Package Info -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Package Information</x-myui::card.title>
                <x-myui::card.description>
                    Current package details and configuration.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="space-y-2">
                    <p><strong>Version:</strong> {{ \BlissJaspis\Myui\Facades\Myui::version() }}</p>
                    <p><strong>Framework:</strong> {{ \BlissJaspis\Myui\Facades\Myui::framework() }}</p>
                    <p><strong>Prefix:</strong> {{ \BlissJaspis\Myui\Facades\Myui::prefix() }}</p>
                </div>
            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
