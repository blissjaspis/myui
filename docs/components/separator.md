# Separator Component

A visual separator component to divide content, supporting horizontal and vertical orientations and text labels.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `orientation` | string | `'horizontal'` | The orientation of the separator. Options: `'horizontal'`, `'vertical'`. |
| `variant` | string | `'single'` | The style variant. Options: `'single'` (line only), `'text'` (line with text label). |
| `text` | string | `''` | The text to display when `variant` is `'text'`. |

## Usage Example

### Horizontal Separator

```blade
<x-myui-separator />
```

### Vertical Separator

```blade
<div class="flex h-5 items-center space-x-4 text-sm">
    <div>Blog</div>
    <x-myui-separator orientation="vertical" />
    <div>Docs</div>
    <x-myui-separator orientation="vertical" />
    <div>Source</div>
</div>
```

### Separator with Text

```blade
<x-myui-separator variant="text" text="OR" />
```

