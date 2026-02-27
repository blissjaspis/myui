# Myui

Myui is a package for Laravel that provides a set of pre-built UI components and utilities to help you build modern and responsive web applications.

> **Latest Updates:** This package now only supports **TailwindCSS v4**. If you need to customize the components, feel free to modify them directly in your application.

## Installation

You can install the package via composer:

```bash
composer require blissjaspis/myui
```

Publish the configuration file (optional):

```bash
php artisan vendor:publish --provider="BlissJaspis\Myui\Providers\MyuiServiceProvider" --tag=myui-config
```

### Include Myui theme tokens and base styles

Myui components use shadcn-style theme tokens such as `bg-background`, `text-foreground`, `border-input`, and `ring-ring`.
In your app CSS, import Tailwind and Myui CSS directly from the package, then add Tailwind source scanning for the components you use:

```css
@import "tailwindcss";
@import "../../vendor/blissjaspis/myui/resources/css/myui.css";

@source "../../vendor/blissjaspis/myui/resources/views/components/*.blade.php";
```

If your app already has its own global design tokens, you can scope Myui styles by wrapping your UI in:

```html
<div class="myui-theme">
    <!-- Myui components -->
</div>
```

For dark mode, use one of these:

- Global dark mode: add `.dark` on `<html>` or `<body>`.
- Scoped dark mode: add `.dark` to the wrapper (`<div class="myui-theme dark">`) or place wrapper inside a dark parent (`<div class="dark"><div class="myui-theme">...</div></div>`).

## Optional: Tailwind scan optimization

To optimize CSS output, point `@source` to specific component files or directories you actually use:

```css
@source "../../vendor/blissjaspis/myui/resources/views/components/button/**/*.blade.php";
@source "../../vendor/blissjaspis/myui/resources/views/components/input/**/*.blade.php";
```

## Blaze Optimization Configuration

