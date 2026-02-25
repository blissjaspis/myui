# Button Group Component

A container that groups related buttons together with consistent styling.

## Components

- `x-myui::button-group`: The root container with `role="group"`.
- `x-myui::button-group.separator`: Visual divider between buttons.
- `x-myui::button-group.text`: Text label within the button group.

## Usage

### Basic Button Group

Group multiple buttons together:

```blade
<x-myui::button-group>
    <x-myui::button>Button 1</x-myui::button>
    <x-myui::button>Button 2</x-myui::button>
    <x-myui::button>Button 3</x-myui::button>
</x-myui::button-group>
```

### Button Group Variants

Control the visual style of the group:

```blade
<!-- Default: subtle dividers -->
<x-myui::button-group variant="default">
    <x-myui::button variant="outline">Left</x-myui::button>
    <x-myui::button variant="outline">Center</x-myui::button>
    <x-myui::button variant="outline">Right</x-myui::button>
</x-myui::button-group>

<!-- Outline: with border -->
<x-myui::button-group variant="outline">
    <x-myui::button variant="outline">Left</x-myui::button>
    <x-myui::button variant="outline">Center</x-myui::button>
    <x-myui::button variant="outline">Right</x-myui::button>
</x-myui::button-group>

<!-- Ghost: spaced buttons -->
<x-myui::button-group variant="ghost">
    <x-myui::button variant="ghost">Left</x-myui::button>
    <x-myui::button variant="ghost">Center</x-myui::button>
    <x-myui::button variant="ghost">Right</x-myui::button>
</x-myui::button-group>
```

### Vertical Orientation

Stack buttons vertically:

```blade
<x-myui::button-group orientation="vertical">
    <x-myui::button variant="outline">Top</x-myui::button>
    <x-myui::button variant="outline">Middle</x-myui::button>
    <x-myui::button variant="outline">Bottom</x-myui::button>
</x-myui::button-group>
```

### With Separator

Visually divide buttons within a group:

```blade
<x-myui::button-group variant="ghost">
    <x-myui::button variant="ghost">Save</x-myui::button>
    <x-myui::button-group.separator />
    <x-myui::button variant="ghost">Cancel</x-myui::button>
    <x-myui::button-group.separator />
    <x-myui::button variant="ghost" class="text-destructive">Delete</x-myui::button>
</x-myui::button-group>
```

### Split Button

Create a split button for actions with dropdown:

```blade
<x-myui::button-group>
    <x-myui::button>Main Action</x-myui::button>
    <x-myui::button-group.separator />
    <x-myui::button size="icon">
        <svg><!-- chevron down icon --></svg>
    </x-myui::button>
</x-myui::button-group>
```

### With Text Label

Add text labels within the button group:

```blade
<x-myui::button-group>
    <x-myui::button-group.text>View:</x-myui::button-group.text>
    <x-myui::button variant="outline" size="sm">Grid</x-myui::button>
    <x-myui::button variant="outline" size="sm">List</x-myui::button>
    <x-myui::button variant="outline" size="sm">Map</x-myui::button>
</x-myui::button-group>
```

## Props

### ButtonGroup

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `orientation` | `string` | `horizontal` | Layout direction: `horizontal` or `vertical` |
| `variant` | `string` | `default` | Visual style: `default`, `outline`, or `ghost` |

### ButtonGroup Separator

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `orientation` | `string` | `vertical` | Separator orientation: `vertical` or `horizontal` |

### ButtonGroup Text

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `asChild` | `boolean` | `false` | Render as child element (e.g., `<label>`) |

## Accessibility

- The `ButtonGroup` component has `role="group"` for proper semantics
- Use `aria-label` to describe the button group's purpose
- Buttons within the group remain individually focusable via Tab key

```blade
<x-myui::button-group aria-label="Text alignment">
    <x-myui::button variant="outline">Left</x-myui::button>
    <x-myui::button variant="outline">Center</x-myui::button>
    <x-myui::button variant="outline">Right</x-myui::button>
</x-myui::button-group>
```

## ButtonGroup vs ToggleGroup

- Use `ButtonGroup` when buttons perform distinct actions
- Use `ToggleGroup` when buttons toggle between states (like a tab bar)
