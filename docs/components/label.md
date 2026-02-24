# Label Component

A label component for form fields.

Based on [shadcn/ui Label](https://ui.shadcn.com/docs/components/label).

## Features

- **asChild support**: Use custom elements as the label
- **Required indicator**: Automatic asterisk for required fields
- **Disabled state styling**: Changes appearance when paired with disabled inputs
- **CSS variables**: Automatic light/dark mode support

## Components

| Component | Description |
|-----------|-------------|
| `x-myui::label` | The label element |

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `for` | string | - | The ID of the form element the label is associated with. |
| `required` | boolean | `false` | When true, displays a red asterisk indicator. |
| `asChild` | boolean | `false` | When true, renders as a span wrapper instead of a label element. |

## Usage Examples

### Basic Label

```blade
<x-myui::label for="email">Email</x-myui::label>
<x-myui::input id="email" type="email" />
```

### Required Field

```blade
<x-myui::label for="email" required>Email</x-myui::label>
<x-myui::input id="email" type="email" required />
```

### With asChild

Use `asChild` when you need to wrap another element as a label:

```blade
<x-myui::label asChild>
    <span class="custom-label">Custom Label Element</span>
</x-myui::label>
```

### In a Form

```blade
<div class="space-y-2">
    <x-myui::label for="name" required>Name</x-myui::label>
    <x-myui::input id="name" placeholder="Enter your name" required />
</div>

<div class="space-y-2">
    <x-myui::label for="bio">Bio</x-myui::label>
    <x-myui::textarea id="bio" autoResize placeholder="Tell us about yourself" />
</div>
```

## Accessibility

- Uses semantic `<label>` element by default
- Supports `for` attribute for proper form association
- Displays visual required indicator with `required` prop
- Adapts styling when sibling input is disabled (via `peer-disabled`)

## CSS Classes Reference

| Component | Key Classes |
|-----------|-------------|
| Label | `text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70` |
| Required Indicator | `text-destructive` (red asterisk) |
