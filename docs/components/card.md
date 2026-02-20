# Card Component

A flexible card container that follows shadcn/ui design patterns. Perfect for displaying content in organized, visually appealing sections.

## Components

- `x-myui::card`: The root container with border, background, and shadow.
- `x-myui::card.header`: The header section with proper spacing.
- `x-myui::card.title`: The title text with appropriate typography.
- `x-myui::card.description`: The description text with muted styling.
- `x-myui::card.content`: The main content area.
- `x-myui::card.footer`: The footer section for actions or additional info.

## Usage Examples

### Basic Card

```blade
<x-myui::card>
    <x-myui::card.header>
        <x-myui::card.title>Card Title</x-myui::card.title>
        <x-myui::card.description>
            A brief description of the card content.
        </x-myui::card.description>
    </x-myui::card.header>
    <x-myui::card.content>
        <p>This is the main content area of the card.</p>
    </x-myui::card.content>
</x-myui::card>
```

### Card with Footer

```blade
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
    <x-myui::card.footer>
        <x-myui::button variant="outline" size="sm">View Details</x-myui::button>
        <x-myui::button size="sm">Complete</x-myui::button>
    </x-myui::card.footer>
</x-myui::card>
```

### Simple Card

```blade
<x-myui::card>
    <x-myui::card.content>
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
```

### Card with Form

```blade
<x-myui::card class="w-[350px]">
    <x-myui::card.header>
        <x-myui::card.title>Create Project</x-myui::card.title>
        <x-myui::card.description>
            Deploy your new project in one-click.
        </x-myui::card.description>
    </x-myui::card.header>
    <x-myui::card.content>
        <div class="grid w-full items-center gap-4">
            <div class="flex flex-col space-y-1.5">
                <label class="text-sm font-medium">Name</label>
                <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm" placeholder="Name of your project" />
            </div>
        </div>
    </x-myui::card.content>
    <x-myui::card.footer class="flex justify-between">
        <x-myui::button variant="outline">Cancel</x-myui::button>
        <x-myui::button>Deploy</x-myui::button>
    </x-myui::card.footer>
</x-myui::card>
```

## Design System

This component follows shadcn/ui design patterns and includes:

- **Consistent spacing**: Standardized padding for all sections
- **Proper typography**: Title and description with appropriate font weights and colors
- **Flexible layout**: Support for various content arrangements
- **Accessibility**: Proper semantic structure for screen readers
- **Customizable**: All components accept additional CSS classes via attributes