Myui uses [Blaze](https://github.com/livewire/blaze) under the hood to provide high-performance Blade component rendering. Blaze compiles templates into optimized PHP functions, eliminating 91-97% of rendering overhead.

> **Important:** By installing this package, you can indirectly configure all your Blaze settings via `config/myui.php`. However, keep in mind that **uninstalling this package will erase all Blaze configurations**, so be careful.
>
> - If you're new to Blaze and are using this package for the first time (instead of installing Blaze separately), configuring Blaze through `myui.php` is the recommended approach.
> - If Blaze was already installed globally before this package, your global Blaze configuration will take precedence, and settings in `myui.php` (like `enabled`, `debug`, `throw_exceptions`) will be ignored. Myui will only configure directory-level optimizations.

### How It Works

Myui automatically detects how Blaze is configured in your application:

| Scenario | Myui Behavior |
|----------|---------------|
| **Blaze installed globally** (`livewire/blaze` in your composer.json) | Myui only configures **directory optimizations** (see below). You control global settings (`BLAZE_ENABLED`, `BLAZE_DEBUG`) in your app. |
| **Blaze not installed globally** | Myui manages Blaze entirely, using settings from `config/myui.php`. |


### Non-Global Blaze Users

If you haven't installed Blaze separately, Myui manages everything. Configure via:

```env
MYUI_BLAZE_ENABLED=true
MYUI_BLAZE_DEBUG=false
MYUI_BLAZE_THROW_EXCEPTIONS=false
```

Or in `config/myui.php`:

```php
'blaze' => [
    'enabled' => true,
    'debug' => false,
    'throw_exceptions' => false,
    // ... directory configuration
],
```

### Optimization Strategies

| Strategy | Description | Best For |
|----------|-------------|----------|
| **Compile** (default) | Compiles to optimized PHP functions | General use |
| **Fold** | Pre-renders to static HTML at compile time | Static components (icons, badges) |
| **Memo** | Caches repeated renders at runtime | Repeated components (avatars, status icons) |

### Path Resolution

Myui config uses a special path syntax that works correctly even after publishing:

| Syntax | Resolves To |
|--------|-------------|
| `'package'` or `null` | `vendor/blissjaspis/myui/resources/views/components` |
| `'package:icons'` | `vendor/blissjaspis/myui/resources/views/components/icons` |
| `'package:badge'` | `vendor/blissjaspis/myui/resources/views/components/badge` |
| `resource_path('views/components')` | Your app's components directory |

**Examples:**

```php
'directories' => [
    // Optimize all Myui package components
    [
        'path' => 'package',
        'compile' => true,
        'fold' => false,
        'memo' => false,
    ],

    // Optimize Myui icons with memoization
    [
        'path' => 'package:icons',
        'compile' => true,
        'memo' => true,
    ],

    // Optimize your app's custom components
    [
        'path' => resource_path('views/components/loading'),
        'compile' => true,
        'fold' => true,
    ],
],

'excluded' => [
    // Exclude Myui legacy components
    'package:legacy',

    // Exclude your app's custom path
    resource_path('views/components/debug'),
],
```

### Component-Level Optimization

You can also use the `@blaze` directive directly in component templates:

```blade
{{-- Default: use compile strategy --}}
@blaze

{{-- Enable folding (static components only) --}}
@blaze(fold: true)

{{-- Enable memoization (components without slots) --}}
@blaze(memo: true)

{{-- Mark safe props for folding --}}
@blaze(fold: true, safe: ['color', 'size'])
```

> **Note:** After changing configuration, always clear compiled views:
> ```bash
> php artisan view:clear
> ```

## Usage

### Component Syntax

Myui uses the `x-myui::` prefix for all components.

```blade
<x-myui::card>
    <x-myui::card.header>
        <x-myui::card.title>Card Title</x-myui::card.title>
        <x-myui::card.description>Card description</x-myui::card.description>
    </x-myui::card.header>
    <x-myui::card.content>
        <x-myui::button>Click me!</x-myui::button>
    </x-myui::card.content>
</x-myui::card>
```

### Available Components

#### Layout & Structure
- [Accordion](docs/components/accordion.md) - Collapsible content sections
- [Card](docs/components/card.md) - Container with header, content, and footer
- [Navbar](docs/components/navbar.md) - Navigation header component
- [Sheet](docs/components/sheet.md) - Slide-out panel from screen edges
- [Separator](docs/components/separator.md) - Visual divider between content
- [Tabs](docs/components/tabs.md) - Tabbed interface
- [Tab Links](docs/components/tab-links.md) - URL-based tab navigation

#### Forms & Input
- [Button](docs/components/button.md) - Interactive button element
- [Button Group](docs/components/button-group.md) - Group related buttons together
- [Checkbox](docs/components/checkbox.md) - Binary choice input
- [Form](docs/components/form.md) - Form wrapper with validation
- [Input](docs/components/input.md) - Text input field
- [Label](docs/components/label.md) - Form field label
- [Radio Group](docs/components/radio-group.md) - Single choice from multiple options
- [Select](docs/components/select.md) - Dropdown selection
  - [Basic](docs/components/select-basic.md) - Simple dropdown
  - [Multiple](docs/components/select-multiple.md) - Multi-select dropdown
  - [Search DB](docs/components/select-search-db.md) - Searchable database dropdown
- [Switch](docs/components/switch.md) - Toggle switch
- [Textarea](docs/components/textarea.md) - Multi-line text input

#### Feedback & Display
- [Alert](docs/components/alert.md) - Status message banners
- [Avatar](docs/components/avatar.md) - User profile images with fallback
- [Badge](docs/components/badge.md) - Small status indicators
- [Dialog](docs/components/dialog.md) - Modal dialog windows
- [Dropdown Menu](docs/components/dropdown.md) - Contextual menu with actions
- [Popover](docs/components/popover.md) - Floating content panel
- [Sonner](docs/components/sonner.md) - Toast notifications
- [Tooltip](docs/components/tooltip.md) - Hover information popup

#### Navigation & Content
- [Breadcrumb](docs/components/breadcrumb.md) - Navigation path indicator
- [Link](docs/components/link.md) - Styled anchor elements
- [Table](docs/components/table.md) - Data table component
- [Typography](docs/components/typography.md) - Text styling helpers

#### Icons
- [Icons](docs/components/icons.md) - Collection of SVG icon components

#### AI/LLM Components
- [LLM](docs/components/llm.md) - AI/LLM chat interface components

For detailed documentation on each component, please refer to the markdown files in the `docs/components/` directory.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

The MIT License (MIT). Please see [License](LICENSE) for more information.
