<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Input Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Input Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Input Components</x-myui::card.title>
                <x-myui::card.description>
                    Form input components with various types, validation states, and styling options.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>
                <!-- Basic Inputs -->
                <div class="mb-6">
                    <h3 class="text-lg font-medium mb-3">Basic Inputs</h3>
                    <div class="space-y-4">
                        <x-myui::form.field>
                            <x-myui::form.field-label for="text-input">Text Input</x-myui::form.field-label>
                            <x-myui::form.input id="text-input" type="text" placeholder="Enter your text" />
                            <x-myui::form.field-description>
                                This is a basic text input field.
                            </x-myui::form.field-description>
                        </x-myui::form.field>

                        <x-myui::form.field>
                            <x-myui::form.field-label for="email-input">Email Input</x-myui::form.field-label>
                            <x-myui::form.input id="email-input" type="email" placeholder="Enter your email" />
                            <x-myui::form.field-description>
                                Email validation will be applied automatically.
                            </x-myui::form.field-description>
                        </x-myui::form.field>

                        <x-myui::form.field>
                            <x-myui::form.field-label for="password-input">Password Input</x-myui::form.field-label>
                            <x-myui::form.input id="password-input" type="password" placeholder="Enter your password" />
                            <x-myui::form.field-description>
                                Password input with masked characters.
                            </x-myui::form.field-description>
                        </x-myui::form.field>
                    </div>
                </div>

                <!-- Input States -->
                <div class="mb-6">
                    <h3 class="text-lg font-medium mb-3">Input States</h3>
                    <div class="space-y-4">
                        <x-myui::form.field>
                            <x-myui::form.field-label for="disabled-input">Disabled Input</x-myui::form.field-label>
                            <x-myui::form.input id="disabled-input" type="text" placeholder="Disabled input" disabled />
                            <x-myui::form.field-description>
                                This input is disabled and cannot be interacted with.
                            </x-myui::form.field-description>
                        </x-myui::form.field>

                        <x-myui::form.field invalid>
                            <x-myui::form.field-label for="invalid-input">Invalid Input</x-myui::form.field-label>
                            <x-myui::form.input id="invalid-input" type="text" placeholder="Invalid input" data-invalid />
                            <x-myui::form.field-description>
                                This input shows an invalid state with red border.
                            </x-myui::form.field-description>
                            <x-myui::form.message>
                                This field is required and cannot be empty.
                            </x-myui::form.message>
                        </x-myui::form.field>
                    </div>
                </div>

                <!-- Input Groups -->
                <div class="mb-6">
                    <h3 class="text-lg font-medium mb-3">Input Groups</h3>
                    <div class="space-y-4">
                        <x-myui::form.field>
                            <x-myui::form.field-label for="search-input">Search Input</x-myui::form.field-label>
                            <x-myui::form.input-group>
                                <x-myui::form.input-group-icon align="inline-start">
                                    <x-myui::icons.search class="h-4 w-4" />
                                </x-myui::form.input-group-icon>
                                <x-myui::form.input-group-input id="inline-start-input" type="text" placeholder="Search..." />
                            </x-myui::form.input-group>
                            <x-myui::form.field-description>
                                Input with a search icon using the input-group-icon component.
                            </x-myui::form.field-description>
                        </x-myui::form.field>

                        <x-myui::form.field>
                            <x-myui::form.field-label for="price-input">Price Input</x-myui::form.field-label>
                            <x-myui::form.input-group>
                                <x-myui::form.input-group-text>$</x-myui::form.input-group-text>
                                <x-myui::form.input-group-input id="price-input" type="number" placeholder="0.00" />
                            </x-myui::form.input-group>
                            <x-myui::form.field-description>
                                Input with a dollar sign text addon.
                            </x-myui::form.field-description>
                        </x-myui::form.field>

                        <x-myui::form.field>
                            <x-myui::form.field-label for="email-domain">Email Input</x-myui::form.field-label>
                            <x-myui::form.input-group>
                                <x-myui::form.input-group-icon align="start">
                                    <x-myui::icons.envelope />
                                </x-myui::form.input-group-icon>
                                <x-myui::form.input-group-input id="email-domain" type="email" placeholder="user" />
                                <x-myui::form.input-group-text align="end">@example.com</x-myui::form.input-group-text>
                            </x-myui::form.input-group>
                            <x-myui::form.field-description>
                                Input with both icon prefix and text suffix.
                            </x-myui::form.field-description>
                        </x-myui::form.field>

                        <x-myui::form.field>
                            <x-myui::form.field-label for="email-domain">Spinner Input</x-myui::form.field-label>
                            <x-myui::form.input-group>
                                <x-myui::form.input-group-input id="email-domain" type="text" placeholder="user" />
                                <x-myui::form.input-group-icon align="end">
                                    <x-myui::icons.loading class="animate-spin" />
                                </x-myui::form.input-group-icon>
                            </x-myui::form.input-group>
                        </x-myui::form.field>
                    </div>
                </div>

                <!-- Required Fields -->
                <div class="mb-6">
                    <h3 class="text-lg font-medium mb-3">Required Fields</h3>
                    <div class="space-y-4">
                        <x-myui::form.field>
                            <x-myui::form.field-label for="required-input" required>Required Field</x-myui::form.field-label>
                            <x-myui::form.input id="required-input" type="text" placeholder="This field is required" required />
                            <x-myui::form.field-description>
                                Fields marked with * are required.
                            </x-myui::form.field-description>
                        </x-myui::form.field>
                    </div>
                </div>

                <!-- Horizontal Layout -->
                <div class="mb-6">
                    <h3 class="text-lg font-medium mb-3">Horizontal Layout</h3>
                    <div class="space-y-4">
                        <x-myui::form.field orientation="horizontal">
                            <x-myui::form.field-label for="horizontal-input">Label</x-myui::form.field-label>
                            <x-myui::form.input id="horizontal-input" type="text" placeholder="Horizontal input" class="flex-1" />
                        </x-myui::form.field>
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>