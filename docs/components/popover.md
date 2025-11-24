# Popover Component

Displays rich content in a portal, triggered by a button.

## Components

- `x-myui::popover`: The root container managing state.
- `x-myui::popover.trigger`: The element that opens the popover.
- `x-myui::popover.content`: The content to display.

## Usage Example

```blade
<x-myui::popover>
    <x-myui::popover.trigger>
        Open Popover
    </x-myui::popover.trigger>
    
    <x-myui::popover.content>
        <div class="grid gap-4">
            <div class="space-y-2">
                <h4 class="font-medium leading-none">Dimensions</h4>
                <p class="text-sm text-muted-foreground">Set the dimensions for the layer.</p>
            </div>
        </div>
    </x-myui::popover.content>
</x-myui::popover>
```

