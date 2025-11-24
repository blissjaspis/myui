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

### Livewire Usage

This component is designed to work seamlessly with Livewire for state management.

```blade
<x-myui::checkbox model="isAdmin">
    <x-myui::checkbox.button />
    <x-myui::checkbox.title>Is Admin</x-myui::checkbox.title>
</x-myui::checkbox>
```

