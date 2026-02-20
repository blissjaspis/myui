# Button Component

A versatile button component that follows shadcn/ui design patterns, with various styles, sizes, and interactive states.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | string | `'default'` | The visual style. Options: `'default'`, `'secondary'`, `'destructive'`, `'outline'`, `'ghost'`, `'link'`. |
| `size` | string | `'default'` | The size of the button. Options: `'xs'`, `'sm'`, `'default'`, `'lg'`, `'icon'`, `'icon-xs'`, `'icon-sm'`, `'icon-lg'`. |
| `asChild` | boolean | `false` | Renders the button as the child element (useful for links). |

## Usage Examples

### Basic Button

```blade
<x-myui::button>
    Click Me
</x-myui::button>
```

### Variants

```blade
<x-myui::button variant="default">Default</x-myui::button>
<x-myui::button variant="secondary">Secondary</x-myui::button>
<x-myui::button variant="destructive">Destructive</x-myui::button>
<x-myui::button variant="outline">Outline</x-myui::button>
<x-myui::button variant="ghost">Ghost</x-myui::button>
<x-myui::button variant="link">Link</x-myui::button>
```

### Sizes

```blade
<x-myui::button size="xs">Extra Small</x-myui::button>
<x-myui::button size="sm">Small</x-myui::button>
<x-myui::button size="default">Default</x-myui::button>
<x-myui::button size="lg">Large</x-myui::button>
```

### Icon Buttons

```blade
<x-myui::button size="icon-xs">
    <x-myui::icons.check class="w-3 h-3" />
</x-myui::button>
<x-myui::button size="icon-sm">
    <x-myui::icons.check class="w-4 h-4" />
</x-myui::button>
<x-myui::button size="icon">
    <x-myui::icons.check class="w-4 h-4" />
</x-myui::button>
<x-myui::button size="icon-lg">
    <x-myui::icons.check class="w-5 h-5" />
</x-myui::button>
```

### Buttons with Icons

Use `data-icon="inline-start"` or `data-icon="inline-end"` attributes on icons for proper spacing.

```blade
<x-myui::button>
    <x-myui::icons.check data-icon="inline-start" class="w-4 h-4" />
    Save Changes
</x-myui::button>

<x-myui::button variant="outline">
    <x-myui::icons.loading data-icon="inline-start" class="w-4 h-4 animate-spin" />
    Loading...
</x-myui::button>

<x-myui::button variant="secondary">
    Next Step
    <x-myui::icons.x data-icon="inline-end" class="w-4 h-4" />
</x-myui::button>
```

### Link Buttons (asChild)

Use the `asChild` prop to render buttons as links while maintaining button styling.

```blade
<x-myui::button asChild>
    <a href="/login">Login</a>
</x-myui::button>

<x-myui::button variant="outline" asChild>
    <a href="/register">Create Account</a>
</x-myui::button>

<x-myui::button variant="link" asChild>
    <a href="/docs">Documentation</a>
</x-myui::button>
```

### With Additional Attributes

```blade
<x-myui::button type="submit" disabled class="custom-class">
    Submit Form
</x-myui::button>
```

## Design System

This component follows shadcn/ui design patterns and includes:

- **Focus states**: Visible focus rings for accessibility
- **Disabled states**: Proper opacity and pointer-events handling
- **Hover effects**: Smooth transitions for interactive feedback
- **Consistent spacing**: Proper padding and sizing across all variants
- **Icon integration**: Built-in support for icons with correct spacing

