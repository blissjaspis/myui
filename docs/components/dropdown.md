# Dropdown Component

A menu that is displayed to the user when triggered, usually by clicking a button.

## Components

- `x-myui::dropdown`: The root container.
- `x-myui::dropdown.trigger`: The button that toggles the dropdown.
- `x-myui::dropdown.content`: The dropdown menu content.
- `x-myui::dropdown.item`: Individual menu items.
- `x-myui::dropdown.label`: A label for a group of items.
- `x-myui::dropdown.separator`: A divider between items.

## Props (Dropdown Content)

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `align` | string | `'left'` | Alignment of the dropdown. Options: `'left'`, `'right'`, `'top'`. |
| `width` | string | `'w-48'` | The width of the dropdown menu. |
| `offset` | string | `'2'` | The offset of the dropdown menu. |

## Usage Example

```blade
<x-myui::dropdown>
    <x-myui::dropdown.trigger>
        Open Menu
    </x-myui::dropdown.trigger>
    
    <x-myui::dropdown.content align="right">
        <x-myui::dropdown.label>My Account</x-myui::dropdown.label>
        <x-myui::dropdown.separator />
        <x-myui::dropdown.item href="/profile">Profile</x-myui::dropdown.item>
        <x-myui::dropdown.item>Billing</x-myui::dropdown.item>
        <x-myui::dropdown.item variant="destructive">Logout</x-myui::dropdown.item>
    </x-myui::dropdown.content>
</x-myui::dropdown>
```

