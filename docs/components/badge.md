# Badge Component

A badge component to display status, labels, or tags.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | string | `'default'` | The style variant. Options: `'default'`, `'secondary'`, `'destructive'`, `'outline'`. |
| `size` | string | `'default'` | The size of the badge. Options: `'default'`, `'lg'`. |

## Usage Example

### Default Badge

```blade
<x-myui-badge>
    New
</x-myui-badge>
```

### Variants

```blade
<x-myui-badge variant="secondary">Secondary</x-myui-badge>
<x-myui-badge variant="destructive">Error</x-myui-badge>
<x-myui-badge variant="outline">Outline</x-myui-badge>
```

### Sizes

```blade
<x-myui-badge>Default</x-myui-badge>
<x-myui-badge size="lg">Large</x-myui-badge>
```

