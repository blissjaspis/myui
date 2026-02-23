<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dialog Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
    <!-- Alpine.js Plugins (must be loaded before Alpine.js core) -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine.js Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Dialog Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Dialog Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Dialog Components</x-myui::card.title>
                <x-myui::card.description>
                    shadcn/ui style dialog components built with Laravel Blade and Alpine.js.
                    Based on <a href="https://ui.shadcn.com/docs/components/radix/dialog" class="text-blue-600 hover:underline" target="_blank">shadcn/ui Dialog</a>.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

                <!-- Basic Dialog -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Basic Dialog</h3>
                    <p class="text-sm text-muted-foreground mb-4">A simple dialog with a header, title, and description.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::dialog>
                            <x-myui::dialog.trigger asChild>
                                <x-myui::button variant="outline">Edit Profile</x-myui::button>
                            </x-myui::dialog.trigger>

                            <x-myui::dialog.content>
                                <x-myui::dialog.header>
                                    <x-myui::dialog.title>Edit profile</x-myui::dialog.title>
                                    <x-myui::dialog.description>
                                        Make changes to your profile here. Click save when you're done.
                                    </x-myui::dialog.description>
                                </x-myui::dialog.header>
                                <div class="grid gap-4 py-4">
                                    <div class="grid grid-cols-4 items-center gap-4">
                                        <label class="text-right text-sm">Name</label>
                                        <x-myui::input class="col-span-3 h-8" value="Pedro Duarte" />
                                    </div>
                                    <div class="grid grid-cols-4 items-center gap-4">
                                        <label class="text-right text-sm">Username</label>
                                        <x-myui::input class="col-span-3 h-8" value="@peduarte" />
                                    </div>
                                </div>
                                <x-myui::dialog.footer>
                                    <x-myui::button type="submit">Save changes</x-myui::button>
                                </x-myui::dialog.footer>
                            </x-myui::dialog.content>
                        </x-myui::dialog>
                    </div>
                </div>

                <!-- Size Variants -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Size Variants</h3>
                    <p class="text-sm text-muted-foreground mb-4">Dialogs can have different sizes.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border flex flex-wrap gap-4">
                        <x-myui::dialog>
                            <x-myui::dialog.trigger asChild>
                                <x-myui::button variant="outline">Small</x-myui::button>
                            </x-myui::dialog.trigger>

                            <x-myui::dialog.content size="sm">
                                <x-myui::dialog.header>
                                    <x-myui::dialog.title>Small Dialog</x-myui::dialog.title>
                                    <x-myui::dialog.description>
                                        This is a small-sized dialog.
                                    </x-myui::dialog.description>
                                </x-myui::dialog.header>
                                <div class="py-4">
                                    <p class="text-sm text-muted-foreground">
                                        Content goes here.
                                    </p>
                                </div>
                            </x-myui::dialog.content>
                        </x-myui::dialog>

                        <x-myui::dialog>
                            <x-myui::dialog.trigger asChild>
                                <x-myui::button variant="outline">Default</x-myui::button>
                            </x-myui::dialog.trigger>

                            <x-myui::dialog.content size="default">
                                <x-myui::dialog.header>
                                    <x-myui::dialog.title>Default Dialog</x-myui::dialog.title>
                                    <x-myui::dialog.description>
                                        This is the default-sized dialog.
                                    </x-myui::dialog.description>
                                </x-myui::dialog.header>
                                <div class="py-4">
                                    <p class="text-sm text-muted-foreground">
                                        Content goes here.
                                    </p>
                                </div>
                            </x-myui::dialog.content>
                        </x-myui::dialog>

                        <x-myui::dialog>
                            <x-myui::dialog.trigger asChild>
                                <x-myui::button variant="outline">Large</x-myui::button>
                            </x-myui::dialog.trigger>

                            <x-myui::dialog.content size="lg">
                                <x-myui::dialog.header>
                                    <x-myui::dialog.title>Large Dialog</x-myui::dialog.title>
                                    <x-myui::dialog.description>
                                        This is a large-sized dialog.
                                    </x-myui::dialog.description>
                                </x-myui::dialog.header>
                                <div class="py-4">
                                    <p class="text-sm text-muted-foreground">
                                        Content goes here.
                                    </p>
                                </div>
                            </x-myui::dialog.content>
                        </x-myui::dialog>
                    </div>
                </div>

                <!-- Confirmation Dialog -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Confirmation Dialog</h3>
                    <p class="text-sm text-muted-foreground mb-4">A dialog for confirming actions with destructive buttons.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::dialog>
                            <x-myui::dialog.trigger asChild>
                                <x-myui::button variant="destructive">Delete Account</x-myui::button>
                            </x-myui::dialog.trigger>

                            <x-myui::dialog.content>
                                <x-myui::dialog.header>
                                    <x-myui::dialog.title>Are you absolutely sure?</x-myui::dialog.title>
                                    <x-myui::dialog.description>
                                        This action cannot be undone. This will permanently delete your account and remove your data from our servers.
                                    </x-myui::dialog.description>
                                </x-myui::dialog.header>
                                <x-myui::dialog.footer>
                                    <x-myui::button variant="outline" @click="closeDialog()">Cancel</x-myui::button>
                                    <x-myui::button variant="destructive">Continue</x-myui::button>
                                </x-myui::dialog.footer>
                            </x-myui::dialog.content>
                        </x-myui::dialog>
                    </div>
                </div>

                <!-- Custom Trigger -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Custom Trigger</h3>
                    <p class="text-sm text-muted-foreground mb-4">Use any element as a trigger with the asChild prop.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::dialog>
                            <x-myui::dialog.trigger asChild>
                                <a href="#" class="text-sm text-blue-600 hover:underline">Click here to open dialog</a>
                            </x-myui::dialog.trigger>

                            <x-myui::dialog.content>
                                <x-myui::dialog.header>
                                    <x-myui::dialog.title>Custom Trigger</x-myui::dialog.title>
                                    <x-myui::dialog.description>
                                        This dialog was opened using a link as the trigger.
                                    </x-myui::dialog.description>
                                </x-myui::dialog.header>
                                <div class="py-4">
                                    <p class="text-sm text-muted-foreground">
                                        Any element can be used as a trigger with the asChild prop.
                                    </p>
                                </div>
                            </x-myui::dialog.content>
                        </x-myui::dialog>
                    </div>
                </div>

                <!-- With Form -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">With Form</h3>
                    <p class="text-sm text-muted-foreground mb-4">A dialog containing a complete form.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::dialog>
                            <x-myui::dialog.trigger asChild>
                                <x-myui::button variant="outline">Create Project</x-myui::button>
                            </x-myui::dialog.trigger>

                            <x-myui::dialog.content>
                                <x-myui::dialog.header>
                                    <x-myui::dialog.title>Create project</x-myui::dialog.title>
                                    <x-myui::dialog.description>
                                        Create a new project to organize your work.
                                    </x-myui::dialog.description>
                                </x-myui::dialog.header>
                                <div class="grid gap-4 py-4">
                                    <div class="grid gap-2">
                                        <label class="text-sm font-medium">Project Name</label>
                                        <x-myui::form.input placeholder="My Awesome Project" />
                                    </div>
                                    <div class="grid gap-2">
                                        <label class="text-sm font-medium">Description</label>
                                        <textarea class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Describe your project..."></textarea>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <x-myui::checkbox id="private" />
                                        <label for="private" class="text-sm font-medium">Make this project private</label>
                                    </div>
                                </div>
                                <x-myui::dialog.footer>
                                    <x-myui::button variant="outline" @click="closeDialog()">Cancel</x-myui::button>
                                    <x-myui::button>Create Project</x-myui::button>
                                </x-myui::dialog.footer>
                            </x-myui::dialog.content>
                        </x-myui::dialog>
                    </div>
                </div>

            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
