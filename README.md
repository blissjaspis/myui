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

## Configuration

You can customize the package behavior by modifying the `config/myui.php` file:

```php
return [
    'framework' => 'tailwind', // or 'bootstrap'
    'prefix' => 'myui',
    'global_classes' => [],
    'component_paths' => [],
    'publish_assets' => true,
];
```

### Customizing the Component Prefix

You can customize the component prefix to avoid conflicts with other packages or to match your project's naming conventions. The default prefix is `myui`, but you can change it in the configuration:

```php
'prefix' => 'myui', // Change this to your preferred prefix
```

**Example with custom prefix:**
```php
'prefix' => 'ui', // Now use <x-ui::button> instead of <x-myui::button>
```

After changing the prefix, you'll need to:
1. Clear the view cache: `php artisan view:clear`
2. Update your Blade templates to use the new prefix
3. Optionally, republish the views if you want to customize them

You can also access the current prefix programmatically:

```php
use BlissJaspis\Myui\Facades\Myui;

$prefix = Myui::prefix(); // Returns 'myui' or your custom prefix
```

## Usage

### Component Syntax

Myui supports two component syntaxes for maximum flexibility:

#### 1. Namespace Syntax (Recommended)
```blade
<x-myui::card>
    <x-myui::card-header>
        <h3>Card Title</h3>
    </x-myui::card-header>
    <x-myui::card-content>
        <x-myui::button variant="default">Click me!</x-myui::button>
    </x-myui::card-content>
</x-myui::card>
```

### Basic Components

#### Button

**Namespace Syntax:**
```blade
<x-myui::button variant="default">Default Button</x-myui::button>
<x-myui::button variant="destructive">Destructive</x-myui::button>
<x-myui::button variant="outline">Outline</x-myui::button>
<x-myui::button variant="secondary">Secondary</x-myui::button>
<x-myui::button variant="ghost">Ghost</x-myui::button>
<x-myui::button variant="link">Link</x-myui::button>

<x-myui::button size="sm">Small Button</x-myui::button>
<x-myui::button size="lg">Large Button</x-myui::button>
```

#### Input

**Namespace Syntax:**
```blade
<x-myui::input type="text" placeholder="Enter your name" />
<x-myui::input type="email" placeholder="Enter your email" />
<x-myui::input type="password" placeholder="Enter your password" />
```

#### Card

**Namespace Syntax:**
```blade
<x-myui::card>
    <x-myui::card-header>
        <h3>Card Title</h3>
        <p>Card description</p>
    </x-myui::card-header>
    <x-myui::card-content>
        <p>This is the card content.</p>
    </x-myui::card-content>
</x-myui::card>
```

#### Alert

**Namespace Syntax:**
```blade
<x-myui::alert>
    <x-myui::icons.check class="w-4 h-4" />
    <div>
        <h4>Success!</h4>
        <p>Your changes have been saved successfully.</p>
    </div>
</x-myui::alert>

<x-myui::alert variant="destructive">
    <x-myui::icons.x class="w-4 h-4" />
    <div>
        <h4>Error!</h4>
        <p>Something went wrong. Please try again.</p>
    </div>
</x-myui::alert>
```

#### Badge

**Namespace Syntax:**
```blade
<x-myui::badge>New</x-myui::badge>
<x-myui::badge variant="secondary">Secondary</x-myui::badge>
<x-myui::badge variant="destructive">Error</x-myui::badge>
<x-myui::badge variant="outline">Outline</x-myui::badge>
```

#### Icons

**Namespace Syntax:**
```blade
<x-myui::icons.loading class="w-6 h-6 animate-spin" />
<x-myui::icons.check class="w-4 h-4" />
<x-myui::icons.x class="w-4 h-4" />
```

### Using the Facade

You can also use the Myui facade for programmatic access:

```php
use BlissJaspis\Myui\Facades\Myui;

// Get package version
$version = Myui::version();

// Get configuration
$framework = Myui::framework();
$prefix = Myui::prefix();

// Check framework
if (Myui::usingTailwind()) {
    // Using Tailwind CSS
}

if (Myui::usingBootstrap()) {
    // Using Bootstrap
}
```

### Custom Styling

You can override component styles by passing custom classes:

```blade
<x-myui::button class="custom-button-class">Custom Button</x-myui::button>
```

## Component Variants

### Button Variants
- `default` - Primary button style
- `destructive` - Red/danger button style
- `outline` - Outlined button style
- `secondary` - Secondary/muted button style
- `ghost` - Transparent button style
- `link` - Link-style button

### Button Sizes
- `sm` - Small button
- `default` - Default button size
- `lg` - Large button

### Alert Variants
- `default` - Default alert style
- `destructive` - Error/danger alert style

### Badge Variants
- `default` - Primary badge style
- `secondary` - Secondary badge style
- `destructive` - Error/danger badge style
- `outline` - Outlined badge style

## CSS Framework Support

Myui currently supports:

- **Tailwind CSS** (default)
- **Bootstrap** (planned for future versions)

You can switch frameworks in the configuration:

```php
'framework' => 'bootstrap',
```

## View Caching Support

✅ **Yes, Myui Blade components fully support view caching!**

### How View Caching Works

Laravel's Blade components, including Myui components, automatically benefit from Laravel's view caching system:

1. **Automatic Compilation**: Blade templates are compiled to PHP on first access
2. **Cached Storage**: Compiled views are stored in `storage/framework/views/`
3. **Performance Boost**: Subsequent requests use the cached compiled PHP instead of re-parsing Blade
4. **Cache Invalidation**: Cache is automatically cleared when templates are modified

### Performance Benefits

- **Faster Rendering**: Compiled PHP executes much faster than parsing Blade templates
- **Reduced CPU Usage**: No template parsing overhead on subsequent requests
- **Memory Efficient**: Cached views are optimized PHP code
- **Production Ready**: Perfect for high-traffic applications

### Cache Management

```bash
# Clear view cache
php artisan view:clear

# Cache views for production
php artisan view:cache

# Check cache status
php artisan view:cache-status
```

### Component-Specific Caching

Myui components support all Laravel caching features:
- ✅ Anonymous components (Blade-only)
- ✅ Component props and attributes
- ✅ Dynamic component rendering
- ✅ View fragments and caching

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

The MIT License (MIT). Please see [License](LICENSE) for more information.