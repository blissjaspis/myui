# Popover Component

Displays rich content in a portal, triggered by a button.

## Overview

The Popover component provides a floating panel that appears when a user clicks on a trigger element. It's built with Laravel Blade and Alpine.js, following the design patterns from [shadcn/ui Popover](https://ui.shadcn.com/docs/components/radix/popover).

## Requirements

This component requires the following Alpine.js plugins:

1. **@alpinejs/anchor** - For positioning the popover relative to the trigger
2. **@alpinejs/focus** - For focus trapping within the popover

Load them in your layout before Alpine.js core:

```html
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/anchor@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

## Features

- **Portal-based rendering**: Content appears in a floating layer above other content
- **Flexible positioning**: Control alignment (start, center, end) and side (top, right, bottom, left)
- **Keyboard navigation**: Close with Escape key, focus trapping inside the popover
- **Click outside to close**: Automatically closes when clicking outside
- **Accessible**: Proper ARIA attributes for screen readers
- **asChild support**: Use custom trigger elements
- **Smooth animations**: Transition effects when opening/closing

## Components

| Component | Description |
|-----------|-------------|
| `x-myui::popover` | The root container managing state |
| `x-myui::popover.trigger` | The element that opens the popover |
| `x-myui::popover.content` | The content to display in the portal |
| `x-myui::popover.header` | Optional header container for title/description |
| `x-myui::popover.title` | Title text for the header |
| `x-myui::popover.description` | Description text for the header |

## File Locations

```
resources/views/components/
├── popover.blade.php                    # Single-file component
└── popover/
    ├── index.blade.php                  # Root wrapper
    ├── trigger.blade.php                # Trigger button
    ├── content.blade.php                # Content container
    ├── header.blade.php                 # Header container
    ├── title.blade.php                  # Title element
    └── description.blade.php            # Description element
```

## Usage

### Basic Example

A simple popover with a header, title, and description:

```blade
<x-myui::popover>
    <x-myui::popover.trigger>
        Open Popover
    </x-myui::popover.trigger>

    <x-myui::popover.content>
        <x-myui::popover.header>
            <x-myui::popover.title>Dimensions</x-myui::popover.title>
            <x-myui::popover.description>
                Set the dimensions for the layer.
            </x-myui::popover.description>
        </x-myui::popover.header>
        <div class="grid gap-2 mt-4">
            <div class="grid grid-cols-3 items-center gap-4">
                <label class="text-sm">Width</label>
                <x-myui::input type="text" value="100%" class="col-span-2 h-8" />
            </div>
            <div class="grid grid-cols-3 items-center gap-4">
                <label class="text-sm">Height</label>
                <x-myui::input type="text" value="100%" class="col-span-2 h-8" />
            </div>
        </div>
    </x-myui::popover.content>
</x-myui::popover>
```

### Alignment

Use the `align` prop on `popover.content` to control the horizontal alignment:

```blade
<x-myui::popover>
    <x-myui::popover.trigger asChild>
        <x-myui::button variant="outline">Align Start</x-myui::button>
    </x-myui::popover.trigger>

    <x-myui::popover.content align="start">
        <x-myui::popover.header>
            <x-myui::popover.title>Align Start</x-myui::popover.title>
            <x-myui::popover.description>
                This popover is aligned to the start of the trigger.
            </x-myui::popover.description>
        </x-myui::popover.header>
    </x-myui::popover.content>
</x-myui::popover>
```

Available align values: `start`, `center` (default), `end`

### Side Positioning

Use the `side` prop to control which side of the trigger the popover appears on:

```blade
<x-myui::popover>
    <x-myui::popover.trigger asChild>
        <x-myui::button variant="outline">Top</x-myui::button>
    </x-myui::popover.trigger>

    <x-myui::popover.content side="top">
        <x-myui::popover.header>
            <x-myui::popover.title>Top Side</x-myui::popover.title>
            <x-myui::popover.description>
                This popover appears above the trigger.
            </x-myui::popover.description>
        </x-myui::popover.header>
    </x-myui::popover.content>
