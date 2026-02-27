# Select Component

A collection of select/dropdown components inspired by shadcn/ui design patterns, built with Laravel Blade and Alpine.js.

## Requirements

The select component requires the following Alpine.js plugins:

```html
<!-- Alpine.js Anchor plugin (for positioning) -->
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/anchor@3.x.x/dist/cdn.min.js"></script>
<!-- Alpine.js Focus plugin (for focus management) -->
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
<!-- Alpine.js Core -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

## Overview

This package provides two select component approaches:

1. **Shadcn-style Components** (`<x-myui::select>`) - Composable, modular components for full control
2. **Basic Select** (`<x-myui::select.basic>`) - All-in-one component with built-in features

---

## Shadcn-Style Components

Composable select components that follow shadcn/ui design patterns.

### Available Components

| Component | Description |
|-----------|-------------|
| `<x-myui::select>` | Main wrapper with Alpine.js state management |
| `<x-myui::select.trigger>` | Button to open/close the dropdown |
| `<x-myui::select.value>` | Displays selected value or placeholder |
| `<x-myui::select.content>` | Dropdown content container |
| `<x-myui::select.group>` | Groups items together |
| `<x-myui::select.item>` | Individual selectable option |
| `<x-myui::select.label>` | Label for a group |
| `<x-myui::select.separator>` | Visual divider between groups |

### Basic Usage

```blade
<x-myui::select name="theme">
    <x-myui::select.trigger>
        <x-myui::select.value placeholder="Select a theme" />
    </x-myui::select.trigger>
    <x-myui::select.content>
        <x-myui::select.item value="light">Light</x-myui::select.item>
        <x-myui::select.item value="dark">Dark</x-myui::select.item>
        <x-myui::select.item value="system">System</x-myui::select.item>
    </x-myui::select.content>
</x-myui::select>
```

### Component Props

#### `<x-myui::select>` Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `wire` | string | `null` | Livewire property for entanglement |
| `name` | string | `null` | Form input name (creates hidden input) |
| `value` | string | `null` | Initial selected value |
| `disabled` | boolean | `false` | Disable the entire select |
| `required` | boolean | `false` | Make the select required |

#### `<x-myui::select.trigger>` Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | string | `'default'` | Trigger size: `'sm'`, `'default'`, `'lg'` |
| `class` | string | `null` | Additional CSS classes |

#### `<x-myui::select.value>` Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `placeholder` | string | `null` | Placeholder text when nothing selected |

#### `<x-myui::select.content>` Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `position` | string | `'popper'` | Positioning: `'popper'`, `'item-aligned'` |
| `align` | string | `'center'` | Alignment: `'start'`, `'center'`, `'end'` |
| `side` | string | `'bottom'` | Side: `'top'`, `'bottom'` |
| `sideOffset` | int | `4` | Distance from trigger |
| `teleport` | string | `'body'` | Element to teleport content to |
| `matchTriggerWidth` | boolean | `true` | Match dropdown width to trigger button |
| `class` | string | `null` | Additional CSS classes |

> **Note:** The select content uses Alpine.js `x-teleport` to portal the dropdown to the document body. This ensures proper z-index handling and positioning even inside overflow containers or modals. By default, the dropdown width automatically matches the trigger button's width using Alpine's anchor plugin.

#### `<x-myui::select.item>` Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | string | `null` | The option value (required) |
| `disabled` | boolean | `false` | Disable this item |

### Usage Examples

#### With Groups and Separators

```blade
<x-myui::select name="fruit">
    <x-myui::select.trigger>
        <x-myui::select.value placeholder="Select a fruit" />
    </x-myui::select.trigger>
    <x-myui::select.content>
        <x-myui::select.group>
            <x-myui::select.label>Citrus</x-myui::select.label>
            <x-myui::select.item value="orange">Orange</x-myui::select.item>
            <x-myui::select.item value="lemon">Lemon</x-myui::select.item>
        </x-myui::select.group>
        <x-myui::select.separator />
        <x-myui::select.group>
            <x-myui::select.label>Berries</x-myui::select.label>
            <x-myui::select.item value="strawberry">Strawberry</x-myui::select.item>
            <x-myui::select.item value="blueberry">Blueberry</x-myui::select.item>
        </x-myui::select.group>
    </x-myui::select.content>
