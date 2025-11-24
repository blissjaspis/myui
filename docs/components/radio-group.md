# Radio Group Component

A set of checkable buttons—known as radio buttons—where no more than one of the buttons can be checked at a time.

## Components

- `x-myui::radio-group`: The root container managing state.
- `x-myui::radio-group.item`: The individual radio button input.

## Props

### Radio Group (Root)

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `name` | string | `''` | The name attribute for the radio inputs. |
| `defaultValue` | string | `''` | The value of the initially selected item. |

### Radio Group Item

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | string | - | The value of the radio item. |

## Usage Example

```blade
<x-myui::radio-group name="plan" defaultValue="monthly">
    <div class="flex items-center space-x-2">
        <x-myui::radio-group.item value="monthly" id="r1" />
        <label for="r1">Monthly</label>
    </div>
    <div class="flex items-center space-x-2">
        <x-myui::radio-group.item value="yearly" id="r2" />
        <label for="r2">Yearly</label>
    </div>
</x-myui::radio-group>
```

