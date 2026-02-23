# Sheet Component

A slide-out panel (drawer) that slides in from any edge of the screen.

## Overview

The Sheet component provides a modal panel that slides in from the left, right, top, or bottom of the screen. It's built with Laravel Blade and Alpine.js, following the design patterns from [shadcn/ui Sheet](https://ui.shadcn.com/docs/components/radix/sheet).

## Requirements

This component requires the **@alpinejs/focus** plugin for focus trapping:

```html
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

## Features

- **Multiple sides**: Slides in from top, right, bottom, or left
- **Modal overlay**: Blocks interaction with the rest of the page
- **Teleport support**: Content is teleported to the document body
- **Focus trapping**: Focus stays within the sheet while open
- **Keyboard navigation**: Close with Escape key
- **Click outside to close**: Click the overlay to close
- **Scroll locking**: Prevents background scrolling when open
- **asChild support**: Use custom trigger elements
- **Multiple sizes**: sm, default, lg, xl, 2xl, full
- **Smooth animations**: Enter and exit transitions based on side

## Components

| Component | Description |
|-----------|-------------|
| `x-myui::sheet` | The root container managing state |
| `x-myui::sheet.trigger` | The element that opens the sheet |
| `x-myui::sheet.content` | Contains the sheet panel, overlay, and close button |
| `x-myui::sheet.header` | Optional header container |
| `x-myui::sheet.title` | Title text for the header |
| `x-myui::sheet.description` | Description text for the header |
| `x-myui::sheet.footer` | Footer container for actions |
| `x-myui::sheet.overlay` | Standalone overlay component (optional) |

## File Locations

```
resources/views/components/
├── sheet.blade.php                    # Single-file component (if needed)
└── sheet/
    ├── index.blade.php                # Root wrapper
    ├── trigger.blade.php              # Trigger button
    ├── content.blade.php              # Content container (includes overlay)
    ├── header.blade.php               # Header container
    ├── title.blade.php                # Title element
    ├── description.blade.php          # Description element
    ├── footer.blade.php               # Footer container
    └── overlay.blade.php              # Standalone overlay
```

## Usage

### Basic Sheet (Right Side)

A simple sheet sliding in from the right:

```blade
<x-myui::sheet>
    <x-myui::sheet.trigger asChild>
        <x-myui::button variant="outline">Open Sheet</x-myui::button>
    </x-myui::sheet.trigger>

    <x-myui::sheet.content>
        <x-myui::sheet.header>
            <x-myui::sheet.title>Sheet Title</x-myui::sheet.title>
            <x-myui::sheet.description>
                This sheet slides in from the right side of the screen.
            </x-myui::sheet.description>
        </x-myui::sheet.header>
        <div class="py-4">
            <p class="text-sm text-muted-foreground">
                Your content goes here.
            </p>
        </div>
        <x-myui::sheet.footer>
            <x-myui::button variant="outline" @click="closeSheet()">Cancel</x-myui::button>
            <x-myui::button>Save Changes</x-myui::button>
        </x-myui::sheet.footer>
    </x-myui::sheet.content>
</x-myui::sheet>
```

### Side Variants

Sheets can slide in from different sides using the `side` prop:

```blade
{{-- Left Side --}}
<x-myui::sheet>
    <x-myui::sheet.trigger asChild>
        <x-myui::button variant="outline">From Left</x-myui::button>
    </x-myui::sheet.trigger>
    <x-myui::sheet.content side="left">
        <x-myui::sheet.header>
            <x-myui::sheet.title>Left Sheet</x-myui::sheet.title>
        </x-myui::sheet.header>
    </x-myui::sheet.content>
</x-myui::sheet>

{{-- Top Side --}}
<x-myui::sheet>
    <x-myui::sheet.trigger asChild>
        <x-myui::button variant="outline">From Top</x-myui::button>
    </x-myui::sheet.trigger>
    <x-myui::sheet.content side="top">
        <x-myui::sheet.header>
            <x-myui::sheet.title>Top Sheet</x-myui::sheet.title>
        </x-myui::sheet.header>
    </x-myui::sheet.content>
