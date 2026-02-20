# Alert Component

A callout for user attention that follows shadcn/ui design patterns. Perfect for displaying important messages, warnings, or notifications.

## Components

- `x-myui::alert`: The root container with variants for different message types.
- `x-myui::alert.title`: The title of the alert.
- `x-myui::alert.description`: The description/body text of the alert.

## Props (Alert)

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | string | `'default'` | The visual style. Options: `'default'`, `'destructive'`. |

## Usage

```blade
<x-myui::alert>
    <x-myui::icons.check class="h-4 w-4" />
    <div>
        <x-myui::alert.title>Success!</x-myui::alert.title>
        <x-myui::alert.description>
            Your changes have been saved successfully.
        </x-myui::alert.description>
    </div>
</x-myui::alert>
```

## Examples

### Default Alert

```blade
<x-myui::alert>
    <x-myui::icons.check class="h-4 w-4" />
    <div>
        <x-myui::alert.title>Success!</x-myui::alert.title>
        <x-myui::alert.description>
            Your changes have been saved successfully.
        </x-myui::alert.description>
    </div>
</x-myui::alert>
```

### Destructive Alert

```blade
<x-myui::alert variant="destructive">
    <x-myui::icons.x class="h-4 w-4" />
    <div>
        <x-myui::alert.title>Error!</x-myui::alert.title>
        <x-myui::alert.description>
            Something went wrong. Please try again.
        </x-myui::alert.description>
    </div>
</x-myui::alert>
```

### With Custom Icons

```blade
<x-myui::alert>
    <x-myui::icons.loading class="h-4 w-4 animate-spin" />
    <div>
        <x-myui::alert.title>Loading...</x-myui::alert.title>
        <x-myui::alert.description>
            Please wait while we process your request.
        </x-myui::alert.description>
    </div>
</x-myui::alert>

<x-myui::alert>
    <x-myui::icons.bell class="h-4 w-4" />
    <div>
        <x-myui::alert.title>Notification</x-myui::alert.title>
        <x-myui::alert.description>
            You have 3 unread messages in your inbox.
        </x-myui::alert.description>
    </div>
</x-myui::alert>

<x-myui::alert>
    <x-myui::icons.info class="h-4 w-4" />
    <div>
        <x-myui::alert.title>Information</x-myui::alert.title>
        <x-myui::alert.description>
            This is an informational message that provides additional context.
        </x-myui::alert.description>
    </div>
</x-myui::alert>
```

## Design System

This component follows shadcn/ui design patterns and includes:

- **Icon positioning**: Automatic spacing and positioning for icons
- **Accessibility**: Proper `role="alert"` attribute for screen readers
- **Consistent spacing**: Standardized padding and layout
- **Flexible icons**: Support for any icon component or custom SVG
- **Title/description structure**: Clear content hierarchy for better UX

