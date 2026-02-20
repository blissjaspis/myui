# Breadcrumb Component

A breadcrumb component that follows shadcn/ui design patterns, displaying the path to the current resource using a hierarchy of links.

## Recent Updates

The breadcrumb component has been updated to match the shadcn/ui design system styling and structure. Key improvements include:

- **Consistent Class Merging**: All components now support custom class overrides using `$attributes->merge(['class' => '...'])`
- **Updated Separator Styling**: The separator now uses `flex h-4 w-4 items-center justify-center` container with `h-4 w-4` icon sizing
- **Enhanced Flexibility**: Components accept additional attributes for better customization
- **Accessibility Maintained**: Preserved ARIA attributes for screen readers

## Components

- `x-myui::breadcrumb`: The root container.
- `x-myui::breadcrumb.list`: The list of items.
- `x-myui::breadcrumb.item`: The individual item.
- `x-myui::breadcrumb.link`: The link to the item.
- `x-myui::breadcrumb.page`: The page name.
- `x-myui::breadcrumb.separator`: The separator between items.
- `x-myui::breadcrumb.ellipsis`: The ellipsis to indicate hidden items.


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

### Custom Separator

You can use a custom separator by passing a slot to the separator component or by using a different icon.

```blade
<x-myui::breadcrumb>
    <x-myui::breadcrumb.list>
        <x-myui::breadcrumb.item>
            <x-myui::breadcrumb.link href="/">Home</x-myui::breadcrumb.link>
        </x-myui::breadcrumb.item>
        <x-myui::breadcrumb.separator>
             /
        </x-myui::breadcrumb.separator>
        <x-myui::breadcrumb.item>
            <x-myui::breadcrumb.page>Breadcrumb</x-myui::breadcrumb.page>
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

## Design System

This component follows shadcn/ui design patterns and includes:

- **Consistent class merging**: Support for custom class overrides using `$attributes->merge(['class' => '...'])`
- **Accessibility**: Proper ARIA attributes (`aria-label`, `aria-current`, `role` attributes) for screen readers
- **Flexible separators**: Customizable separator icons and content
- **Responsive design**: Automatic text wrapping and spacing adjustments for different screen sizes
- **Icon sizing**: Standardized `h-4 w-4` icon dimensions for consistent visual hierarchy
- **Typography hierarchy**: Clear distinction between links and current page styling

