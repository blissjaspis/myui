# Tabs Component

A set of layered sections of content—known as tab panels—that are displayed one at a time.

## Components

- `x-myui::tabs`: The root container managing state.
- `x-myui::tabs.list`: The container for the tab triggers.
- `x-myui::tabs.trigger`: The button that activates a tab.
- `x-myui::tabs.content`: The content panel associated with a trigger.

## Props

### Tabs (Root)

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `defaultValue` | string | `''` | The value of the tab that should be active initially. |

### Tabs Trigger

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | string | `''` | The unique value identifying the tab. |

### Tabs Content

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | string | `''` | The value matching the trigger to display this content. |

## Usage Example

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

