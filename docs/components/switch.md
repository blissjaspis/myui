# Switch Component

A control that allows the user to toggle between checked and not checked states. Similar to a checkbox but designed as a sliding toggle switch.

## Overview

This package provides two switch component approaches:

1. **Single Switch Component** (`<x-myui::switch>`) - Complete switch with label and description in one file
2. **Composable Components** (`<x-myui::switch.*>`) - Individual components for custom layouts

---

## Single Switch Component

A complete switch solution with built-in label and description support.

### File Location

```
resources/views/components/switch.blade.php
```

### Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `wire` | string | `null` | Livewire property for entanglement |
| `name` | string | `null` | Form input name (creates hidden input) |
| `id` | string | auto-generated | Switch ID for label association |
| `value` | string | `null` | Switch value attribute |
| `label` | string | `null` | Main label text |
| `description` | string | `null` | Description/helper text |
| `error` | string | `null` | Error message to display |
| `checked` | boolean | `false` | Initial checked state |
| `disabled` | boolean | `false` | Disable the switch |
| `required` | boolean | `false` | Make the switch required |
| `invalid` | boolean | `false` | Show invalid/error state |
| `size` | string | `'default'` | Switch size: `'sm'` or `'default'` |

### Usage Examples

#### Basic Switch

```blade
<x-myui::switch
    id="airplane"
    name="airplane_mode"
    label="Airplane Mode"
/>
```

#### With Description

```blade
<x-myui::switch
    id="wifi"
    name="wifi_enabled"
    label="Wi-Fi"
    description="Connect to available networks"
    :checked="true"
/>
```

#### Size Variants

```blade
<!-- Small -->
<x-myui::switch
    id="small"
    label="Small Switch"
    size="sm"
/>

<!-- Default -->
<x-myui::switch
    id="default"
    label="Default Switch"
    size="default"
    :checked="true"
/>
```

#### Disabled State

```blade
<x-myui::switch
    id="premium"
    name="premium_feature"
    label="Premium feature"
    :disabled="true"
/>
```

#### Invalid State

```blade
<x-myui::switch
    id="terms"
    name="accept_terms"
    label="Accept terms"
    error="You must accept the terms to continue."
    :invalid="true"
/>
```

#### Livewire Integration

```blade
<x-myui::switch
    wire="notificationsEnabled"
    label="Enable notifications"
    description="Receive push notifications"
/>
```

---

## Composable Components

For custom layouts, use the composable switch components.

### Available Components

| Component | File | Description |
|-----------|------|-------------|
| `<x-myui::switch>` | `index.blade.php` | Wrapper with Alpine.js state |
| `<x-myui::switch.button>` | `button.blade.php` | The visual toggle switch |
| `<x-myui::switch.label>` | `label.blade.php` | Label component |

### Folder Structure

```
resources/views/components/switch/
├── index.blade.php    # Wrapper component
├── button.blade.php   # Toggle switch
└── label.blade.php    # Label component
```

### Basic Composable Usage

```blade
<x-myui::switch id="bluetooth">
    <x-myui::switch.button id="bluetooth-btn" />
    <x-myui::switch.label for="bluetooth-btn">
        Bluetooth
    </x-myui::switch.label>
</x-myui::switch>
```

### With Custom Content

```blade
<x-myui::switch id="notifications" :checked="true">
    <x-myui::switch.button id="notifications-btn" />
    <div class="grid gap-1.5 leading-none">
        <x-myui::switch.label for="notifications-btn">
            Push Notifications
        </x-myui::switch.label>
        <p class="text-sm text-muted-foreground">Receive notifications about updates.</p>
    </div>
</x-myui::switch>
```

### Choice Card Style

```blade
<label class="flex items-center justify-between rounded-lg border p-4 cursor-pointer hover:bg-muted/50">
    <div class="space-y-0.5">
        <div class="text-sm font-medium">Focus Mode</div>
        <div class="text-sm text-muted-foreground">Focus is shared across devices</div>
    </div>
    <x-myui::switch id="focus-mode" :checked="true" />
</label>
```

---

## Component Props Reference

### `<x-myui::switch.button>` Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | string | auto-generated | Button ID |
| `size` | string | `'default'` | Switch size: `'sm'` or `'default'` |
| `disabled` | boolean | `false` | Disable the switch |
| `invalid` | boolean | `false` | Show invalid/error state |

### `<x-myui::switch.label>` Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `for` | string | `null` | Associated element ID |
| `id` | string | `null` | Alternative to `for` |

---

## Features

- **Dark Mode Support** - Full dark mode styling with `dark:` Tailwind classes
- **Keyboard Navigation** - Full keyboard support (Space, Enter)
- **Accessibility** - Proper ARIA attributes (`role="switch"`, `aria-checked`, `aria-invalid`)
- **Form Integration** - Hidden input support for traditional form submissions
- **Livewire Support** - Native entanglement for reactive updates
- **Size Variants** - Small and default sizes available
- **Disabled States** - Visual and functional disabled support
- **Invalid States** - Error styling with red colors

## CSS Classes

Components use standard Tailwind CSS:

- `bg-input` - Unchecked background
- `data-[state=checked]:bg-primary` - Checked background
- `bg-background` - Thumb/knob background
- `border-destructive` / `bg-destructive` - Invalid state colors

Ensure your `tailwind.config.js` includes these colors or customize the component templates.

## View the Component

Visit `/switch` in your workbench to see the switch component examples.
