<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breadcrumb Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
</head>
<body class="bg-gray-100 p-5">
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

            <!-- Many Items Breadcrumb -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Many Items (Single Line)</h3>
                <p class="text-sm text-gray-500 mb-3">Many breadcrumb items stay on one line with text truncation.</p>
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

            <!-- Custom Separators -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Custom Separators</h3>
                <div class="space-y-3">
                    <!-- Arrow separator -->
                    <div class="bg-white p-4 rounded-md border">
                        <p class="text-xs text-gray-400 mb-2">Arrow separator</p>
                        <x-myui::breadcrumb>
                            <x-myui::breadcrumb.list>
                                <x-myui::breadcrumb.item>
                                    <x-myui::breadcrumb.link href="/">Home</x-myui::breadcrumb.link>
                                </x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.separator>
                                    →
                                </x-myui::breadcrumb.separator>
                                <x-myui::breadcrumb.item>
                                    <x-myui::breadcrumb.page>Products</x-myui::breadcrumb.page>
                                </x-myui::breadcrumb.item>
                            </x-myui::breadcrumb.list>
                        </x-myui::breadcrumb>
                    </div>
                    <!-- Pipe separator -->
                    <div class="bg-white p-4 rounded-md border">
                        <p class="text-xs text-gray-400 mb-2">Pipe separator</p>
                        <x-myui::breadcrumb>
                            <x-myui::breadcrumb.list>
                                <x-myui::breadcrumb.item>
                                    <x-myui::breadcrumb.link href="/">Home</x-myui::breadcrumb.link>
                                </x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.separator>
                                    |
                                </x-myui::breadcrumb.separator>
                                <x-myui::breadcrumb.item>
                                    <x-myui::breadcrumb.page>Settings</x-myui::breadcrumb.page>
                                </x-myui::breadcrumb.item>
                            </x-myui::breadcrumb.list>
                        </x-myui::breadcrumb>
                    </div>
                    <!-- Bullet separator -->
                    <div class="bg-white p-4 rounded-md border">
                        <p class="text-xs text-gray-400 mb-2">Bullet separator</p>
                        <x-myui::breadcrumb>
                            <x-myui::breadcrumb.list>
                                <x-myui::breadcrumb.item>
                                    <x-myui::breadcrumb.link href="/">Home</x-myui::breadcrumb.link>
                                </x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.separator>
                                    •
                                </x-myui::breadcrumb.separator>
                                <x-myui::breadcrumb.item>
                                    <x-myui::breadcrumb.page>Profile</x-myui::breadcrumb.page>
                                </x-myui::breadcrumb.item>
                            </x-myui::breadcrumb.list>
                        </x-myui::breadcrumb>
                    </div>
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

            <!-- Long Content - Single Line with Truncation -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Long Content (Auto-Truncated)</h3>
                <p class="text-sm text-gray-500 mb-3">Long text automatically truncates with ellipsis, staying on one line.</p>
                <div class="bg-white p-4 rounded-md border">
                    <x-myui::breadcrumb>
                        <x-myui::breadcrumb.list>
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.link href="/">Very Long Home Name Here</x-myui::breadcrumb.link>
                            </x-myui::breadcrumb.item>
                            <x-myui::breadcrumb.separator />
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.link href="/docs">Extensive Documentation Section</x-myui::breadcrumb.link>
                            </x-myui::breadcrumb.item>
                            <x-myui::breadcrumb.separator />
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.link href="/components">UI Components Library Collection</x-myui::breadcrumb.link>
                            </x-myui::breadcrumb.item>
                            <x-myui::breadcrumb.separator />
                            <x-myui::breadcrumb.item>
                                <x-myui::breadcrumb.page>Breadcrumb Navigation Component System</x-myui::breadcrumb.page>
                            </x-myui::breadcrumb.item>
                        </x-myui::breadcrumb.list>
                    </x-myui::breadcrumb>
                </div>
            </div>

            <!-- Responsive Auto-Collapsing -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Responsive Auto-Collapsing</h3>
                <p class="text-sm text-gray-500 mb-3">Middle items collapse to ellipsis on smaller screens. Resize your browser to see the effect.</p>
                <div class="bg-white p-4 rounded-md border">
                    <x-myui::breadcrumb.responsive :items="[
                        ['label' => 'Home', 'href' => '/'],
                        ['label' => 'Documentation', 'href' => '/docs'],
                        ['label' => 'UI Components', 'href' => '/components'],
                        ['label' => 'Navigation', 'href' => '/components/navigation'],
                        ['label' => 'Breadcrumb Component', 'href' => null],
                    ]" />
                </div>
            </div>

            <!-- Responsive with Very Long Labels -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Responsive with Long Labels</h3>
                <p class="text-sm text-gray-500 mb-3">Combines auto-collapse with text truncation for the best of both.</p>
                <div class="bg-white p-4 rounded-md border">
                    <x-myui::breadcrumb.responsive :items="[
                        ['label' => 'My Very Long Application Name', 'href' => '/'],
                        ['label' => 'Comprehensive Documentation Center', 'href' => '/docs'],
                        ['label' => 'Advanced UI Components Library', 'href' => '/components'],
                        ['label' => 'Navigation Systems and Patterns', 'href' => '/components/navigation'],
                        ['label' => 'Breadcrumb Navigation Component with Auto-Collapse', 'href' => null],
                    ]" :maxVisible="4" />
                </div>
            </div>

            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>