</x-myui::sheet>

{{-- Bottom Side --}}
<x-myui::sheet>
    <x-myui::sheet.trigger asChild>
        <x-myui::button variant="outline">From Bottom</x-myui::button>
    </x-myui::sheet.trigger>
    <x-myui::sheet.content side="bottom">
        <x-myui::sheet.header>
            <x-myui::sheet.title>Bottom Sheet</x-myui::sheet.title>
        </x-myui::sheet.header>
    </x-myui::sheet.content>
</x-myui::sheet>
```

### Size Variants

Sheets can have different sizes using the `size` prop:

```blade
{{-- Small Sheet --}}
<x-myui::sheet>
    <x-myui::sheet.trigger asChild>
        <x-myui::button variant="outline">Small</x-myui::button>
    </x-myui::sheet.trigger>
    <x-myui::sheet.content size="sm">
        <x-myui::sheet.header>
            <x-myui::sheet.title>Small Sheet</x-myui::sheet.title>
        </x-myui::sheet.header>
    </x-myui::sheet.content>
</x-myui::sheet>

{{-- Large Sheet --}}
<x-myui::sheet>
    <x-myui::sheet.trigger asChild>
        <x-myui::button variant="outline">Large</x-myui::button>
    </x-myui::sheet.trigger>
    <x-myui::sheet.content size="lg">
        <x-myui::sheet.header>
            <x-myui::sheet.title>Large Sheet</x-myui::sheet.title>
        </x-myui::sheet.header>
    </x-myui::sheet.content>
</x-myui::sheet>

{{-- Full Width Sheet --}}
<x-myui::sheet>
    <x-myui::sheet.trigger asChild>
        <x-myui::button variant="outline">Full Width</x-myui::button>
    </x-myui::sheet.trigger>
    <x-myui::sheet.content size="full">
        <x-myui::sheet.header>
            <x-myui::sheet.title>Full Width Sheet</x-myui::sheet.title>
        </x-myui::sheet.header>
    </x-myui::sheet.content>
</x-myui::sheet>
```

Available sizes: `sm`, `default`, `lg`, `xl`, `2xl`, `full`

### Navigation Sheet (Common Use Case)

A sheet commonly used for navigation menus:

```blade
<x-myui::sheet>
    <x-myui::sheet.trigger asChild>
        <x-myui::button variant="ghost" size="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                <line x1="4" x2="20" y1="12" y2="12"/>
                <line x1="4" x2="20" y1="6" y2="6"/>
                <line x1="4" x2="20" y1="18" y2="18"/>
            </svg>
            <span class="sr-only">Toggle Menu</span>
        </x-myui::button>
    </x-myui::sheet.trigger>

    <x-myui::sheet.content side="left">
        <x-myui::sheet.header>
            <x-myui::sheet.title>Navigation</x-myui::sheet.title>
        </x-myui::sheet.header>
        <nav class="flex flex-col gap-4 mt-8">
            <a href="#" class="text-sm font-medium hover:underline">Home</a>
            <a href="#" class="text-sm font-medium hover:underline">About</a>
            <a href="#" class="text-sm font-medium hover:underline">Services</a>
            <a href="#" class="text-sm font-medium hover:underline">Contact</a>
        </nav>
    </x-myui::sheet.content>
</x-myui::sheet>
```

### With Form

Complete form example inside a sheet:

```blade
<x-myui::sheet>
    <x-myui::sheet.trigger asChild>
        <x-myui::button variant="outline">Edit Settings</x-myui::button>
    </x-myui::sheet.trigger>

    <x-myui::sheet.content>
        <x-myui::sheet.header>
            <x-myui::sheet.title>Edit Settings</x-myui::sheet.title>
            <x-myui::sheet.description>
                Make changes to your settings here. Click save when you're done.
            </x-myui::sheet.description>
        </x-myui::sheet.header>
        <div class="grid gap-4 py-4">
            <div class="grid gap-2">
                <label class="text-sm font-medium">Username</label>
                <x-myui::input placeholder="@username" />
            </div>
            <div class="grid gap-2">
                <label class="text-sm font-medium">Email</label>
                <x-myui::input type="email" placeholder="email@example.com" />
            </div>
            <div class="flex items-center gap-2">
                <x-myui::checkbox id="notifications" />
                <label for="notifications" class="text-sm font-medium">Enable notifications</label>
            </div>
        </div>
        <x-myui::sheet.footer>
            <x-myui::button variant="outline" @click="closeSheet()">Cancel</x-myui::button>
            <x-myui::button>Save Changes</x-myui::button>
        </x-myui::sheet.footer>
    </x-myui::sheet.content>
