# Checkbox Component

A checkbox control that allows the user to toggle between checked and not checked states.

## Overview

This package provides two checkbox component approaches:

1. **Single Checkbox Component** (`<x-myui::checkbox>`) - Complete checkbox with label and description in one file
2. **Composable Components** (`<x-myui::checkbox.*>`) - Individual components for custom layouts

---

## Single Checkbox Component

A complete checkbox solution with built-in label and description support. This is a standalone component that doesn't depend on any sub-components.

### File Location

```
resources/views/components/checkbox.blade.php
```

### Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `wire` | string | `null` | Livewire property for entanglement |
| `name` | string | `null` | Form input name (creates hidden input) |
| `id` | string | auto-generated | Checkbox ID for label association |
| `value` | string | `null` | Checkbox value attribute |
| `label` | string | `null` | Main label text |
| `description` | string | `null` | Description/helper text below label |
| `checked` | boolean | `false` | Initial checked state |
| `disabled` | boolean | `false` | Disable the checkbox |
| `required` | boolean | `false` | Make the checkbox required |

### Usage Examples

#### Basic Checkbox

```blade
<x-myui::checkbox
    id="terms"
    name="accept_terms"
    label="Accept terms and conditions"
/>
```

#### With Description

```blade
<x-myui::checkbox
    id="newsletter"
    name="subscribe"
    label="Subscribe to newsletter"
    description="Get the latest updates delivered to your inbox."
/>
```

#### Pre-checked

```blade
<x-myui::checkbox
    id="notifications"
    name="enable_notif"
    label="Enable notifications"
    :checked="true"
/>
```

#### Disabled State

```blade
<x-myui::checkbox
    id="premium"
    name="premium_feature"
    label="Premium feature"
    description="This feature is only available for Pro users."
    :disabled="true"
/>
```

#### Livewire Integration

```blade
<x-myui::checkbox
    wire="acceptTerms"
    label="I agree to the terms"
    description="You must accept to continue."
    :required="true"
/>
```

---

## Composable Components

For custom layouts, use the composable checkbox components located in `resources/views/components/checkbox/`.

### Available Components

| Component | File | Description |
|-----------|------|-------------|
| `<x-myui::checkbox>` | `index.blade.php` | Wrapper with Alpine.js state management |
| `<x-myui::checkbox.button>` | `button.blade.php` | The visual checkbox button/input |
| `<x-myui::checkbox.label>` | `label.blade.php` | Label associated with the checkbox |

### Folder Structure

```
resources/views/components/checkbox/
├── index.blade.php    # Wrapper component (x-data)
├── button.blade.php   # Checkbox button with checkmark
└── label.blade.php    # Label component
```

### Basic Composable Usage

```blade
<x-myui::checkbox id="enable-notif">
    <x-myui::checkbox.button id="enable-notif-btn" />
    <x-myui::checkbox.label for="enable-notif-btn">
        Enable notifications
    </x-myui::checkbox.label>
</x-myui::checkbox>
```

### With Custom Content

```blade
<x-myui::checkbox id="dark-mode" :checked="true">
    <x-myui::checkbox.button id="dark-mode-btn" />
    <div class="grid gap-1.5 leading-none">
        <x-myui::checkbox.label for="dark-mode-btn">
            Dark mode
        </x-myui::checkbox.label>
        <p class="text-sm text-muted-foreground">Switch between light and dark themes.</p>
    </div>
</x-myui::checkbox>
```

### Checkbox Group

```blade
<p class="text-sm font-medium mb-3">Select your interests:</p>
<div class="space-y-3">
    <x-myui::checkbox id="tech" name="interests[]" value="technology">
        <x-myui::checkbox.button id="tech-btn" />
        <x-myui::checkbox.label for="tech-btn">Technology</x-myui::checkbox.label>
    </x-myui::checkbox>
    
    <x-myui::checkbox id="sports" name="interests[]" value="sports">
        <x-myui::checkbox.button id="sports-btn" />
        <x-myui::checkbox.label for="sports-btn">Sports</x-myui::checkbox.label>
    </x-myui::checkbox>
</div>
```

---

## Component Props Reference

### `<x-myui::checkbox.button>` Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | string | auto-generated | Button ID |
| `disabled` | boolean | `false` | Disable the button |

### `<x-myui::checkbox.label>` Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `for` | string | `null` | Associated element ID |
| `id` | string | `null` | Alternative to `for` |

---

## Features

- **Dark Mode Support** - Full dark mode styling with `dark:` Tailwind classes
- **Keyboard Navigation** - Full keyboard support (Space, Enter)
- **Accessibility** - Proper ARIA attributes (`role="checkbox"`, `aria-checked`)
- **Form Integration** - Hidden input support for traditional form submissions
- **Livewire Support** - Native entanglement for reactive updates
- **Transitions** - Smooth state transitions
- **Disabled States** - Visual and functional disabled support

## CSS Classes

Components use standard Tailwind CSS classes:

- `border-primary` - Checkbox border color
- `data-[state=checked]:bg-primary` - Checked background
- `text-muted-foreground` - Description text color
- `peer-disabled:*` - Disabled state styling

Ensure your `tailwind.config.js` includes these colors or customize the component templates.

## View the Component

Visit `/checkbox` in your workbench to see the checkbox component examples.
