# Sonner Component

An opinionated toast component for notifications.

Based on [shadcn/ui Sonner](https://ui.shadcn.com/docs/components/radix/sonner).

## Features

- **Multiple toast types**: Default, success, error, warning, info
- **Promise support**: Show loading, success, and error states for async operations
- **Position control**: 6 different position options
- **Rich colors**: Colorful icons for different toast types
- **Action buttons**: Add clickable actions to toasts
- **Progress bar**: Visual indicator of remaining time with optional delay
- **Optional close button**: Show/hide the X button globally or per-toast
- **Auto-dismiss**: Configurable duration
- **Limited visible toasts**: Prevent toast overload

## Components

| Component | Description |
|-----------|-------------|
| `x-myui::sonner` | The toaster container - add once to your layout |

## Installation

Add the Sonner component to your main layout (e.g., `app.blade.php`):

```blade
<body>
    {{-- Your page content --}}
    {{ $slot }}

    {{-- Sonner Toaster --}}
    <x-myui::sonner position="bottom-right" />
</body>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `position` | string | `'bottom-right'` | Position of the toast container. Options: `top-left`, `top-center`, `top-right`, `bottom-left`, `bottom-center`, `bottom-right`. |
| `richColors` | boolean | `false` | When true, uses rich colors for icons. |
| `expand` | boolean | `false` | When true, expands the toast width. |
| `duration` | number | `4000` | Default duration in milliseconds before auto-dismiss. |
| `visibleToasts` | number | `3` | Maximum number of toasts visible at once. |
| `closeButton` | boolean | `true` | Show the close (X) button on toasts. |
| `progressBarDelay` | number | `0` | Delay in ms before showing progress bar. Set to `Infinity` to hide the progress bar. |

## Usage

### Basic Toast

```blade
<button @click="$store.toast.show('Event has been created')">
    Show Toast
</button>
```

### Toast Types

```blade
<button @click="$store.toast.success('Successfully saved!')">
    Success
</button>

<button @click="$store.toast.error('Something went wrong')">
    Error
</button>

<button @click="$store.toast.warning('Please be careful')">
    Warning
</button>

<button @click="$store.toast.info('New update available')">
    Info
</button>
```

### With Title and Description

```blade
<button @click="$store.toast.show('', {
    title: 'Event has been created',
    description: 'Monday, January 3rd at 6:00pm'
})">
    Show Toast with Details
</button>
```

### With Action

```blade
<button @click="$store.toast.success('Changes saved', {
    action: {
        label: 'Undo',
        onClick: () => console.log('Undo clicked')
    }
})">
    Save with Undo
</button>
```

**Note:** When the action is clicked, the toast automatically dismisses to prevent multiple clicks.

### Promise Toast

```blade
<button @click="$store.toast.promise(
    fetch('/api/save').then(r => r.json()),
    {
        loading: 'Saving changes...',
        success: 'Changes saved successfully',
        error: 'Failed to save changes'
    }
)">
    Save Changes
</button>
```

## API Reference

### Toast Methods

All methods are available via `$store.toast`:

| Method | Signature | Description |
|--------|-----------|-------------|
| `show` | `(message, options?) => void` | Show a default toast. |
| `success` | `(message, options?) => void` | Show a success toast. |
| `error` | `(message, options?) => void` | Show an error toast. |
| `warning` | `(message, options?) => void` | Show a warning toast. |
| `info` | `(message, options?) => void` | Show an info toast. |
| `promise` | `(promise, messages) => Promise` | Show loading, then success or error toast. |
| `dismiss` | `(id) => void` | Dismiss a specific toast by ID. |

### Options Object

```typescript
{
  title?: string;              // Toast title
  description?: string;        // Toast description
  duration?: number;           // Duration in ms (0 = infinite)
  closeButton?: boolean;     // Show/hide close button (overrides global default)
  progressBarDelay?: number;   // Delay in ms before showing progress bar
  action?: {
    label: string;
    onClick: () => void;
  };
}
```

## Examples

### Different Positions

```blade
{{-- Top Center --}}
<x-myui::sonner position="top-center" />

{{-- Bottom Left --}}
<x-myui::sonner position="bottom-left" />
```

### Custom Duration

```blade
{{-- 10 second duration --}}
<x-myui::sonner duration="10000" />
```

### Hide Close Button

```blade
{{-- Global: Hide close button on all toasts --}}
<x-myui::sonner :close-button="false" />

{{-- Per-toast: Hide close button on a specific toast --}}
<button @click="$store.toast.show('No close button', { closeButton: false })">
    Show Toast
</button>
```

### Delayed/Hidden Progress Bar

```blade
{{-- Global: Delay progress bar by 1 second --}}
<x-myui::sonner :progress-bar-delay="1000" />

{{-- Global: Hide progress bar completely --}}
<x-myui::sonner :progress-bar-delay="Infinity" />

{{-- Per-toast: Delay progress bar --}}
<button @click="$store.toast.show('Delayed progress', { progressBarDelay: 2000 })">
    Show Toast
</button>

{{-- Per-toast: Hide progress bar --}}
<button @click="$store.toast.show('No progress bar', { progressBarDelay: Infinity })">
    Show Toast
</button>
```

### In Forms

```blade
<form @submit.prevent="
    $store.toast.promise(
        $el.submit(),
        {
            loading: 'Creating account...',
            success: 'Account created successfully!',
            error: 'Failed to create account'
        }
    )
">
    <x-myui::input name="email" type="email" />
    <x-myui::button type="submit">Create Account</x-myui::button>
</form>
```

## CSS Classes Reference

| Element | Key Classes |
|---------|-------------|
| Container | `fixed z-[100] flex flex-col p-4` |
| Toast | `pointer-events-auto w-full max-w-[380px] rounded-lg border bg-background shadow-lg mb-3 overflow-hidden` |
| Success | `border-l-4 border-l-green-500` |
| Error | `border-l-4 border-l-red-500` |
| Warning | `border-l-4 border-l-amber-500` |
| Info | `border-l-4 border-l-blue-500` |

## Accessibility

- Toasts are announced to screen readers
- Focus management respects toast actions
- Click to dismiss is available
- Visual progress indicator
