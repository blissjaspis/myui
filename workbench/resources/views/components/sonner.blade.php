<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonner Component - Myui</title>
    @vite(['workbench/resources/css/app.css'])
    <!-- Alpine.js Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100" x-data="{}">
    {{-- Sonner Toaster --}}
    <x-myui::sonner position="right-center" />

    <div class="max-w-4xl mx-auto space-y-8 p-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Sonner (Toast) Component</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Sonner Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Sonner Toast Component</x-myui::card.title>
                <x-myui::card.description>
                    An opinionated toast component for notifications.
                    Based on <a href="https://ui.shadcn.com/docs/components/radix/sonner" class="text-blue-600 hover:underline" target="_blank">shadcn/ui Sonner</a>.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

                <!-- Default Toast -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Default Toast</h3>
                    <p class="text-sm text-muted-foreground mb-4">A simple toast notification.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border">
                        <x-myui::button @click="$store.toast.show('Event has been created')">
                            Show Toast
                        </x-myui::button>
                    </div>
                </div>

                <!-- Toast Types -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Toast Types</h3>
                    <p class="text-sm text-muted-foreground mb-4">Different toast types with icons and colors.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border flex flex-wrap gap-2">
                        <x-myui::button variant="outline" @click="$store.toast.success('Successfully saved!')">
                            Success
                        </x-myui::button>
                        <x-myui::button variant="outline" @click="$store.toast.error('Something went wrong')">
                            Error
                        </x-myui::button>
                        <x-myui::button variant="outline" @click="$store.toast.warning('Please be careful')">
                            Warning
                        </x-myui::button>
                        <x-myui::button variant="outline" @click="$store.toast.info('New update available')">
                            Info
                        </x-myui::button>
                    </div>
                </div>

                <!-- With Title and Description -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Rich Content</h3>
                    <p class="text-sm text-muted-foreground mb-4">Toast with title and description.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border">
                        <x-myui::button @click="$store.toast.success('', {
                            title: 'Event has been created',
                            description: 'Monday, January 3rd at 6:00pm'
                        })">
                            Show Rich Toast
                        </x-myui::button>
                    </div>
                </div>

                <!-- With Action -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">With Action</h3>
                    <p class="text-sm text-muted-foreground mb-4">Toast with an actionable button. Clicking the action auto-dismisses the toast.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border space-y-2">
                        <x-myui::button @click="$store.toast.success('Changes saved successfully', {
                            action: {
                                label: 'Undo',
                                onClick: () => $store.toast.show('Undo clicked!')
                            }
                        })">
                            Save with Undo
                        </x-myui::button>
                        <x-myui::button variant="outline" @click="$store.toast.info('You have a new message', {
                            duration: 10000,
                            action: {
                                label: 'Mark as read',
                                onClick: () => $store.toast.success('Marked as read!')
                            }
                        })">
                            Long Duration + Action
                        </x-myui::button>
                    </div>
                </div>

                <!-- Promise Toast -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Promise Toast</h3>
                    <p class="text-sm text-muted-foreground mb-4">Show loading, then success or error for async operations.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border space-y-2">
                        <x-myui::button @click="
                            $store.toast.promise(
                                new Promise((resolve) => setTimeout(resolve, 2000)),
                                {
                                    loading: 'Saving changes...',
                                    success: 'Changes saved successfully!',
                                    error: 'Failed to save changes'
                                }
                            )
                        ">
                            Simulate Success
                        </x-myui::button>
                        <x-myui::button variant="outline" @click="
                            $store.toast.promise(
                                new Promise((_, reject) => setTimeout(reject, 2000)),
                                {
                                    loading: 'Deleting account...',
                                    success: 'Account deleted',
                                    error: 'Failed to delete account'
                                }
                            )
                        ">
                            Simulate Error
                        </x-myui::button>
                    </div>
                </div>

                <!-- Custom Duration -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Custom Duration</h3>
                    <p class="text-sm text-muted-foreground mb-4">Toast that stays for 10 seconds.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border">
                        <x-myui::button @click="$store.toast.show('This toast stays for 10 seconds', { duration: 10000 })">
                            Long Duration Toast
                        </x-myui::button>
                    </div>
                </div>

                <!-- Without Close Button -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Without Close Button</h3>
                    <p class="text-sm text-muted-foreground mb-4">Toast without the X button (closeButton: false).</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border flex flex-wrap gap-2">
                        <x-myui::button variant="outline" @click="$store.toast.success('No close button here', { closeButton: false })">
                            Success (No X)
                        </x-myui::button>
                        <x-myui::button variant="outline" @click="$store.toast.error('Cannot close manually', { closeButton: false })">
                            Error (No X)
                        </x-myui::button>
                    </div>
                </div>

                <!-- Progress Bar Options -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Progress Bar Options</h3>
                    <p class="text-sm text-muted-foreground mb-4">Delay or hide the progress bar.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border space-y-2">
                        <x-myui::button variant="outline" @click="$store.toast.info('Progress appears after 2 seconds', { duration: 8000, progressBarDelay: 2000 })">
                            Delayed Progress (2s)
                        </x-myui::button>
                        <x-myui::button variant="outline" @click="$store.toast.success('No progress bar visible', { duration: 5000, progressBarDelay: Infinity })">
                            Hidden Progress Bar
                        </x-myui::button>
                        <x-myui::button variant="outline" @click="$store.toast.warning('Progress bar appears immediately (default)', { duration: 5000 })">
                            Default Progress
                        </x-myui::button>
                    </div>
                </div>

                <!-- Staggered Multiple Toasts -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Staggered Animations</h3>
                    <p class="text-sm text-muted-foreground mb-4">Multiple toasts appear with staggered spring animations.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border">
                        <x-myui::button @click="
                            $store.toast.info('First notification', { duration: 6000 });
                            setTimeout(() => $store.toast.success('Second notification', { duration: 6000 }), 100);
                            setTimeout(() => $store.toast.warning('Third notification', { duration: 6000 }), 200);
                        ">
                            Show 3 Toasts (Staggered)
                        </x-myui::button>
                    </div>
                </div>

            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
