# Myui

Myui is a package for Laravel that provides a set of pre-built UI components and utilities to help you build modern and responsive web applications.

## Installation

You can install the package via composer:

```bash
composer require blissjaspis/myui
```

After installation, you can optionally publish the configuration file:

```bash
php artisan vendor:publish --provider="BlissJaspis\Myui\Providers\MyuiServiceProvider" --tag=config
```

Publish Myui CSS assets (recommended):

```bash
php artisan vendor:publish --provider="BlissJaspis\Myui\Providers\MyuiServiceProvider" --tag=myui-assets
```

For your application to use the Myui components, you must configure Tailwind CSS to scan the package's views.

**Tailwind CSS v3 (`tailwind.config.js`):**

```js
module.exports = {
    content: [
        // ... your existing paths
        "./vendor/blissjaspis/myui/resources/views/**/*.blade.php",
    ],
};
```

**Tailwind CSS v4 (CSS file):**

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

By default, the configuration above scans all Myui components. To optimize your CSS size by only including the styles for the components you actually use, you can specify the specific directories for those components instead of scanning the entire package.

**Tailwind CSS v3:**

```js
module.exports = {
    content: [
        // Scan specific components only
        "./vendor/blissjaspis/myui/resources/views/components/button/**/*.blade.php",
        "./vendor/blissjaspis/myui/resources/views/components/card/**/*.blade.php",
        // ...
    ],
};
```

**Tailwind CSS v4:**

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

- [Accordion](docs/components/accordion.md)
- [Alert](docs/components/alert.md)
- [Badge](docs/components/badge.md)
- [Breadcrumb](docs/components/breadcrumb.md)
- [Button](docs/components/button.md)
- [Card](docs/components/card.md)
- [Checkbox](docs/components/checkbox.md)
- [Dialog](docs/components/dialog.md)
- [Dropdown](docs/components/dropdown.md)
- [Form](docs/components/form.md)
- [Input](docs/components/input.md)
- [Link](docs/components/link.md)
- [Navbar](docs/components/navbar.md)
- [Popover](docs/components/popover.md)
- [Radio Group](docs/components/radio-group.md)
- Select
  - [Basic](docs/components/select-basic.md)
  - [Multiple](docs/components/select-multiple.md)
  - [Search DB](docs/components/select-search-db.md)
- [Separator](docs/components/separator.md)
- [Sheet](docs/components/sheet.md)
- [Sonner](docs/components/sonner.md)
- [Switch](docs/components/switch.md)
- [Table](docs/components/table.md)
- Tabs
  - [Tabs](docs/components/tabs.md)
  - [Tab Links](docs/components/tab-links.md)
- [Textarea](docs/components/textarea.md)
- [Tooltip](docs/components/tooltip.md)
- [Typography](docs/components/typography.md)

For detailed documentation on each component, please refer to the markdown files in the `docs/components/` directory.

## Configuration

You can customize the package behavior by modifying the `config/myui.php` file:

```php
return [
    'framework' => 'tailwind', // CSS framework: 'tailwind' or 'bootstrap'
    'prefix' => 'myui', // Component prefix for Blade templates
    'global_classes' => [], // Global CSS classes applied to all components
    'component_paths' => [], // Additional paths for custom components
];
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

The MIT License (MIT). Please see [License](LICENSE) for more information.
