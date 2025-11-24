# Breadcrumb Component

Displays the path to the current resource using a hierarchy of links.

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

