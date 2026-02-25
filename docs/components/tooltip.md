# Tooltip Component

A popup that displays information related to an element when the element receives keyboard focus or the mouse hovers over it.

Based on [shadcn/ui Tooltip](https://ui.shadcn.com/docs/components/tooltip).

## Installation

The tooltip component is included in the Myui package. Ensure you have Alpine.js and the anchor plugin loaded:

```html
<!-- Alpine.js Plugins (must be loaded before Alpine.js core) -->
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/anchor@3.x.x/dist/cdn.min.js"></script>
<!-- Alpine.js Core -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

## Structure

The tooltip consists of four components:

- `x-myui::tooltip`: The root container that manages state and delay timing.
- `x-myui::tooltip.trigger`: The element that triggers the tooltip.
- `x-myui::tooltip.content`: The popup content to be displayed.
- `x-myui::tooltip.provider` (optional): Wraps your app to provide global tooltip settings.

## Props

### Tooltip (Root)

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `delayDuration` | number | `250` | The delay in milliseconds before the tooltip opens. |
| `skipDelayDuration` | number | `300` | The duration in milliseconds to skip the delay when moving between tooltips quickly. |
| `open` | boolean | `false` | Controls the open state of the tooltip. |

### Tooltip Content

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `side` | string | `'top'` | The preferred side of the trigger to render against. Options: `'top'`, `'right'`, `'bottom'`, `'left'`. |
| `align` | string | `'center'` | The alignment of the tooltip relative to the trigger. Options: `'start'`, `'center'`, `'end'`. |
| `sideOffset` | number | `4` | The distance in pixels from the trigger. |

### Tooltip Trigger

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `asChild` | boolean | `false` | When `true`, merges props onto the immediate child element instead of rendering a wrapper span. |

### Tooltip Provider

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `delayDuration` | number | `250` | Global delay duration for all nested tooltips. |
| `skipDelayDuration` | number | `300` | Global skip delay duration for all nested tooltips. |

## Usage

### Basic Tooltip

```blade
<x-myui::tooltip>
    <x-myui::tooltip.trigger>
        <x-myui::button variant="outline">Hover me</x-myui::button>
    </x-myui::tooltip.trigger>
    <x-myui::tooltip.content>
        <p>Add to library</p>
    </x-myui::tooltip.content>
</x-myui::tooltip>
```

### Side Variants

Use the `side` prop to change the position of the tooltip.

```blade
<x-myui::tooltip>
    <x-myui::tooltip.trigger asChild>
        <x-myui::button variant="outline">Right Side</x-myui::button>
    </x-myui::tooltip.trigger>
    <x-myui::tooltip.content side="right">
        <p>This tooltip appears on the right</p>
    </x-myui::tooltip.content>
</x-myui::tooltip>
```

Available sides: `top`, `right`, `bottom`, `left`.

### Align Variants

Use the `align` prop to control the alignment of the tooltip.

```blade
<x-myui::tooltip>
    <x-myui::tooltip.trigger asChild>
        <x-myui::button variant="outline">Align Start</x-myui::button>
    </x-myui::tooltip.trigger>
    <x-myui::tooltip.content align="start">
        <p>Aligned to start</p>
    </x-myui::tooltip.content>
</x-myui::tooltip>
```

Available alignments: `start`, `center`, `end`.

### Custom Delay

Control the delay before the tooltip appears.

```blade
<x-myui::tooltip delayDuration="0">
    <x-myui::tooltip.trigger asChild>
        <x-myui::button variant="outline">Instant</x-myui::button>
    </x-myui::tooltip.trigger>
    <x-myui::tooltip.content>
        <p>Appears instantly!</p>
    </x-myui::tooltip.content>
</x-myui::tooltip>
```

### With Icon Buttons

Tooltips work great with icon buttons.

```blade
<x-myui::tooltip>
    <x-myui::tooltip.trigger>
        <x-myui::button variant="ghost" size="icon">
            <svg><!-- icon --></svg>
        </x-myui::button>
    </x-myui::tooltip.trigger>
    <x-myui::tooltip.content side="bottom">
        <p>Go to Home</p>
    </x-myui::tooltip.content>
</x-myui::tooltip>
```

### Disabled Button

Show a tooltip on a disabled button by wrapping it with the tooltip trigger.

```blade
<x-myui::tooltip>
    <x-myui::tooltip.trigger>
        <x-myui::button variant="outline" disabled>Disabled Button</x-myui::button>
    </x-myui::tooltip.trigger>
    <x-myui::tooltip.content>
        <p>This action is not available</p>
    </x-myui::tooltip.content>
</x-myui::tooltip>
```

### With Keyboard Shortcut

Tooltips can display keyboard shortcuts for actions.

```blade
<x-myui::tooltip>
    <x-myui::tooltip.trigger asChild>
        <x-myui::button variant="outline">Add to library</x-myui::button>
    </x-myui::tooltip.trigger>
    <x-myui::tooltip.content side="bottom">
        <div class="flex items-center gap-2">
            <span>Add to library</span>
            <kbd class="rounded border bg-muted px-1.5 font-mono text-[10px]">
                Ctrl+D
            </kbd>
        </div>
    </x-myui::tooltip.content>
</x-myui::tooltip>
```

### Using Tooltip Provider

Wrap your app with TooltipProvider to provide global settings for all nested tooltips.

```blade
<x-myui::tooltip.provider delayDuration={300}>
    <!-- Your app content -->
    <x-myui::tooltip>
        <x-myui::tooltip.trigger>
            <x-myui::button variant="outline">Hover me</x-myui::button>
        </x-myui::tooltip.trigger>
        <x-myui::tooltip.content>
            <p>This uses the provider's delay setting</p>
        </x-myui::tooltip.content>
    </x-myui::tooltip>
</x-myui::tooltip.provider>
```

## Features

- **Smart Delay Handling**: Moving between tooltips quickly skips the delay for a smoother UX
- **Keyboard Accessible**: Tooltips appear on focus as well as hover
- **Flexible Positioning**: Configure side, alignment, and offset
- **Portal Rendering**: Content is teleported to the body to avoid z-index issues
- **Smooth Animations**: Fade and slide animations based on the tooltip position
- **asChild Pattern**: Apply tooltip behavior to any element without extra wrappers

## Accessibility

- Tooltips are triggered by both mouse hover and keyboard focus
- The trigger element includes `aria-describedby` pointing to the tooltip content
- The tooltip content has `role="tooltip"`
- Focus management ensures screen readers announce tooltip content
