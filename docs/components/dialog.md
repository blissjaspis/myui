# Dialog Component

A window overlaid on either the primary window or another dialog window, rendering the content underneath inert.

## Overview

The Dialog component provides a modal window that appears above other content and blocks interaction with the rest of the page. It's built with Laravel Blade and Alpine.js, following the design patterns from [shadcn/ui Dialog](https://ui.shadcn.com/docs/components/radix/dialog).

## Requirements

This component requires the **@alpinejs/focus** plugin for focus trapping:

```html
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

## Features

- **Modal overlay**: Blocks interaction with the rest of the page
- **Teleport support**: Content is teleported to the document body
- **Focus trapping**: Focus stays within the dialog while open
- **Keyboard navigation**: Close with Escape key
- **Click outside to close**: Click the overlay to close
- **Scroll locking**: Prevents background scrolling when open
- **asChild support**: Use custom trigger elements
- **Multiple sizes**: sm, default, lg, xl, full
- **Smooth animations**: Enter and exit transitions

## Components

| Component | Description |
|-----------|-------------|
| `x-myui::dialog` | The root container managing state |
| `x-myui::dialog.trigger` | The element that opens the dialog |
| `x-myui::dialog.content` | Contains the dialog, overlay, and close button |
| `x-myui::dialog.header` | Optional header container |
| `x-myui::dialog.title` | Title text for the header |
| `x-myui::dialog.description` | Description text for the header |
| `x-myui::dialog.footer` | Footer container for actions |
| `x-myui::dialog.overlay` | Standalone overlay component (optional) |

## File Locations

```
resources/views/components/
├── dialog.blade.php                    # Single-file component
└── dialog/
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

### Basic Example

A simple dialog with a header, title, and description:

```blade
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
```

### Size Variants

Dialogs can have different sizes using the `size` prop:

```blade
<x-myui::dialog>
    <x-myui::dialog.trigger asChild>
        <x-myui::button variant="outline">Large Dialog</x-myui::button>
    </x-myui::dialog.trigger>

    <x-myui::dialog.content size="lg">
        <x-myui::dialog.header>
            <x-myui::dialog.title>Large Dialog</x-myui::dialog.title>
            <x-myui::dialog.description>
                This is a large-sized dialog for more content.
            </x-myui::dialog.description>
        </x-myui::dialog.header>
        <div class="py-4">
            <!-- More content here -->
        </div>
    </x-myui::dialog.content>
</x-myui::dialog>
```

Available sizes: `sm`, `default` (max-w-lg), `lg`, `xl`, `2xl`, `full`

### Confirmation Dialog

A destructive action confirmation pattern:

```blade
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
```

### Custom Trigger with asChild

Use any element as a trigger:

```blade
<x-myui::dialog>
    <x-myui::dialog.trigger asChild>
        <a href="#" class="text-sm text-blue-600 hover:underline">Open Dialog</a>
    </x-myui::dialog.trigger>

    <x-myui::dialog.content>
        <x-myui::dialog.header>
            <x-myui::dialog.title>Custom Trigger</x-myui::dialog.title>
            <x-myui::dialog.description>
                This dialog was opened using a link as the trigger.
            </x-myui::dialog.description>
        </x-myui::dialog.header>
    </x-myui::dialog.content>
</x-myui::dialog>
```

### With Form

Complete form example inside a dialog:

```blade
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
                <x-myui::input placeholder="My Awesome Project" />
            </div>
            <div class="grid gap-2">
                <label class="text-sm font-medium">Description</label>
                <textarea class="..." placeholder="Describe your project..."></textarea>
            </div>
        </div>
        <x-myui::dialog.footer>
            <x-myui::button variant="outline" @click="closeDialog()">Cancel</x-myui::button>
            <x-myui::button>Create Project</x-myui::button>
        </x-myui::dialog.footer>
    </x-myui::dialog.content>
</x-myui::dialog>
```

## Component Props Reference

### Dialog (Root)

The root component accepts Alpine.js `x-model` binding:

```blade
<x-myui::dialog x-model="open">
    ...
</x-myui::dialog>
```

### Dialog Trigger

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `asChild` | boolean | `false` | When true, applies trigger behavior to the child element |

### Dialog Content

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | string | `'default'` | Dialog width: `sm`, `default`, `lg`, `xl`, `2xl`, `full` |
| `teleport` | string | `'body'` | CSS selector for teleport target |

## Alpine.js Integration

The dialog uses Alpine.js for state management:

- `x-data="{ open: false }"` - Controls visibility
- `x-teleport` - Portals content to the body
- `x-show` - Toggles visibility
- `x-transition` - Animation transitions
- `x-trap.inert.noscroll` - Focus trapping, inert, and scroll locking
- `@keydown.escape.window` - Close on Escape key
- `openDialog()` - Method to open the dialog
- `closeDialog()` - Method to close the dialog

### Methods

You can call these methods from within the dialog scope:

```blade
<x-myui::button variant="outline" @click="closeDialog()">Cancel</x-myui::button>
```

## CSS Classes

The following CSS classes are used for styling:

### Dialog Content
- `fixed left-[50%] top-[50%] z-50` - Centered positioning
- `w-full max-w-lg` - Width and max-width
- `translate-x-[-50%] translate-y-[-50%]` - Center offset
- `bg-background dark:bg-gray-800` - Background color
- `border dark:border-gray-700` - Border styling
- `shadow-lg` - Drop shadow
- `rounded-lg` - Border radius
- `p-6` - Inner padding

### Overlay
- `fixed inset-0 z-50` - Full viewport coverage
- `bg-black/80` - Semi-transparent black
- `backdrop-blur-sm` - Background blur

## Accessibility

- Content has `role="alertdialog"` for modal behavior
- Overlay prevents interaction with background
- Focus is trapped within the dialog
- Escape key closes the dialog
- Background scrolling is disabled when open
- Close button has `sr-only` text for screen readers

## View the Component

You can view and test the dialog component in the workbench:

[http://localhost:8080/dialog](http://localhost:8080/dialog)

## API Reference

For more details on the underlying behavior, see the [Radix UI Dialog documentation](https://www.radix-ui.com/primitives/docs/components/dialog).
