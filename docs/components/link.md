# Link Component

A styled anchor tag component for navigation links.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `color` | string | `'default'` | The color theme. Options: `'default'` (muted), `'red'`, `'blue'`, `'black'`. |

## Usage Example

### Default Link

```blade
<x-myui::link href="/home">
    Go Home
</x-myui::link>
```

### Colored Links

```blade
<x-myui::link href="/delete" color="red">
    Delete Account
</x-myui::link>

<x-myui::link href="/profile" color="blue">
    View Profile
</x-myui::link>

<x-myui::link href="/settings" color="black">
    Settings
</x-myui::link>
```

