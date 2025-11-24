# Navbar Component

A navigation header typically placed at the top of the page.

## Components

- `x-myui::navbar`: The root container.
- `x-myui::navbar.content`: Container for main content.
- `x-myui::navbar.title`: The branding or page title.

## Usage Example

```blade
<x-myui::navbar>
    <x-myui::navbar.content>
        <div class="flex items-center justify-between">
            <x-myui::navbar.title>My App</x-myui::navbar.title>
            <div class="flex items-center gap-4">
                <x-myui::link href="/dashboard">Dashboard</x-myui::link>
                <x-myui::link href="/settings">Settings</x-myui::link>
            </div>
        </div>
    </x-myui::navbar.content>
</x-myui::navbar>
```

