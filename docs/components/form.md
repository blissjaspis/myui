# Form Component

Displays a form item with label, input, description, and error message.

## Components

- `x-myui::form`: The root container for a form field.
- `x-myui::form.label`: The label for the form field.
- `x-myui::form.input`: The input field (wrapper around standard input).
- `x-myui::form.description`: The helper text description.
- `x-myui::form.message`: The error message text.

## Usage

### Basic Form Item

```blade
<x-myui::form>
    <x-myui::form.label>Username</x-myui::form.label>
    <x-myui::form.input placeholder="Enter your username" />
    <x-myui::form.description>
        This is your public display name.
    </x-myui::form.description>
    <x-myui::form.message>
        Username is required.
    </x-myui::form.message>
</x-myui::form>
```

### Required Field

Adding the `required` attribute to the label will automatically display an asterisk.

```blade
<x-myui::form>
    <x-myui::form.label required>Email</x-myui::form.label>
    <x-myui::form.input type="email" placeholder="m@example.com" />
</x-myui::form>
```

### With Validation Errors

The `x-myui::form.message` component styles validation error messages properly.

```blade
<x-myui::form>
    <x-myui::form.label>Password</x-myui::form.label>
    <x-myui::form.input type="password" />
    @error('password')
        <x-myui::form.message>{{ $message }}</x-myui::form.message>
    @enderror
</x-myui::form>
```

