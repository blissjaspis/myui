# Textarea Component

Displays a form textarea or a component that looks like a textarea.

Based on [shadcn/ui Textarea](https://ui.shadcn.com/docs/components/radix/textarea).

## Features

- **Auto-resize**: Automatically grows with content
- **Focus ring**: Visible focus state with ring styling
- **Disabled state**: Proper styling for disabled state
- **CSS variables**: Automatic light/dark mode support
- **Standard attributes**: Supports all native textarea attributes

## Components

| Component | Description |
|-----------|-------------|
| `x-myui::textarea` | The textarea input element |

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `autoResize` | boolean | `false` | When true, textarea automatically resizes to fit content. |
| `name` | string | - | Standard HTML name attribute for form submission. |
| `placeholder` | string | - | Standard HTML placeholder text. |
| `rows` | number | - | Standard HTML rows attribute for initial height. |
| `disabled` | boolean | `false` | When true, prevents user interaction. |

## Usage Examples

### Standard Textarea

```blade
<x-myui::textarea 
    name="comments" 
    placeholder="Type your message here." 
    rows="4"
/>
```

### Auto-resizing Textarea

The textarea automatically grows as you type:

```blade
<x-myui::textarea 
    autoResize
    name="description" 
    placeholder="Enter your description..."
/>
```

### With Label

```blade
<div class="space-y-2">
    <x-myui::label for="message">Message</x-myui::label>
    <x-myui::textarea 
        id="message"
        autoResize
        placeholder="Type your message here..."
    />
</div>
```

### Disabled State

```blade
<x-myui::textarea 
    disabled
    placeholder="This textarea is disabled"
/>
```

### In a Form

```blade
<form>
    <div class="space-y-4">
        <div class="space-y-2">
            <x-myui::label for="subject">Subject</x-myui::label>
            <x-myui::input id="subject" placeholder="Enter subject" />
        </div>
        
        <div class="space-y-2">
            <x-myui::label for="body">Body</x-myui::label>
            <x-myui::textarea 
                id="body"
                autoResize
                placeholder="Enter your message..."
            />
        </div>
        
        <x-myui::button type="submit">Send Message</x-myui::button>
    </div>
</form>
```

## CSS Classes Reference

| Component | Key Classes |
|-----------|-------------|
| Textarea | `flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50` |
