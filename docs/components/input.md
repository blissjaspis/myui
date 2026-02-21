# Input Component

A text input component for forms and user data entry with built-in styling and accessibility features, following shadcn/ui design patterns.

## Components

| Component | Description |
|-----------|-------------|
| `form.input` | The main input element |
| `form.field` | Wrapper for form inputs with labels and descriptions |
| `form.field-label` | Label component for form fields |
| `form.field-description` | Description text for form fields |
| `form.field-group` | Groups multiple form fields together |
| `form.input-group` | Container for input with prefix/suffix addons |
| `form.input-group-input` | Input component specifically for use within input groups |
| `form.input-group-icon` | Icon component for input groups |
| `form.input-group-text` | Text addon component for input groups |

## Props

### Form Input Component

All standard HTML input attributes are supported, plus:

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `type` | string | `'text'` | Input type (text, email, password, file, etc.) |

### Input Group Components

#### Input Group Input Component

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `type` | string | `'text'` | Input type (text, email, password, file, etc.) |

#### Input Group Icon Component

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `align` | string | `'start'` | Position of the icon. Options: `'start'`, `'end'` |

#### Input Group Text Component

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `align` | string | `'start'` | Position of the text addon. Options: `'start'`, `'end'` |

### Form Field Component

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `orientation` | string | `'vertical'` | Layout orientation (`'vertical'` or `'horizontal'`) |
| `invalid` | boolean | `false` | Marks the field as invalid, affecting child styling |

### Form Field Label Component

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `required` | boolean | `false` | Shows required asterisk (*) |

### Form Field Group Component

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `orientation` | string | `'vertical'` | Layout orientation (`'vertical'` or `'horizontal'`) |

### Form Input Group Icon Component

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `align` | string | `'left'` | Icon alignment (`'left'` or `'right'`) |

## Usage Examples

### Basic Input

```blade
<x-myui::form.input placeholder="Enter your text..." />
```

### Field

```blade
<x-myui::form.field>
    <x-myui::form.field-label>Username</x-myui::form.field-label>
    <x-myui::form.input placeholder="Choose a unique username" />
    <x-myui::form.field-description>
        Choose a unique username for your account.
    </x-myui::form.field-description>
</x-myui::form.field>
```

### Field Group

```blade
<x-myui::form.field-group>
    <x-myui::form.field>
        <x-myui::form.field-label>Name</x-myui::form.field-label>
        <x-myui::form.input placeholder="Enter your name" />
    </x-myui::form.field>
    <x-myui::form.field>
        <x-myui::form.field-label>Email</x-myui::form.field-label>
        <x-myui::form.input type="email" placeholder="Enter your email" />
        <x-myui::form.field-description>
            We'll send updates to this address.
        </x-myui::form.field-description>
    </x-myui::form.field>
</x-myui::form.field-group>
```

### States

#### Disabled

```blade
<x-myui::form.field>
    <x-myui::form.field-label>Email</x-myui::form.field-label>
    <x-myui::form.input disabled placeholder="Disabled input" />
    <x-myui::form.field-description>
        This field is currently disabled.
    </x-myui::form.field-description>
</x-myui::form.field>
```

#### Invalid

```blade
<x-myui::form.field invalid="true">
    <x-myui::form.field-label>Invalid Input</x-myui::form.field-label>
    <x-myui::form.input aria-invalid="true" data-invalid placeholder="Invalid input" />
    <x-myui::form.field-description>
        This field contains validation errors.
    </x-myui::form.field-description>
</x-myui::form.field>
```

### File Input

```blade
<x-myui::form.field>
    <x-myui::form.field-label>Picture</x-myui::form.field-label>
    <x-myui::form.input type="file" />
    <x-myui::form.field-description>
        Select a picture to upload.
    </x-myui::form.field-description>
</x-myui::form.field>
```

### Required Field

```blade
<x-myui::form.field>
    <x-myui::form.field-label required>Required Field</x-myui::form.field-label>
    <x-myui::form.input required placeholder="This field is required" />
    <x-myui::form.field-description>
        This field must be filled out.
    </x-myui::form.field-description>
</x-myui::form.field>
```

### Badge in Label

```blade
<x-myui::form.field>
    <x-myui::form.field-label>
        Webhook URL
        <x-myui::badge class="ml-2">Beta</x-myui::badge>
    </x-myui::form.field-label>
    <x-myui::form.input placeholder="https://example.com/webhook" />
</x-myui::form.field>
```

### Input Groups

Input groups allow you to add icons, text, or buttons as prefix or suffix addons to inputs.

> **Note:** Use `input-group-input` instead of the regular `input` component when creating input groups. The regular `input` component should be used for standalone inputs only.

#### With Icon

```blade
<x-myui::form.field>
    <x-myui::form.field-label>Website URL</x-myui::form.field-label>
    <x-myui::form.input-group>
        <x-myui::form.input-group-icon>
            <x-myui::icons.globe class="h-4 w-4" />
        </x-myui::form.input-group-icon>
        <x-myui::form.input-group-input type="url" placeholder="example.com" />
    </x-myui::form.input-group>
</x-myui::form.field>
```

#### With Text Addon

```blade
<x-myui::form.field>
    <x-myui::form.field-label>Price</x-myui::form.field-label>
    <x-myui::form.input-group>
        <x-myui::form.input-group-text>$</x-myui::form.input-group-text>
        <x-myui::form.input-group-input type="number" placeholder="0.00" />
    </x-myui::form.input-group>
</x-myui::form.field>
```

#### With Both Prefix and Suffix

```blade
<x-myui::form.field>
    <x-myui::form.field-label>Email</x-myui::form.field-label>
    <x-myui::form.input-group>
        <x-myui::form.input-group-icon align="start">
            <x-myui::icons.mail class="h-4 w-4" />
        </x-myui::form.input-group-icon>
        <x-myui::form.input-group-input type="email" placeholder="user" />
        <x-myui::form.input-group-text align="end">@example.com</x-myui::form.input-group-text>
    </x-myui::form.input-group>
</x-myui::form.field>
```

### Inline Field

```blade
<x-myui::form.field orientation="horizontal">
    <x-myui::form.field-label>Search</x-myui::form.field-label>
    <x-myui::form.input placeholder="Search..." />
    <x-myui::button size="sm" class="ml-2">Search</x-myui::button>
</x-myui::form.field>
```

### Grid Layout

```blade
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <x-myui::form.field>
        <x-myui::form.field-label>First Name</x-myui::form.field-label>
        <x-myui::form.input placeholder="John" />
    </x-myui::form.field>
    <x-myui::form.field>
        <x-myui::form.field-label>Last Name</x-myui::form.field-label>
        <x-myui::form.input placeholder="Doe" />
    </x-myui::form.field>
</div>
```

## Design System

This component follows shadcn/ui design patterns and includes:

- **Focus states**: Visible focus rings for accessibility
- **Disabled states**: Proper opacity and cursor handling
- **Invalid states**: Red border styling with `aria-invalid`
- **File inputs**: Styled file input with proper text display
- **Icon integration**: Built-in support for icons with correct positioning
- **Form integration**: Compatible with Laravel form validation

