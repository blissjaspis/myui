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

        <!-- Button Components -->
        <section class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-6">Button Components</h2>

            <!-- Variants -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Variants</h3>
                <div class="flex flex-wrap gap-4">
                    <x-myui::button variant="default">Default</x-myui::button>
                    <x-myui::button variant="destructive">Destructive</x-myui::button>
                    <x-myui::button variant="outline">Outline</x-myui::button>
                    <x-myui::button variant="secondary">Secondary</x-myui::button>
                    <x-myui::button variant="ghost">Ghost</x-myui::button>
                    <x-myui::button variant="link">Link</x-myui::button>
                </div>
            </div>

            <!-- Sizes -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Sizes</h3>
                <div class="flex flex-wrap gap-4 items-center">
                    <x-myui::button size="xs">XS</x-myui::button>
                    <x-myui::button size="sm">SM</x-myui::button>
                    <x-myui::button size="default">Default</x-myui::button>
                    <x-myui::button size="lg">LG</x-myui::button>
                </div>
            </div>

            <!-- Icon Buttons -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Icon Buttons</h3>
                <div class="flex flex-wrap gap-4 items-center">
                    <x-myui::button size="icon-xs">
                        <x-myui::icons.check class="w-3 h-3" />
                    </x-myui::button>
                    <x-myui::button size="icon-sm">
                        <x-myui::icons.check class="w-4 h-4" />
                    </x-myui::button>
                    <x-myui::button size="icon">
                        <x-myui::icons.check class="w-4 h-4" />
                    </x-myui::button>
                    <x-myui::button size="icon-lg">
                        <x-myui::icons.check class="w-5 h-5" />
                    </x-myui::button>
                </div>
            </div>

            <!-- Buttons with Icons -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Buttons with Icons</h3>
                <div class="flex flex-wrap gap-4">
                    <x-myui::button>
                        <x-myui::icons.check data-icon="inline-start" class="w-4 h-4 mr-2" />
                        Save
                    </x-myui::button>
                    <x-myui::button variant="outline">
                        <x-myui::icons.loading data-icon="inline-start" class="w-4 h-4 animate-spin mr-2" />
                        Loading
                    </x-myui::button>
                    <x-myui::button variant="secondary">
                        Next
                        <x-myui::icons.x data-icon="inline-end" class="w-4 h-4 ml-2" />
                    </x-myui::button>
                    <x-myui::button variant="ghost" size="sm">
                        <x-myui::icons.check data-icon="inline-start" class="w-4 h-4 mr-2" />
                        Done
                    </x-myui::button>
                </div>
            </div>

            <!-- Link Buttons -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Link Buttons (asChild)</h3>
                <div class="flex flex-wrap gap-4">
                    <x-myui::button asChild>
                        <a href="/login">Login</a>
                    </x-myui::button>
                    <x-myui::button variant="outline" asChild>
                        <a href="/register">Register</a>
                    </x-myui::button>
                    <x-myui::button variant="link" asChild>
                        <a href="/docs">Documentation</a>
                    </x-myui::button>
                </div>
            </div>
        </section>

        <!-- Input Components -->
        <section class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-6">Input Components</h2>

            <!-- Basic Input -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Basic Input</h3>
                <x-myui::form.input placeholder="Enter your text..." />
            </div>

            <!-- Field -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Field</h3>
                <x-myui::form.field>
                    <x-myui::form.field-label>Username</x-myui::form.field-label>
                    <x-myui::form.input placeholder="Choose a unique username" />
                    <x-myui::form.field-description>
                        Choose a unique username for your account.
                    </x-myui::form.field-description>
                </x-myui::form.field>
            </div>

            <!-- Field Group -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Field Group</h3>
                <x-myui::form.field-group>
                    <x-myui::form.field>
                        <x-myui::form.field-label>Name</x-myui::form.field-label>
                        <x-myui::form.input placeholder="Enter your name" />
                    </x-myui::form.field>
                    <x-myui::form.field>
                        <x-myui::form.field-label>Email</x-myui::form.field-label>
                        <x-myui::form.input type="email" placeholder="Enter your email" />
                        <x-myui::form.field-description>
                            We'll send updates to this address.
                        </x-myui::form.field-description>
                    </x-myui::form.field>
                </x-myui::form.field-group>
                <div class="flex gap-2 mt-4">
                    <x-myui::button variant="outline">Reset</x-myui::button>
                    <x-myui::button>Submit</x-myui::button>
                </div>
            </div>

            <!-- States -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">States</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Disabled -->
                    <x-myui::form.field>
                        <x-myui::form.field-label>Email</x-myui::form.field-label>
                        <x-myui::form.input disabled placeholder="Disabled input" />
                        <x-myui::form.field-description>
                            This field is currently disabled.
                        </x-myui::form.field-description>
                    </x-myui::form.field>

                    <!-- Invalid -->
                    <x-myui::form.field invalid="true">
                        <x-myui::form.field-label>Invalid Input</x-myui::form.field-label>
                        <x-myui::form.input data-invalid="true" placeholder="Invalid input" />
                        <x-myui::form.field-description>
                            This field contains validation errors.
                        </x-myui::form.field-description>
                    </x-myui::form.field>
                </div>
            </div>

            <!-- File Input -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">File Input</h3>
                <x-myui::form.field>
                    <x-myui::form.field-label>Picture</x-myui::form.field-label>
                    <x-myui::form.input type="file" />
                    <x-myui::form.field-description>
                        Select a picture to upload.
                    </x-myui::form.field-description>
                </x-myui::form.field>
            </div>

            <!-- Required Field -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Required Field</h3>
                <x-myui::form.field>
                    <x-myui::form.field-label required>Required Field</x-myui::form.field-label>
                    <x-myui::form.input required placeholder="This field is required" />
                    <x-myui::form.field-description>
                        This field must be filled out.
                    </x-myui::form.field-description>
                </x-myui::form.field>
            </div>

            <!-- Badge in Label -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Badge in Label</h3>
                <x-myui::form.field>
                    <x-myui::form.field-label>
                        Webhook URL
                        <x-myui::badge class="ml-2">Beta</x-myui::badge>
                    </x-myui::form.field-label>
                    <x-myui::form.input placeholder="https://example.com/webhook" />
                </x-myui::form.field>
            </div>

            <!-- Input Group -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Input Group</h3>
                <x-myui::form.field>
                    <x-myui::form.field-label>Website URL</x-myui::form.field-label>
                    <x-myui::form.input-group>
                        <x-myui::form.input-group-icon>https://</x-myui::form.input-group-icon>
                        <x-myui::form.input placeholder="example.com" />
                    </x-myui::form.input-group>
                </x-myui::form.field>
            </div>

            <!-- Inline Field -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Inline Field</h3>
                <x-myui::form.field orientation="horizontal">
                    <x-myui::form.field-label>Search</x-myui::form.field-label>
                    <x-myui::form.input placeholder="Search..." />
                    <x-myui::button size="sm" class="ml-2">
                        <x-myui::icons.check data-icon="inline-start" class="w-4 h-4" />
                        Search
                    </x-myui::button>
                </x-myui::form.field>
            </div>

            <!-- Grid Layout -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">Grid Layout</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <x-myui::form.field>
                        <x-myui::form.field-label>First Name</x-myui::form.field-label>
                        <x-myui::form.input placeholder="John" />
                    </x-myui::form.field>
                    <x-myui::form.field>
                        <x-myui::form.field-label>Last Name</x-myui::form.field-label>
                        <x-myui::form.input placeholder="Doe" />
                    </x-myui::form.field>
                </div>
            </div>
        </section>

        <!-- Card Components -->
        <section class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-6">Card Components</h2>

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
        </section>

        <!-- Alert Components -->
        <section class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-6">Alert Components</h2>

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
        </section>

        <!-- Badge Components -->
        <section class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-6">Badge Components</h2>

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
                        <x-myui::icons.check data-icon="inline-start" class="w-3 h-3 mr-2" />
                        Verified
                    </x-myui::badge>
                    <x-myui::badge variant="secondary">
                        <x-myui::icons.bookmark data-icon="inline-start" class="w-3 h-3 mr-2" />
                        Bookmarked
                    </x-myui::badge>
                    <x-myui::badge variant="outline">
                        Premium
                        <x-myui::icons.star data-icon="inline-end" class="w-3 h-3 ml-2" />
                    </x-myui::badge>
                </div>
            </div>

            <!-- With Spinner -->
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-3">With Spinner</h3>
                <div class="flex flex-wrap gap-4">
                    <x-myui::badge variant="destructive">
                        <x-myui::icons.loading data-icon="inline-start" class="w-3 h-3 animate-spin mr-2" />
                        Deleting
                    </x-myui::badge>
                    <x-myui::badge variant="secondary">
                        <x-myui::icons.loading data-icon="inline-start" class="w-3 h-3 animate-spin mr-2" />
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
                            <x-myui::icons.external-link data-icon="inline-end" class="w-3 h-3 mr-2" />
                            Open Link
                        </a>
                    </x-myui::badge>
                    <x-myui::badge variant="outline" asChild>
                        <a href="/docs">Documentation</a>
                    </x-myui::badge>
                </div>
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
