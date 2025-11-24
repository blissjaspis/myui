# Checkbox Component

A control that allows the user to toggle between checked and unchecked states.

## Components

- `x-myui::checkbox`: The container managing state (optional wrapper).
- `x-myui::checkbox.button`: The actual checkbox button.

## Props (Checkbox Button)

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | string | `'default'` | The style variant. Options: `'default'` (standard), `'multiline'` (aligned to top for long text). |
| `model` | string | - | Livewire model property to bind to (optional). |

## Usage Example

### Basic Checkbox

```blade
<div class="flex items-center space-x-2">
    <x-myui::checkbox.button id="terms" />
    <label for="terms" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
        Accept terms and conditions
    </label>
</div>
```

### With Livewire

```blade
<x-myui::checkbox model="isAdmin">
    <x-myui::checkbox.button />
    <x-myui::checkbox.title>Is Admin</x-myui::checkbox.title>
</x-myui::checkbox>
```

