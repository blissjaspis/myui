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

        <!-- Button Variants -->
        <section class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-4">Button Variants (Namespace Syntax)</h2>
            <div class="flex flex-wrap gap-4">
                <x-myui::button variant="default">Default</x-myui::button>
                <x-myui::button variant="destructive">Destructive</x-myui::button>
                <x-myui::button variant="outline">Outline</x-myui::button>
                <x-myui::button variant="secondary">Secondary</x-myui::button>
                <x-myui::button variant="ghost">Ghost</x-myui::button>
                <x-myui::button variant="link">Link</x-myui::button>
            </div>
        </section>

        <!-- Button Sizes -->
        <section class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-4">Button Sizes (Namespace Syntax)</h2>
            <div class="flex flex-wrap gap-4 items-center">
                <x-myui::button size="sm">Small</x-myui::button>
                <x-myui::button size="default">Default</x-myui::button>
                <x-myui::button size="lg">Large</x-myui::button>
            </div>
        </section>

        <!-- Input Components -->
        <section class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-4">Input Components</h2>
            <div class="space-y-4">
                <x-myui::input type="text" placeholder="Enter your name" />
                <x-myui::input type="email" placeholder="Enter your email" />
                <x-myui::input type="password" placeholder="Enter your password" />
            </div>
        </section>

        <!-- Card Component -->
        {{-- <section class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-4">Card Component</h2>
            <x-myui::card>
                <x-myui::card-header>
                    <h3 class="text-lg font-semibold">Card Title</h3>
                    <p class="text-sm text-gray-600">Card description goes here</p>
                </x-myui::card-header>
                <x-myui::card-content>
                    <p class="text-gray-700">This is the card content. You can put any content here.</p>
                    <div class="mt-4">
                        <x-myui::button variant="default">Action Button</x-myui::button>
                    </div>
                </x-myui::card-content>
            </x-myui::card>
        </section> --}}

        <!-- Alert Components -->
        <section class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-4">Alert Components</h2>
            <div class="space-y-4">
                <x-myui::alert>
                    <x-myui::icons.check class="w-4 h-4" />
                    <div>
                        <h4 class="font-medium">Success!</h4>
                        <p>Your changes have been saved successfully.</p>
                    </div>
                </x-myui::alert>

                <x-myui::alert variant="destructive">
                    <x-myui::icons.x class="w-4 h-4" />
                    <div>
                        <h4 class="font-medium">Error!</h4>
                        <p>Something went wrong. Please try again.</p>
                    </div>
                </x-myui::alert>
            </div>
        </section>

        <!-- Badge Components -->
        <section class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-4">Badge Components</h2>
            <div class="flex flex-wrap gap-4">
                <x-myui::badge>New</x-myui::badge>
                <x-myui::badge variant="secondary">Secondary</x-myui::badge>
                <x-myui::badge variant="destructive">Error</x-myui::badge>
                <x-myui::badge variant="outline">Outline</x-myui::badge>
            </div>
        </section>

        <!-- Icons -->
        <section class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-4">Icons</h2>
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
        </section>

        <!-- Package Info -->
        <section class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-4">Package Information</h2>
            <div class="space-y-2">
                <p><strong>Version:</strong> {{ \BlissJaspis\Myui\Facades\Myui::version() }}</p>
                <p><strong>Framework:</strong> {{ \BlissJaspis\Myui\Facades\Myui::framework() }}</p>
                <p><strong>Prefix:</strong> {{ \BlissJaspis\Myui\Facades\Myui::prefix() }}</p>
            </div>
        </section>
    </div>
</body>
</html>
