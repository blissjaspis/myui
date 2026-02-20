# Badge Component

A badge component that follows shadcn/ui design patterns, perfect for displaying status, labels, or tags with various styles and interactive states.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | string | `'default'` | The visual style. Options: `'default'`, `'secondary'`, `'destructive'`, `'outline'`, `'ghost'`, `'link'`. |
| `asChild` | boolean | `false` | Renders the badge as the child element (useful for links). |

## Usage Examples

### Basic Badge

```blade
<x-myui::badge>New</x-myui::badge>
```

### Variants

```blade
<x-myui::badge>Default</x-myui::badge>
<x-myui::badge variant="secondary">Secondary</x-myui::badge>
<x-myui::badge variant="destructive">Destructive</x-myui::badge>
<x-myui::badge variant="outline">Outline</x-myui::badge>
<x-myui::badge variant="ghost">Ghost</x-myui::badge>
<x-myui::badge variant="link">Link</x-myui::badge>
```

### With Icon

Use `data-icon="inline-start"` or `data-icon="inline-end"` attributes on icons for proper spacing.

```blade
<x-myui::badge>
    <x-myui::icons.check data-icon="inline-start" class="w-3 h-3" />
    Verified
</x-myui::badge>

<x-myui::badge variant="secondary">
    <x-myui::icons.bookmark data-icon="inline-start" class="w-3 h-3" />
    Bookmarked
</x-myui::badge>

<x-myui::badge variant="outline">
    Premium
    <x-myui::icons.star data-icon="inline-end" class="w-3 h-3" />
</x-myui::badge>
```

### With Spinner

You can render a spinner inside the badge for loading states.

```blade
<x-myui::badge variant="destructive">
    <x-myui::icons.loading data-icon="inline-start" class="w-3 h-3 animate-spin" />
    Deleting
</x-myui::badge>

<x-myui::badge variant="secondary">
    <x-myui::icons.loading data-icon="inline-start" class="w-3 h-3 animate-spin" />
    Generating
</x-myui::badge>
```

### Link Badge (asChild)

Use the `asChild` prop to render badges as links while maintaining badge styling.

```blade
<x-myui::badge asChild>
    <a href="/profile">
        <x-myui::icons.external-link data-icon="inline-end" class="w-3 h-3" />
        Open Link
    </a>
</x-myui::badge>

<x-myui::badge variant="outline" asChild>
    <a href="/docs">Documentation</a>
</x-myui::badge>
```

### Custom Colors

You can customize badge colors by adding custom classes.

```blade
<x-myui::badge class="bg-blue-100 text-blue-800 hover:bg-blue-200">
    Blue Badge
</x-myui::badge>

<x-myui::badge class="bg-green-100 text-green-800 hover:bg-green-200">
    Green Badge
</x-myui::badge>
```

## Design System

This component follows shadcn/ui design patterns and includes:

- **Consistent sizing**: Fixed padding and font sizes for uniformity
- **Focus states**: Visible focus rings for accessibility
- **Hover effects**: Smooth transitions for interactive feedback
- **Icon integration**: Built-in support for icons with correct spacing
- **Link support**: asChild prop for semantic HTML links

