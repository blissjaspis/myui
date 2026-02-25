# Breadcrumb Component

A breadcrumb component that follows shadcn/ui design patterns, displaying the path to the current resource using a hierarchy of links.

## Recent Updates

The breadcrumb component has been updated with smart responsive behavior. Key improvements include:

- **Single Line Layout**: Breadcrumbs now stay on one line with `flex-nowrap`
- **Text Truncation**: Long labels automatically truncate with ellipsis (max-width: 200px mobile, 300px desktop)
- **Responsive Auto-Collapse**: The `breadcrumb.responsive` component intelligently hides middle items on small screens
- **Consistent Class Merging**: All components support custom class overrides using `$attributes->merge(['class' => '...'])`
- **Accessibility Maintained**: Preserved ARIA attributes for screen readers

## Components

- `x-myui::breadcrumb`: The root container.
- `x-myui::breadcrumb.list`: The list of items.
- `x-myui::breadcrumb.item`: The individual item.
- `x-myui::breadcrumb.link`: The link to the item (auto-truncates long text).
- `x-myui::breadcrumb.page`: The page name (auto-truncates long text).
- `x-myui::breadcrumb.separator`: The separator between items.
- `x-myui::breadcrumb.ellipsis`: The ellipsis to indicate hidden items.
- `x-myui::breadcrumb.responsive`: Smart component that auto-collapses middle items on small screens.


## Usage

```blade
<x-myui::breadcrumb>
    <x-myui::breadcrumb.list>
        <x-myui::breadcrumb.item>
            <x-myui::breadcrumb.link href="/">Home</x-myui::breadcrumb.link>
        </x-myui::breadcrumb.item>
        <x-myui::breadcrumb.separator />
        <x-myui::breadcrumb.item>
            <x-myui::breadcrumb.page>Components</x-myui::breadcrumb.page>
        </x-myui::breadcrumb.item>
    </x-myui::breadcrumb.list>
</x-myui::breadcrumb>
```

### Customization

All components accept additional attributes and custom classes:

```blade
<x-myui::breadcrumb class="my-custom-class">
    <x-myui::breadcrumb.list class="custom-list">
        <x-myui::breadcrumb.item>
            <x-myui::breadcrumb.link href="/" class="custom-link">Home</x-myui::breadcrumb.link>
        </x-myui::breadcrumb.item>
    </x-myui::breadcrumb.list>
</x-myui::breadcrumb>
```

## Examples

### Custom Separators

Pass content to the separator to use custom text or symbols. When no content is provided, it defaults to a chevron icon.

```blade
<!-- Slash separator -->
<x-myui::breadcrumb.separator>/</x-myui::breadcrumb.separator>

<!-- Arrow separator -->
<x-myui::breadcrumb.separator>→</x-myui::breadcrumb.separator>

<!-- Pipe separator -->
<x-myui::breadcrumb.separator>|</x-myui::breadcrumb.separator>

<!-- Bullet separator -->
<x-myui::breadcrumb.separator>•</x-myui::breadcrumb.separator>
```

Complete example with custom separator:

```blade
<x-myui::breadcrumb>
    <x-myui::breadcrumb.list>
        <x-myui::breadcrumb.item>
            <x-myui::breadcrumb.link href="/">Home</x-myui::breadcrumb.link>
        </x-myui::breadcrumb.item>
        <x-myui::breadcrumb.separator>→</x-myui::breadcrumb.separator>
        <x-myui::breadcrumb.item>
            <x-myui::breadcrumb.page>Products</x-myui::breadcrumb.page>
        </x-myui::breadcrumb.item>
    </x-myui::breadcrumb.list>
</x-myui::breadcrumb>
```

### Collapsed Items

Use the `breadcrumb.ellipsis` component to indicate hidden items.

```blade
<x-myui::breadcrumb>
    <x-myui::breadcrumb.list>
        <x-myui::breadcrumb.item>
            <x-myui::breadcrumb.link href="/">Home</x-myui::breadcrumb.link>
        </x-myui::breadcrumb.item>
        <x-myui::breadcrumb.separator />
        <x-myui::breadcrumb.item>
            <x-myui::breadcrumb.ellipsis />
        </x-myui::breadcrumb.item>
        <x-myui::breadcrumb.separator />
        <x-myui::breadcrumb.item>
            <x-myui::breadcrumb.page>Breadcrumb</x-myui::breadcrumb.page>
        </x-myui::breadcrumb.item>
    </x-myui::breadcrumb.list>
</x-myui::breadcrumb>
```

### Long Text Handling

Breadcrumb links and pages automatically truncate long text with ellipsis. The max width adjusts by screen size:
- Mobile: 200px
- Tablet: 250px  
- Desktop: 300px

```blade
<x-myui::breadcrumb>
    <x-myui::breadcrumb.list>
        <x-myui::breadcrumb.item>
            <x-myui::breadcrumb.link href="/">Very Long Home Name Here</x-myui::breadcrumb.link>
        </x-myui::breadcrumb.item>
        <x-myui::breadcrumb.separator />
        <x-myui::breadcrumb.item>
            <x-myui::breadcrumb.page>Extremely Long Current Page Title</x-myui::breadcrumb.page>
        </x-myui::breadcrumb.item>
    </x-myui::breadcrumb.list>
</x-myui::breadcrumb>
```

### Responsive Auto-Collapsing

Use `breadcrumb.responsive` to intelligently collapse middle items when screen space is limited. When there are more than 4 items, middle items collapse into an ellipsis indicator.

```blade
<x-myui::breadcrumb.responsive :items="[
    ['label' => 'Home', 'href' => '/'],
    ['label' => 'Documentation', 'href' => '/docs'],
    ['label' => 'UI Components', 'href' => '/components'],
    ['label' => 'Navigation', 'href' => '/components/navigation'],
    ['label' => 'Breadcrumb Component', 'href' => null], // null = current page
]" />
```

#### Responsive Component Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `items` | Array | `[]` | Array of breadcrumb items with `label` and optional `href` |
| `maxVisible` | Integer | `3` | Maximum items to show when collapsed (including ellipsis) |
| `collapseAt` | Integer | `4` | Minimum total items before collapsing kicks in |

## Design System

This component follows shadcn/ui design patterns and includes:

- **Consistent class merging**: Support for custom class overrides using `$attributes->merge(['class' => '...'])`
- **Accessibility**: Proper ARIA attributes (`aria-label`, `aria-current`, `role` attributes) for screen readers
- **Flexible separators**: Customizable separator icons and content
- **Single line layout**: Uses `flex-nowrap` to prevent wrapping, with `overflow-hidden` for clean truncation
- **Icon sizing**: Standardized `h-4 w-4` icon dimensions for consistent visual hierarchy
- **Typography hierarchy**: Clear distinction between links and current page styling
- **Text truncation**: Long labels automatically truncate with ellipsis on smaller screens

