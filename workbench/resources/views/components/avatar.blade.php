<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avatar Components - Myui</title>
    @vite(['workbench/resources/css/app.css'])
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Avatar Components</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Basic Avatar -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Basic Avatar</x-myui::card.title>
                <x-myui::card.description>
                    An image element with a fallback for representing the user.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="flex flex-wrap items-center gap-4">
                    <!-- With Image -->
                    <x-myui::avatar>
                        <x-myui::avatar.image src="https://github.com/shadcn.png" alt="@shadcn" />
                        <x-myui::avatar.fallback>CN</x-myui::avatar.fallback>
                    </x-myui::avatar>

                    <!-- With Fallback Only -->
                    <x-myui::avatar>
                        <x-myui::avatar.fallback>JD</x-myui::avatar.fallback>
                    </x-myui::avatar>

                    <!-- With Different Initials -->
                    <x-myui::avatar>
                        <x-myui::avatar.fallback>AB</x-myui::avatar.fallback>
                    </x-myui::avatar>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- Avatar Sizes -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Sizes</x-myui::card.title>
                <x-myui::card.description>
                    Use the <code>size</code> prop to change the size of the avatar.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="flex flex-wrap items-center gap-4">
                    <x-myui::avatar size="sm">
                        <x-myui::avatar.image src="https://github.com/shadcn.png" alt="@shadcn" />
                        <x-myui::avatar.fallback>CN</x-myui::avatar.fallback>
                    </x-myui::avatar>

                    <x-myui::avatar size="default">
                        <x-myui::avatar.image src="https://github.com/shadcn.png" alt="@shadcn" />
                        <x-myui::avatar.fallback>CN</x-myui::avatar.fallback>
                    </x-myui::avatar>

                    <x-myui::avatar size="lg">
                        <x-myui::avatar.image src="https://github.com/shadcn.png" alt="@shadcn" />
                        <x-myui::avatar.fallback>CN</x-myui::avatar.fallback>
                    </x-myui::avatar>

                    <x-myui::avatar size="xl">
                        <x-myui::avatar.image src="https://github.com/shadcn.png" alt="@shadcn" />
                        <x-myui::avatar.fallback>CN</x-myui::avatar.fallback>
                    </x-myui::avatar>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- Avatar with Badge -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>With Badge</x-myui::card.title>
                <x-myui::card.description>
                    Use the <code>AvatarBadge</code> component to add a badge to the avatar.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="flex flex-wrap items-center gap-4">
                    <!-- Online Badge -->
                    <x-myui::avatar>
                        <x-myui::avatar.image src="https://github.com/shadcn.png" alt="@shadcn" />
                        <x-myui::avatar.fallback>CN</x-myui::avatar.fallback>
                        <x-myui::avatar.badge class="bg-green-500" />
                    </x-myui::avatar>

                    <!-- Offline Badge -->
                    <x-myui::avatar>
                        <x-myui::avatar.image src="https://github.com/shadcn.png" alt="@shadcn" />
                        <x-myui::avatar.fallback>CN</x-myui::avatar.fallback>
                        <x-myui::avatar.badge class="bg-gray-400" />
                    </x-myui::avatar>

                    <!-- Busy Badge -->
                    <x-myui::avatar>
                        <x-myui::avatar.image src="https://github.com/shadcn.png" alt="@shadcn" />
                        <x-myui::avatar.fallback>CN</x-myui::avatar.fallback>
                        <x-myui::avatar.badge class="bg-red-500" />
                    </x-myui::avatar>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- Avatar Group -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Avatar Group</x-myui::card.title>
                <x-myui::card.description>
                    Use the <code>AvatarGroup</code> component to display a group of avatars with overlapping styling.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="space-y-4">
                    <!-- Basic Group -->
                    <div>
                        <h4 class="text-sm font-medium mb-2">Basic Group</h4>
                        <x-myui::avatar.group>
                            <x-myui::avatar>
                                <x-myui::avatar.image src="https://github.com/shadcn.png" alt="User 1" />
                                <x-myui::avatar.fallback>U1</x-myui::avatar.fallback>
                            </x-myui::avatar>
                            <x-myui::avatar>
                                <x-myui::avatar.fallback>U2</x-myui::avatar.fallback>
                            </x-myui::avatar>
                            <x-myui::avatar>
                                <x-myui::avatar.fallback>U3</x-myui::avatar.fallback>
                            </x-myui::avatar>
                            <x-myui::avatar>
                                <x-myui::avatar.fallback>U4</x-myui::avatar.fallback>
                            </x-myui::avatar>
                        </x-myui::avatar.group>
                    </div>

                    <!-- Group with Count -->
                    <div>
                        <h4 class="text-sm font-medium mb-2">With Count</h4>
                        <x-myui::avatar.group>
                            <x-myui::avatar>
                                <x-myui::avatar.image src="https://github.com/shadcn.png" alt="User 1" />
                                <x-myui::avatar.fallback>U1</x-myui::avatar.fallback>
                            </x-myui::avatar>
                            <x-myui::avatar>
                                <x-myui::avatar.fallback>U2</x-myui::avatar.fallback>
                            </x-myui::avatar>
                            <x-myui::avatar>
                                <x-myui::avatar.fallback>U3</x-myui::avatar.fallback>
                            </x-myui::avatar>
                            <x-myui::avatar.group-count count="5" />
                        </x-myui::avatar.group>
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
