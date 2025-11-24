# Alert Component

Displays a callout for user attention.

## Components

- `x-myui::alert`: The root container.
- `x-myui::alert.icon`: The icon to display in the alert.
- `x-myui::alert.title`: The title of the alert.
- `x-myui::alert.description`: The description of the alert.

## Props (Alert)

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `color` | string | `'default'` | The color of the alert. Options: `'default'`, `'destructive'`, `'warning'`, `'success'`. |

## Props (Alert Icon)

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | string | `'default'` | The variant of the icon. Options: `'default'`, `'destructive'`, `'warning'`, `'success'`. |
| `class` | string | `'w-5 h-5'` | The class to apply to the icon. |

## Usage

```blade
<x-myui::alert>
    <x-myui::alert.icon />
    <x-myui::alert.title>Heads up!</x-myui::alert.title>
    <x-myui::alert.description>
        You can add components to your app using the cli.
    </x-myui::alert.description>
</x-myui::alert>
```

## Examples

### Destructive

```blade
<x-myui::alert color="destructive">
    <x-myui::alert.icon variant="destructive" />
    <x-myui::alert.title>Error</x-myui::alert.title>
    <x-myui::alert.description>
        Your session has expired. Please log in again.
    </x-myui::alert.description>
</x-myui::alert>
```

### Warning

```blade
<x-myui::alert color="warning">
    <x-myui::alert.icon variant="warning" />
    <x-myui::alert.title>Warning</x-myui::alert.title>
    <x-myui::alert.description>
        Your account is pending approval.
    </x-myui::alert.description>
</x-myui::alert>
```

### Success

```blade
<x-myui::alert color="success">
    <x-myui::alert.icon />
    <x-myui::alert.title>Success</x-myui::alert.title>
    <x-myui::alert.description>
        Your changes have been saved.
    </x-myui::alert.description>
</x-myui::alert>
```

