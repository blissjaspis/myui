<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Alert Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Alert Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Alert Components</x-myui::card.title>
                <x-myui::card.description>
                    Callout components for displaying important messages and notifications.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

            <!-- Variants -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Variants</h3>
                <div class="space-y-4">
                    <x-myui::alert>
                        <x-myui::icons.check class="h-4 w-4" />
                        <div>
                            <x-myui::alert.title>Success!</x-myui::alert.title>
                            <x-myui::alert.description>
                                Your changes have been saved successfully.
                            </x-myui::alert.description>
                        </div>
                    </x-myui::alert>

                    <x-myui::alert variant="destructive">
                        <x-myui::icons.x class="h-4 w-4" />
                        <div>
                            <x-myui::alert.title>Error!</x-myui::alert.title>
                            <x-myui::alert.description>
                                Something went wrong. Please try again.
                            </x-myui::alert.description>
                        </div>
                    </x-myui::alert>
                </div>
            </div>

            <!-- Custom Icons and Content -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Custom Icons and Content</h3>
                <div class="space-y-4">
                    <x-myui::alert>
                        <x-myui::icons.loading class="h-4 w-4 animate-spin" />
                        <div>
                            <x-myui::alert.title>Loading...</x-myui::alert.title>
                            <x-myui::alert.description>
                                Please wait while we process your request.
                            </x-myui::alert.description>
                        </div>
                    </x-myui::alert>

                    <x-myui::alert>
                        <x-myui::icons.bell class="h-4 w-4" />
                        <div>
                            <x-myui::alert.title>Notification</x-myui::alert.title>
                            <x-myui::alert.description>
                                You have 3 unread messages in your inbox.
                            </x-myui::alert.description>
                        </div>
                    </x-myui::alert>

                    <x-myui::alert>
                        <x-myui::icons.info class="h-4 w-4" />
                        <div>
                            <x-myui::alert.title>Information</x-myui::alert.title>
                            <x-myui::alert.description>
                                This is an informational message that provides additional context.
                            </x-myui::alert.description>
                        </div>
                    </x-myui::alert>
                </div>
            </div>
            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>