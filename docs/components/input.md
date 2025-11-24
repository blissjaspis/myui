# Input Component

A basic widget for getting the user input in a text field.

## Props

All standard HTML input attributes are supported.

## Usage Example

### Basic Text Input

```blade
<x-myui::input type="email" placeholder="Email" />
```

### With Group and Icon

```blade
<x-myui::input.group>
    <x-myui::input.group-icon>
        <x-myui::icon name="mail" />
    </x-myui::input.group-icon>
    <x-myui::input type="email" placeholder="Email address" />
</x-myui::input.group>
```

