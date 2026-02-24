# Tabs Component

A set of layered sections of content—known as tab panels—that are displayed one at a time.

Based on [shadcn/ui Tabs](https://ui.shadcn.com/docs/components/radix/tabs).

## Features

- **Keyboard navigation**: Arrow keys to navigate, Enter/Space to select
- **Disabled state**: Individual tabs can be disabled
- **Focus management**: Visible focus ring for accessibility
- **Data attributes**: `data-state="active|inactive"` for custom styling
- **CSS variables**: Automatic light/dark mode support

## Components

| Component | Description |
|-----------|-------------|
| `x-myui::tabs` | The root container managing state |
| `x-myui::tabs.list` | The container for the tab triggers |
| `x-myui::tabs.trigger` | The button that activates a tab |
| `x-myui::tabs.content` | The content panel associated with a trigger |

## Props

### Tabs (Root)

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `defaultValue` | string | `''` | The value of the tab that should be active initially. |

### Tabs List

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `class` | string | - | Additional Tailwind classes for the list container. |

### Tabs Trigger

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | string | `''` | The unique value identifying the tab. |
| `disabled` | boolean | `false` | When true, prevents user interaction. |

### Tabs Content

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | string | `''` | The value matching the trigger to display this content. |

## Usage Examples

### Basic Tabs

```blade
<x-myui::tabs defaultValue="account">
    <x-myui::tabs.list>
        <x-myui::tabs.trigger value="account">Account</x-myui::tabs.trigger>
        <x-myui::tabs.trigger value="password">Password</x-myui::tabs.trigger>
    </x-myui::tabs.list>
    
    <x-myui::tabs.content value="account">
        Make changes to your account here.
    </x-myui::tabs.content>
    
    <x-myui::tabs.content value="password">
        Change your password here.
    </x-myui::tabs.content>
</x-myui::tabs>
```

### Multiple Tabs

```blade
<x-myui::tabs defaultValue="overview">
    <x-myui::tabs.list class="w-full">
        <x-myui::tabs.trigger value="overview">Overview</x-myui::tabs.trigger>
        <x-myui::tabs.trigger value="analytics">Analytics</x-myui::tabs.trigger>
        <x-myui::tabs.trigger value="reports">Reports</x-myui::tabs.trigger>
        <x-myui::tabs.trigger value="settings">Settings</x-myui::tabs.trigger>
    </x-myui::tabs.list>

    <x-myui::tabs.content value="overview">
        View your key metrics and recent project activity.
    </x-myui::tabs.content>

    <x-myui::tabs.content value="analytics">
        Track your analytics and performance metrics.
    </x-myui::tabs.content>

    <x-myui::tabs.content value="reports">
        Generate and view detailed reports.
    </x-myui::tabs.content>

    <x-myui::tabs.content value="settings">
        Configure your dashboard settings.
    </x-myui::tabs.content>
</x-myui::tabs>
```

### With Forms

```blade
<x-myui::tabs defaultValue="login">
    <x-myui::tabs.list class="grid w-full grid-cols-2">
        <x-myui::tabs.trigger value="login">Login</x-myui::tabs.trigger>
        <x-myui::tabs.trigger value="register">Register</x-myui::tabs.trigger>
    </x-myui::tabs.list>

    <x-myui::tabs.content value="login">
        <div class="space-y-4 mt-4">
            <div class="space-y-2">
                <x-myui::label for="email">Email</x-myui::label>
                <x-myui::input id="email" type="email" placeholder="name@example.com" />
            </div>
            <x-myui::button class="w-full">Login</x-myui::button>
        </div>
    </x-myui::tabs.content>

    <x-myui::tabs.content value="register">
        <div class="space-y-4 mt-4">
            <div class="space-y-2">
                <x-myui::label for="name">Name</x-myui::label>
                <x-myui::input id="name" placeholder="John Doe" />
            </div>
            <x-myui::button class="w-full">Create Account</x-myui::button>
        </div>
    </x-myui::tabs.content>
</x-myui::tabs>
```

### Disabled Tab

```blade
<x-myui::tabs defaultValue="active">
    <x-myui::tabs.list>
        <x-myui::tabs.trigger value="active">Active</x-myui::tabs.trigger>
        <x-myui::tabs.trigger value="disabled" disabled>Disabled</x-myui::tabs.trigger>
    </x-myui::tabs.list>

    <x-myui::tabs.content value="active">
        This is the active tab content.
    </x-myui::tabs.content>
</x-myui::tabs>
```

## Accessibility

- Uses proper ARIA roles: `role="tab"`, `role="tablist"`, `role="tabpanel"`
- Implements `aria-selected` for active tab indication
- Focus ring visible on keyboard navigation
- `data-state` attributes for styling active/inactive states

## CSS Classes Reference

| Component | Key Classes |
|-----------|-------------|
| Tabs List | `inline-flex h-10 items-center justify-center rounded-md bg-muted p-1 text-muted-foreground` |
| Tabs Trigger | `inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow-sm` |
| Tabs Content | `mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2` |

## View the Component

You can view and test the tabs component in the workbench:

[http://localhost:8080/tabs](http://localhost:8080/tabs)
