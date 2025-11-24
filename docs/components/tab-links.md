# Tab Links Component

A navigation component meant for switching between different pages or views using links.

## Components

- `x-myui::tab-links`: The root container.
- `x-myui::tab-links.list`: The list container for links.
- `x-myui::tab-links.link`: The individual link item.

## Props (Link)

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `status` | string | `''` | The state of the link. Use `'active'` for the current page. |
| `href` | string | - | The URL the link points to (passed via attributes). |

## Usage Example

```blade
<x-myui::tab-links>
    <x-myui::tab-links.list>
        <x-myui::tab-links.link href="/account" status="active">
            Account
        </x-myui::tab-links.link>
        <x-myui::tab-links.link href="/password">
            Password
        </x-myui::tab-links.link>
    </x-myui::tab-links.list>
</x-myui::tab-links>
```

