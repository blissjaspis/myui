# Select Basic Component

A complete, all-in-one select component with search, clear functionality, and Livewire support.

> **Note:** For the full select component documentation including shadcn-style composable components, see [Select Component Documentation](./select.md).

## Overview

The `select.basic` component provides a quick, feature-rich select dropdown with built-in search, clear functionality, and Livewire integration. For more control and customization, consider using the [shadcn-style select components](./select.md#shadcn-style-components).

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `name` | string | - | The name attribute for the input field (required if not using Livewire) |
| `label` | string | - | The label text displayed above the select box |
| `options` | array | `[]` | An array of objects defining the options. Each object must have 'label' and 'value' keys |
| `placeholder` | string | `'Select an option...'` | The placeholder text when no option is selected |
| `wire` | string | `null` | The Livewire model property to bind to (e.g., 'userId') |
| `showClearIcon` | boolean | `false` | Whether to show a clear (x) icon to reset the selection |
| `showSearch` | boolean | `false` | Whether to show a search input inside the dropdown |

## Usage Example

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

## Options Array Structure

```php
$users = [
    ['label' => 'John Doe', 'value' => 1],
    ['label' => 'Jane Smith', 'value' => 2],
    ['label' => 'Bob Johnson', 'value' => 3],
];
```

## Livewire Integration

1. Use the `wire` prop to bind to a Livewire property
2. The component listens for `updateOptions` events to dynamically update options

**Event Payload Example:**

```php
$this->dispatch('updateOptions', [
    [
        'target' => 'modelName',
        'options' => [...$newOptions],
        'reset' => ['otherModelName']
    ]
]);
```

## See Also

- [Select Component](./select.md) - Full documentation including shadcn-style composable components
