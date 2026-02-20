<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Card Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Card Components -->
        <div class="space-y-6">
            <x-myui::card class="mb-6">
                <x-myui::card.header>
                    <x-myui::card.title>Card Components</x-myui::card.title>
                    <x-myui::card.description>
                        Flexible card containers for organizing content with headers, content areas, and footers.
                    </x-myui::card.description>
                </x-myui::card.header>
            </x-myui::card>

            <!-- Basic Card -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Basic Card</h3>
                <x-myui::card>
                    <x-myui::card.header>
                        <x-myui::card.title>Card Title</x-myui::card.title>
                        <x-myui::card.description>
                            A brief description of the card content.
                        </x-myui::card.description>
                    </x-myui::card.header>
                    <x-myui::card.content>
                        <p>This is the main content area of the card. You can place any content here, including text, images, or other components.</p>
                        <div class="mt-4">
                            <x-myui::button>Learn More</x-myui::button>
                        </div>
                    </x-myui::card.content>
                </x-myui::card>
            </div>

            <!-- Card with Footer -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Card with Footer</h3>
                <x-myui::card>
                    <x-myui::card.header>
                        <x-myui::card.title>Project Status</x-myui::card.title>
                        <x-myui::card.description>
                            Current progress on the development project.
                        </x-myui::card.description>
                    </x-myui::card.header>
                    <x-myui::card.content>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span>Progress:</span>
                                <span>75%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full w-3/4"></div>
                            </div>
                        </div>
                    </x-myui::card.content>
                    <x-myui::card.footer class="gap-4">
                        <x-myui::button variant="outline" size="sm">View Details</x-myui::button>
                        <x-myui::button size="sm">Complete</x-myui::button>
                    </x-myui::card.footer>
                </x-myui::card>
            </div>

            <!-- Simple Card -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Simple Card</h3>
                <x-myui::card>
                    <x-myui::card.content class="pt-6">
                        <div class="flex items-center space-x-4">
                            <x-myui::icons.check class="h-8 w-8 text-green-500" />
                            <div>
                                <x-myui::card.title>Success!</x-myui::card.title>
                                <x-myui::card.description>
                                    Your action was completed successfully.
                                </x-myui::card.description>
                            </div>
                        </div>
                    </x-myui::card.content>
                </x-myui::card>
            </div>
        </div>
    </div>
</body>
</html>