</x-myui::select>
```

#### With Disabled Items

```blade
<x-myui::select name="plan">
    <x-myui::select.trigger>
        <x-myui::select.value placeholder="Select a plan" />
    </x-myui::select.trigger>
    <x-myui::select.content>
        <x-myui::select.item value="free">Free</x-myui::select.item>
        <x-myui::select.item value="pro">Pro</x-myui::select.item>
        <x-myui::select.item value="enterprise" disabled>Enterprise</x-myui::select.item>
    </x-myui::select.content>
</x-myui::select>
```

#### Size Variants

```blade
<!-- Small -->
<x-myui::select.trigger size="sm">
    <x-myui::select.value placeholder="Small trigger" />
</x-myui::select.trigger>

<!-- Default -->
<x-myui::select.trigger size="default">
    <x-myui::select.value placeholder="Default trigger" />
</x-myui::select.trigger>

<!-- Large -->
<x-myui::select.trigger size="lg">
    <x-myui::select.value placeholder="Large trigger" />
</x-myui::select.trigger>
```

#### Livewire Integration

```blade
<x-myui::select wire="selectedUser">
    <x-myui::select.trigger>
        <x-myui::select.value placeholder="Choose a user" />
    </x-myui::select.trigger>
    <x-myui::select.content>
        @foreach($users as $user)
            <x-myui::select.item :value="$user->id">{{ $user->name }}</x-myui::select.item>
        @endforeach
    </x-myui::select.content>
</x-myui::select>
```

#### Custom Dropdown Width

By default, the dropdown automatically matches the trigger button's width. To use a custom width instead:

```blade
<x-myui::select name="theme">
    <x-myui::select.trigger>
        <x-myui::select.value placeholder="Select a theme" />
    </x-myui::select.trigger>
    <x-myui::select.content :matchTriggerWidth="false" class="w-96">
        <x-myui::select.item value="light">Light</x-myui::select.item>
        <x-myui::select.item value="dark">Dark</x-myui::select.item>
        <x-myui::select.item value="system">System</x-myui::select.item>
    </x-myui::select.content>
</x-myui::select>
```

---

## Select Basic Component

A complete, all-in-one select component with built-in search and clear functionality.

### Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `name` | string | - | The name attribute for form submission (required if not using Livewire) |
| `label` | string | - | Label text displayed above the select |
| `options` | array | `[]` | Array of options with `label` and `value` keys |
| `placeholder` | string | `'Select an option...'` | Placeholder text |
| `wire` | string | `null` | Livewire property to bind to |
| `showClearIcon` | boolean | `false` | Show a clear button to reset selection |
| `showSearch` | boolean | `false` | Show a search input in the dropdown |

### Usage Example

```blade
<x-myui::select.basic
    name="user_id"
    label="Select User"
    :options="$users"
    placeholder="Choose a user..."
    wire="selectedUser"
    show-search
    show-clear-icon
/>
```

### Options Array Structure

```php
$users = [
    ['label' => 'John Doe', 'value' => 1],
    ['label' => 'Jane Smith', 'value' => 2],
    ['label' => 'Bob Johnson', 'value' => 3],
];
```

### Livewire Integration

The basic select component listens for `updateOptions` events to dynamically update options.

**Dispatching from Livewire:**

```php
$this->dispatch('updateOptions', [
    [
        'target' => 'modelName',
        'options' => $newOptions,
        'reset' => ['otherModelName']
    ]
]);
```

---

## Features

- **Dark Mode Support** - All components include dark mode styling
- **Keyboard Navigation** - Full keyboard support (Enter, Space, Escape, Tab)
- **Accessibility** - Proper ARIA attributes and roles
- **Form Integration** - Hidden input support for traditional form submissions
- **Livewire Support** - Native entanglement for reactive updates
- **Transitions** - Smooth open/close animations with Alpine.js

## CSS Classes

Components use standard Tailwind CSS with these custom properties:

- `border-input` - Input border color
- `bg-popover` - Dropdown background
- `text-popover-foreground` - Dropdown text color
- `bg-accent` / `text-accent-foreground` - Selected/hover states
- `text-muted-foreground` - Placeholder text

Ensure your `tailwind.config.js` includes these colors or customize the component templates.
