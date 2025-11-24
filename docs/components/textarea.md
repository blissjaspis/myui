# Textarea Component

A customizable textarea component with auto-resize functionality.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `type` | string | `'resize'` | The behavior of the textarea. Options: `'resize'` (auto-growing), `'default'` (standard). |
| `rows` | number | - | Standard HTML attribute for initial height (optional). |
| `placeholder` | string | - | Standard HTML attribute for placeholder text. |

## Usage Example

### Auto-resizing Textarea (Default)

```blade
<x-myui-textarea 
    name="description" 
    placeholder="Enter your description here..." 
/>
```

### Standard Textarea

```blade
<x-myui-textarea 
    type="default"
    name="comments" 
    rows="5"
    placeholder="Add comments..." 
/>
```

