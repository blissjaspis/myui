# Select Multiple Component

A dropdown component that allows selecting multiple options with search functionality.

## Components

- `x-myui::select.multiple`: The main component for multiple selection.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `name` | string | required | The name attribute for the input field (will be suffixed with `[]`). |
| `label` | string | `''` | The label for the select field. |
| `options` | array | `[]` | An array of objects with `label` and `value` keys. |
| `placeholder` | string | `'Select options...'` | The placeholder text when no options are selected. |
| `selected` | array | `[]` | An array of initially selected values. |
| `wire` | string | `null` | The Livewire model property to bind to. |

## Usage

### Basic Usage

```blade
@php
    $options = [
        ['label' => 'Laravel', 'value' => 'laravel'],
        ['label' => 'React', 'value' => 'react'],
        ['label' => 'Vue', 'value' => 'vue'],
        ['label' => 'Angular', 'value' => 'angular'],
        ['label' => 'Svelte', 'value' => 'svelte'],
    ];
@endphp

<x-myui::select.multiple
    name="technologies"
    label="Technologies"
    :options="$options"
    placeholder="Select technologies..."
/>
```

### Pre-selected Values

```blade
<x-myui::select.multiple
    name="permissions"
    label="Permissions"
    :options="$permissions"
    :selected="['read', 'write']"
/>
```

### With Livewire

To use with Livewire, pass the property name to the `wire` prop. The component will update the Livewire property automatically.

```blade
<x-myui::select.multiple
    name="roles"
    label="Roles"
    :options="$roles"
    wire="selectedRoles"
/>
```

