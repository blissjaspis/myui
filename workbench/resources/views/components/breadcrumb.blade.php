<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breadcrumb Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Breadcrumb Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Breadcrumb Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Breadcrumb Components</x-myui::card.title>
                <x-myui::card.description>
                    Navigation breadcrumbs that display the path to the current resource using a hierarchy of links.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

            <!-- Basic Breadcrumb -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Basic Breadcrumb</h3>
                <div class="bg-white p-4 rounded-md border">
                    <x-myui::breadcrumb>
                        <x-myui::breadcrumb.list>
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.link href="/">Home</x-myui::breadcrumb.link>
                            </x-myui::breadcrumb.item>
                            <x-myui::breadcrumb.separator />
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.page>Components</x-myui::breadcrumb.page>
                            </x-myui::breadcrumb.item>
                        </x-myui::breadcrumb.list>
                    </x-myui::breadcrumb>
                </div>
            </div>

            <!-- Multi-level Breadcrumb -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Multi-level Breadcrumb</h3>
                <div class="bg-white p-4 rounded-md border">
                    <x-myui::breadcrumb>
                        <x-myui::breadcrumb.list>
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.link href="/">Home</x-myui::breadcrumb.link>
                            </x-myui::breadcrumb.item>
                            <x-myui::breadcrumb.separator />
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.link href="/docs">Documentation</x-myui::breadcrumb.link>
                            </x-myui::breadcrumb.item>
                            <x-myui::breadcrumb.separator />
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.link href="/docs/components">Components</x-myui::breadcrumb.link>
                            </x-myui::breadcrumb.item>
                            <x-myui::breadcrumb.separator />
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.page>Breadcrumb</x-myui::breadcrumb.page>
                            </x-myui::breadcrumb.item>
                        </x-myui::breadcrumb.list>
                    </x-myui::breadcrumb>
                </div>
            </div>

            <!-- Custom Separator -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Custom Separator</h3>
                <div class="bg-white p-4 rounded-md border">
                    <x-myui::breadcrumb>
                        <x-myui::breadcrumb.list>
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.link href="/">Home</x-myui::breadcrumb.link>
                            </x-myui::breadcrumb.item>
                            <x-myui::breadcrumb.separator>
                                /
                            </x-myui::breadcrumb.separator>
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.page>Breadcrumb</x-myui::breadcrumb.page>
                            </x-myui::breadcrumb.item>
                        </x-myui::breadcrumb.list>
                    </x-myui::breadcrumb>
                </div>
            </div>

            <!-- Collapsed Breadcrumb -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Collapsed Breadcrumb</h3>
                <div class="bg-white p-4 rounded-md border">
                    <x-myui::breadcrumb>
                        <x-myui::breadcrumb.list>
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.link href="/">Home</x-myui::breadcrumb.link>
                            </x-myui::breadcrumb.item>
                            <x-myui::breadcrumb.separator />
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.ellipsis />
                            </x-myui::breadcrumb.item>
                            <x-myui::breadcrumb.separator />
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.link href="/docs/components">Components</x-myui::breadcrumb.link>
                            </x-myui::breadcrumb.item>
                            <x-myui::breadcrumb.separator />
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.page>Breadcrumb</x-myui::breadcrumb.page>
                            </x-myui::breadcrumb.item>
                        </x-myui::breadcrumb.list>
                    </x-myui::breadcrumb>
                </div>
            </div>

            <!-- Custom Classes -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Custom Classes</h3>
                <div class="bg-white p-4 rounded-md border">
                    <x-myui::breadcrumb class="bg-gray-50 p-3 rounded-lg">
                        <x-myui::breadcrumb.list class="text-sm">
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.link href="/" class="font-semibold">🏠 Home</x-myui::breadcrumb.link>
                            </x-myui::breadcrumb.item>
                            <x-myui::breadcrumb.separator />
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.page class="text-blue-600">📄 Breadcrumb Test</x-myui::breadcrumb.page>
                            </x-myui::breadcrumb.item>
                        </x-myui::breadcrumb.list>
                    </x-myui::breadcrumb>
                </div>
            </div>

            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>