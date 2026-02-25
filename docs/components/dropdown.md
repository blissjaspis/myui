# Dropdown Menu Component

A dropdown menu displays a menu to the user — such as a set of actions or functions — triggered by a button.

## Components

- `x-myui::dropdown`: The root container with Alpine.js state management.
- `x-myui::dropdown.trigger`: The button that toggles the dropdown.
- `x-myui::dropdown.content`: The dropdown menu content container.
- `x-myui::dropdown.group`: Groups related items together.
- `x-myui::dropdown.item`: Individual menu items.
- `x-myui::dropdown.label`: A label for a group of items.
- `x-myui::dropdown.separator`: A divider between items.
- `x-myui::dropdown.shortcut`: Keyboard shortcut display.
- `x-myui::dropdown.checkbox-item`: A checkbox item for toggles.
- `x-myui::dropdown.radio-group`: Container for radio items.
- `x-myui::dropdown.radio-item`: A radio item for exclusive choices.
- `x-myui::dropdown.sub`: Container for nested submenus.
- `x-myui::dropdown.sub-trigger`: Trigger for opening a submenu.
- `x-myui::dropdown.sub-content`: The submenu content.

## Basic Usage

```blade
<x-myui::dropdown>
    <x-myui::dropdown.trigger variant="outline">Open</x-myui::dropdown.trigger>
    <x-myui::dropdown.content class="w-56">
        <x-myui::dropdown.label>My Account</x-myui::dropdown.label>
        <x-myui::dropdown.group>
            <x-myui::dropdown.item>Profile</x-myui::dropdown.item>
            <x-myui::dropdown.item>Billing</x-myui::dropdown.item>
            <x-myui::dropdown.item>Settings</x-myui::dropdown.item>
        </x-myui::dropdown.group>
        <x-myui::dropdown.separator />
        <x-myui::dropdown.item variant="destructive">Log out</x-myui::dropdown.item>
    </x-myui::dropdown.content>
</x-myui::dropdown>
```

## Props

### Dropdown Trigger

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | `string` | `default` | Button variant: `default`, `secondary`, `destructive`, `outline`, `ghost`, `link` |
| `size` | `string` | `default` | Button size: `sm`, `default`, `lg`, `icon` |

### Dropdown Content

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `align` | `string` | `left` | Alignment: `left`, `right` |
| `width` | `string` | `w-48` | Width class for the dropdown |

### Dropdown Item

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | `string` | `default` | Item variant: `default`, `destructive` |
| `disabled` | `boolean` | `false` | Disable the item |
| `href` | `string` | `null` | URL for link items |
| `inset` | `boolean` | `false` | Add left padding to align with checkbox items |

### Dropdown Label

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `inset` | `boolean` | `false` | Add left padding for alignment |

### Dropdown Checkbox Item

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `checked` | `boolean` | `false` | Initial checked state |
| `disabled` | `boolean` | `false` | Disable the item |

### Dropdown Radio Item

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | `string` | `null` | The radio value |
| `disabled` | `boolean` | `false` | Disable the item |

### Dropdown Sub Content

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `side` | `string` | `right` | Side to show submenu: `left`, `right` |
| `align` | `string` | `start` | Vertical alignment: `start`, `center`, `end` |

## Examples

### With Icons

Combine icons with labels for quick scanning:

```blade
<x-myui::dropdown>
    <x-myui::dropdown.trigger variant="outline">Actions</x-myui::dropdown.trigger>
    <x-myui::dropdown.content class="w-56">
        <x-myui::dropdown.group>
            <x-myui::dropdown.item>
                <svg class="mr-2 h-4 w-4"><!-- icon --></svg>
                <span>Back</span>
                <x-myui::dropdown.shortcut>⌘[</x-myui::dropdown.shortcut>
            </x-myui::dropdown.item>
        </x-myui::dropdown.group>
    </x-myui::dropdown.content>
</x-myui::dropdown>
```

### With Checkboxes

Use checkbox items for toggles:

```blade
<x-myui::dropdown>
    <x-myui::dropdown.trigger variant="outline">Notifications</x-myui::dropdown.trigger>
    <x-myui::dropdown.content class="w-56">
        <x-myui::dropdown.label>Notifications</x-myui::dropdown.label>
        <x-myui::dropdown.group>
            <x-myui::dropdown.checkbox-item checked>
                Show Notifications
            </x-myui::dropdown.checkbox-item>
            <x-myui::dropdown.checkbox-item>
                Play Sounds
            </x-myui::dropdown.checkbox-item>
        </x-myui::dropdown.group>
    </x-myui::dropdown.content>
</x-myui::dropdown>
```

### With Radio Group

Use radio items for exclusive choices:

```blade
<x-myui::dropdown>
    <x-myui::dropdown.trigger variant="outline">Position</x-myui::dropdown.trigger>
    <x-myui::dropdown.content class="w-56">
        <x-myui::dropdown.label>Panel Position</x-myui::dropdown.label>
        <x-myui::dropdown.radio-group value="top">
            <x-myui::dropdown.group>
                <x-myui::dropdown.radio-item value="top">Top</x-myui::dropdown.radio-item>
                <x-myui::dropdown.radio-item value="bottom">Bottom</x-myui::dropdown.radio-item>
            </x-myui::dropdown.group>
        </x-myui::dropdown.radio-group>
    </x-myui::dropdown.content>
</x-myui::dropdown>
```

### With Submenu

Nest secondary actions in a submenu:

```blade
<x-myui::dropdown>
    <x-myui::dropdown.trigger variant="outline">More</x-myui::dropdown.trigger>
    <x-myui::dropdown.content class="w-56">
        <x-myui::dropdown.item>Save</x-myui::dropdown.item>
        <x-myui::dropdown.separator />
        <x-myui::dropdown.sub>
            <x-myui::dropdown.sub-trigger>More Options</x-myui::dropdown.sub-trigger>
            <x-myui::dropdown.sub-content class="w-48">
                <x-myui::dropdown.item>Import</x-myui::dropdown.item>
                <x-myui::dropdown.item>Export</x-myui::dropdown.item>
            </x-myui::dropdown.sub-content>
        </x-myui::dropdown.sub>
    </x-myui::dropdown.content>
</x-myui::dropdown>
```

### Destructive Action

Use the destructive variant for dangerous actions:

```blade
<x-myui::dropdown.item variant="destructive">
    Delete Account
</x-myui::dropdown.item>
```

## Accessibility

- The dropdown uses `role="menu"` and `role="menuitem"` for proper semantics
- Keyboard navigation is supported (Escape to close, Tab for focus)
- Checkbox items use `role="menuitemcheckbox"`
- Radio items use `role="menuitemradio"`
- Disabled items have `aria-disabled="true"`
