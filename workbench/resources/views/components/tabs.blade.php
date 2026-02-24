<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabs Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
    <!-- Alpine.js Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto space-y-8 p-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Tabs Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Tabs Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Tabs Components</x-myui::card.title>
                <x-myui::card.description>
                    shadcn/ui style tabs components built with Laravel Blade and Alpine.js.
                    Based on <a href="https://ui.shadcn.com/docs/components/radix/tabs" class="text-blue-600 hover:underline" target="_blank">shadcn/ui Tabs</a>.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

                <!-- Basic Tabs -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Basic Tabs</h3>
                    <p class="text-sm text-muted-foreground mb-4">A simple tabs example with two tabs.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::tabs defaultValue="account">
                            <x-myui::tabs.list>
                                <x-myui::tabs.trigger value="account">Account</x-myui::tabs.trigger>
                                <x-myui::tabs.trigger value="password">Password</x-myui::tabs.trigger>
                            </x-myui::tabs.list>

                            <x-myui::tabs.content value="account">
                                <p class="text-sm">Make changes to your account here. Click save when you're done.</p>
                            </x-myui::tabs.content>

                            <x-myui::tabs.content value="password">
                                <p class="text-sm">Change your password here. After saving, you'll be logged out.</p>
                            </x-myui::tabs.content>
                        </x-myui::tabs>
                    </div>
                </div>

                <!-- Multiple Tabs -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Multiple Tabs</h3>
                    <p class="text-sm text-muted-foreground mb-4">Tabs with multiple options.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-lg">
                        <x-myui::tabs defaultValue="overview">
                            <x-myui::tabs.list class="w-full">
                                <x-myui::tabs.trigger value="overview">Overview</x-myui::tabs.trigger>
                                <x-myui::tabs.trigger value="analytics">Analytics</x-myui::tabs.trigger>
                                <x-myui::tabs.trigger value="reports">Reports</x-myui::tabs.trigger>
                                <x-myui::tabs.trigger value="settings">Settings</x-myui::tabs.trigger>
                            </x-myui::tabs.list>

                            <x-myui::tabs.content value="overview">
                                <p class="text-sm">View your key metrics and recent project activity.</p>
                            </x-myui::tabs.content>

                            <x-myui::tabs.content value="analytics">
                                <p class="text-sm">Track your analytics and performance metrics.</p>
                            </x-myui::tabs.content>

                            <x-myui::tabs.content value="reports">
                                <p class="text-sm">Generate and view detailed reports.</p>
                            </x-myui::tabs.content>

                            <x-myui::tabs.content value="settings">
                                <p class="text-sm">Configure your dashboard settings.</p>
                            </x-myui::tabs.content>
                        </x-myui::tabs>
                    </div>
                </div>

                <!-- With Cards -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">With Card Content</h3>
                    <p class="text-sm text-muted-foreground mb-4">Tabs inside a card with rich content.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::tabs defaultValue="login">
                            <x-myui::tabs.list class="grid w-full grid-cols-2">
                                <x-myui::tabs.trigger value="login">Login</x-myui::tabs.trigger>
                                <x-myui::tabs.trigger value="register">Register</x-myui::tabs.trigger>
                            </x-myui::tabs.list>

                            <x-myui::tabs.content value="login">
                                <div class="space-y-4 mt-4">
                                    <div class="space-y-2">
                                        <x-myui::label for="email">Email</x-myui::label>
                                        <x-myui::input id="email" type="email" placeholder="name@example.com" />
                                    </div>
                                    <div class="space-y-2">
                                        <x-myui::label for="password">Password</x-myui::label>
                                        <x-myui::input id="password" type="password" />
                                    </div>
                                    <x-myui::button class="w-full">Login</x-myui::button>
                                </div>
                            </x-myui::tabs.content>

                            <x-myui::tabs.content value="register">
                                <div class="space-y-4 mt-4">
                                    <div class="space-y-2">
                                        <x-myui::label for="name">Name</x-myui::label>
                                        <x-myui::input id="name" placeholder="John Doe" />
                                    </div>
                                    <div class="space-y-2">
                                        <x-myui::label for="reg-email">Email</x-myui::label>
                                        <x-myui::input id="reg-email" type="email" placeholder="name@example.com" />
                                    </div>
                                    <div class="space-y-2">
                                        <x-myui::label for="reg-password">Password</x-myui::label>
                                        <x-myui::input id="reg-password" type="password" />
                                    </div>
                                    <x-myui::button class="w-full">Create Account</x-myui::button>
                                </div>
                            </x-myui::tabs.content>
                        </x-myui::tabs>
                    </div>
                </div>

                <!-- Disabled Tab -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Disabled Tab</h3>
                    <p class="text-sm text-muted-foreground mb-4">Tabs with a disabled state.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::tabs defaultValue="active">
                            <x-myui::tabs.list>
                                <x-myui::tabs.trigger value="active">Active</x-myui::tabs.trigger>
                                <x-myui::tabs.trigger value="disabled" disabled>Disabled</x-myui::tabs.trigger>
                            </x-myui::tabs.list>

                            <x-myui::tabs.content value="active">
                                <p class="text-sm">This is the active tab content.</p>
                            </x-myui::tabs.content>

                            <x-myui::tabs.content value="disabled">
                                <p class="text-sm">This tab is disabled.</p>
                            </x-myui::tabs.content>
                        </x-myui::tabs>
                    </div>
                </div>

            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
