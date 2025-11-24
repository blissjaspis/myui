# Typography Component

A component for standardized text styling across headers, paragraphs, and other text elements.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | string | `'h1'` | The text style variant. Options: `'h1'`, `'h2'`, `'h3'`, `'h4'`, `'h5'`, `'p'`, `'small'`, `'lead'`, `'large'`, `'muted'`, `'blockquote'`, `'inline-code'`. |

## Usage Example

### Headings

```blade
<x-myui::typography variant="h1">Heading 1</x-myui::typography>
<x-myui::typography variant="h2">Heading 2</x-myui::typography>
<x-myui::typography variant="h3">Heading 3</x-myui::typography>
```

### Body Text

```blade
<x-myui::typography variant="p">
    This is a standard paragraph of text.
</x-myui::typography>

<x-myui::typography variant="lead">
    This is a lead paragraph.
</x-myui::typography>
```

### Special Styles

```blade
<x-myui::typography variant="muted">Muted text</x-myui::typography>
<x-myui::typography variant="blockquote">"This is a quote."</x-myui::typography>
<x-myui::typography variant="inline-code">const x = 1;</x-myui::typography>
```

