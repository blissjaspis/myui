# Tooltip Component

A popup that displays information related to an element when the element receives keyboard focus or the mouse hovers over it.

## Components

The tooltip consists of three parts:
- `x-myui::tooltip`: The root container.
- `x-myui::tooltip.trigger`: The element that triggers the tooltip.
- `x-myui::tooltip.content`: The content to be displayed.

## Props (Tooltip Content)

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `delayDuration` | number | `250` | The delay in milliseconds before the tooltip opens. |
| `alignment` | string | `'top'` | The preferred alignment against the trigger. Options: `'top'`, `'bottom'`, `'left'`, `'right'`. |
| `sideOffset` | number | `5` | The distance in pixels from the trigger. |

## Usage Example

### Basic Usage

```blade
<x-myui::tooltip>
    <x-myui::tooltip.trigger>
        <x-myui::button variant="outline">Hover me</x-myui::button>
    </x-myui::tooltip.trigger>
    <x-myui::tooltip.content>
        Add to library
    </x-myui::tooltip.content>
</x-myui::tooltip>
```

### Custom Alignment and Delay

```blade
<x-myui::tooltip>
    <x-myui::tooltip.trigger>
        <x-myui-icon name="info" class="h-4 w-4" />
    </x-myui::tooltip.trigger>
    <x-myui::tooltip.content alignment="right" sideOffset="10" delayDuration="0">
        Instant information
    </x-myui::tooltip.content>
</x-myui::tooltip>
```

