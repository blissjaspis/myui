# Myui

Myui is a package for Laravel that provides a set of pre-built UI components and utilities to help you build modern and responsive web applications.

> **Latest Updates:** This package now only supports **TailwindCSS v4**. If you need to customize the components, feel free to modify them directly in your application.

## Installation

You can install the package via composer:

```bash
composer require blissjaspis/myui
```

Publish Myui CSS assets (recommended):

```bash
php artisan vendor:publish --provider="BlissJaspis\Myui\Providers\MyuiServiceProvider" --tag=myui-assets
```

For your application to use the Myui components, you must configure Tailwind CSS v4 to scan the package's views:

```css
@source "./vendor/blissjaspis/myui/resources/views/**/*.blade.php";
```

### Include Myui theme tokens and base styles

Myui components use shadcn-style theme tokens such as `bg-background`, `text-foreground`, `border-input`, and `ring-ring`.
In addition to Tailwind scanning, publish assets and import the published stylesheet in your app CSS:

```css
@import "tailwindcss";
@import "./vendor/myui.css";
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

## Optimization (Tree Shaking)

By default, the configuration above scans all Myui components. To optimize your CSS size by only including the styles for the components you actually use, you can specify the specific directories for those components instead of scanning the entire package:

```css
@source "./vendor/blissjaspis/myui/resources/views/components/button/**/*.blade.php";
@source "./vendor/blissjaspis/myui/resources/views/components/card/**/*.blade.php";
```

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
- [Badge](docs/components/badge.md) - Small status indicators
- [Dialog](docs/components/dialog.md) - Modal dialog windows
- [Dropdown](docs/components/dropdown.md) - Contextual menu overlay
- [Popover](docs/components/popover.md) - Floating content panel
- [Sonner](docs/components/sonner.md) - Toast notifications
- [Tooltip](docs/components/tooltip.md) - Hover information popup

#### Navigation & Content
- [Breadcrumb](docs/components/breadcrumb.md) - Navigation path indicator
- [Link](docs/components/link.md) - Styled anchor elements
- [Table](docs/components/table.md) - Data table component
- [Typography](docs/components/typography.md) - Text styling helpers

#### AI/LLM Components
- [LLM](docs/components/llm.md) - AI/LLM chat interface components

For detailed documentation on each component, please refer to the markdown files in the `docs/components/` directory.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

The MIT License (MIT). Please see [License](LICENSE) for more information.
