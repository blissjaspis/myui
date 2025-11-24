# Button Component

A versatile button component with various styles and sizes.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | string | `'default'` | The visual style. Options: `'default'`, `'secondary'`, `'success'`, `'destructive'`, `'outline'`, `'ghost'`, `'link'`. |
| `size` | string | `'default'` | The size of the button. Options: `'default'`, `'icon'`. |

## Usage Example

### Basic Button

```blade
<x-myui::button>
    Click Me
</x-myui::button>
```

### Variants

```blade
<x-myui::button variant="secondary">Secondary</x-myui::button>
<x-myui::button variant="destructive">Delete</x-myui::button>
<x-myui::button variant="outline">Cancel</x-myui::button>
<x-myui::button variant="ghost">Ghost</x-myui::button>
<x-myui::button variant="link">Link</x-myui::button>
```

### Icon Button

```blade
<x-myui::button size="icon">
    <x-myui-icon name="trash" />
</x-myui::button>
```