</x-myui::popover>
```

Available side values: `top`, `right`, `bottom` (default), `left`

### With Form

A popover can contain form elements:

```blade
<x-myui::popover>
    <x-myui::popover.trigger asChild>
        <x-myui::button variant="outline">Open Form</x-myui::button>
    </x-myui::popover.trigger>

    <x-myui::popover.content class="w-80">
        <div class="grid gap-4">
            <div class="space-y-2">
                <h4 class="font-medium leading-none">Update Profile</h4>
                <p class="text-sm text-muted-foreground">
                    Make changes to your profile here.
                </p>
            </div>
            <div class="grid gap-2">
                <div class="grid grid-cols-4 items-center gap-4">
                    <label class="text-right text-sm">Name</label>
                    <x-myui::input class="col-span-3 h-8" value="John Doe" />
                </div>
                <div class="grid grid-cols-4 items-center gap-4">
                    <label class="text-right text-sm">Email</label>
                    <x-myui::input class="col-span-3 h-8" value="john@example.com" />
                </div>
            </div>
            <x-myui::button size="sm" class="w-full">Save Changes</x-myui::button>
        </div>
    </x-myui::popover.content>
</x-myui::popover>
```

### Custom Trigger with asChild

Use `asChild` to use your own trigger element:

```blade
<x-myui::popover>
    <x-myui::popover.trigger asChild>
        <x-myui::button variant="outline">Custom Button</x-myui::button>
    </x-myui::popover.trigger>

    <x-myui::popover.content>
        <p>This popover uses a custom button as the trigger.</p>
    </x-myui::popover.content>
</x-myui::popover>
```

## Component Props Reference

### Popover (Root)

The root component accepts Alpine.js `x-model` binding:

```blade
<x-myui::popover x-model="open">
    ...
</x-myui::popover>
```

### Popover Trigger

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `asChild` | boolean | `false` | When true, applies trigger behavior to the child element |

### Popover Content

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `align` | string | `'center'` | Horizontal alignment: `start`, `center`, `end` |
| `side` | string | `'bottom'` | Which side to place the popover: `top`, `right`, `bottom`, `left` |
| `sideOffset` | number | `4` | Distance from the trigger in pixels |
| `teleport` | string | `'body'` | CSS selector for teleport target (e.g., `'body'`, `'#container'`) |

## CSS Classes

The following CSS classes are used for styling:

- `bg-popover` / `dark:bg-gray-800` - Background color
- `border` / `dark:border-gray-700` - Border styling
- `text-popover-foreground` / `dark:text-gray-200` - Text color
- `shadow-md` - Drop shadow
- `z-50` - Stack order
- `w-72` - Default width
- `rounded-md` - Border radius
- `p-4` - Inner padding

## Alpine.js Integration

The popover uses Alpine.js for state management and interactions:

- `x-data="{ open: false }"` - Controls visibility
- `x-teleport` - Portals content to the body (avoids z-index and overflow issues)
- `x-anchor` - Positions the content relative to the trigger
- `x-show` - Toggles visibility
- `x-transition` - Animation transitions
- `x-trap` - Focus trapping
- `@click.outside` - Close on outside click
- `@keydown.escape.window` - Close on Escape key

### Teleport

The popover content is automatically teleported to the document body using `x-teleport="body"`. This ensures:

- The popover appears above all other content (no z-index stacking issues)
- The popover isn't clipped by overflow-hidden containers
- Proper positioning regardless of parent containers

You can customize the teleport target:

```blade
<x-myui::popover.content teleport="#custom-container">
    ...
</x-myui::popover.content>
```

## Accessibility

- Trigger has `aria-haspopup="dialog"` and `:aria-expanded="open"`
- Content has `role="dialog"`
- Focus is trapped within the popover when open
- Escape key closes the popover
- Click outside closes the popover

## View the Component

You can view and test the popover component in the workbench:

[http://localhost:8080/popover](http://localhost:8080/popover)

## API Reference

For more details on the underlying behavior, see the [Radix UI Popover documentation](https://www.radix-ui.com/primitives/docs/components/popover).