</x-myui::sheet>
```

### Custom Trigger with asChild

Use any element as a trigger:

```blade
<x-myui::sheet>
    <x-myui::sheet.trigger asChild>
        <a href="#" class="text-sm text-blue-600 hover:underline">Open Sheet</a>
    </x-myui::sheet.trigger>

    <x-myui::sheet.content>
        <x-myui::sheet.header>
            <x-myui::sheet.title>Custom Trigger</x-myui::sheet.title>
            <x-myui::sheet.description>
                This sheet was opened using a link as the trigger.
            </x-myui::sheet.description>
        </x-myui::sheet.header>
    </x-myui::sheet.content>
</x-myui::sheet>
```

## Component Props Reference

### Sheet (Root)

The root component accepts Alpine.js `x-model` binding:

```blade
<x-myui::sheet x-model="open">
    ...
</x-myui::sheet>
```

### Sheet Trigger

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `asChild` | boolean | `false` | When true, applies trigger behavior to the child element |

### Sheet Content

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `side` | string | `'right'` | Slide direction: `top`, `right`, `bottom`, `left` |
| `size` | string | `'default'` | Sheet size: `sm`, `default`, `lg`, `xl`, `2xl`, `full` |
| `teleport` | string | `'body'` | CSS selector for teleport target |

## Side and Size Combinations

### Left/Right Sides (Width-based)

| Size | Width |
|------|-------|
| `sm` | `max-w-xs` (320px) |
| `default` | `max-w-sm` (384px) |
| `lg` | `max-w-lg` (512px) |
| `xl` | `max-w-xl` (576px) |
| `2xl` | `max-w-2xl` (672px) |
| `full` | `100%` |

### Top/Bottom Sides (Height-based)

| Size | Max Height |
|------|------------|
| `sm` | `30vh` |
| `default` | `50vh` |
| `lg` | `70vh` |
| `xl` | `85vh` |
| `full` | `100vh` |

## Alpine.js Integration

The sheet uses Alpine.js for state management:

- `x-data="{ open: false }"` - Controls visibility
- `x-teleport` - Portals content to the body
- `x-show` - Toggles visibility
- `x-transition` - Animation transitions based on side
- `x-trap.inert.noscroll` - Focus trapping, inert, and scroll locking
- `@keydown.escape.window` - Close on Escape key
- `openSheet()` - Method to open the sheet
- `closeSheet()` - Method to close the sheet

### Methods

You can call these methods from within the sheet scope:

```blade
<x-myui::button variant="outline" @click="closeSheet()">Cancel</x-myui::button>
```

## CSS Classes

### Sheet Content
- Fixed positioning based on side
- `z-50` - High z-index
- `bg-background dark:bg-gray-800` - Background color
- `shadow-lg` - Drop shadow
- `transition ease-in-out duration-300` - Slide animation

### Overlay
- `fixed inset-0 z-50` - Full viewport coverage
- `bg-black/80` - Semi-transparent black
- `backdrop-blur-sm` - Background blur

## Accessibility

- Content has `role="dialog"` and `aria-modal="true"`
- Overlay prevents interaction with background
- Focus is trapped within the sheet
- Escape key closes the sheet
- Background scrolling is disabled when open
- Close button has `sr-only` text for screen readers

## View the Component

You can view and test the sheet component in the workbench:

[http://localhost:8080/sheet](http://localhost:8080/sheet)

## API Reference

For more details on the underlying behavior, see the [Radix UI Dialog documentation](https://www.radix-ui.com/primitives/docs/components/dialog) (Sheet is built on top of Dialog primitives).
