# Avatar Component

An image element with a fallback for representing the user. Following shadcn/ui design patterns, perfect for user profiles, team listings, and collaborative interfaces.

## Props

### Avatar

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | string | `'default'` | The size of the avatar. Options: `'sm'`, `'default'`, `'lg'`, `'xl'`. |

### AvatarImage

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `src` | string | `''` | The image source URL. |
| `alt` | string | `''` | The alt text for the image. |

### AvatarFallback

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| - | - | - | Slot content for initials or placeholder text when image fails to load. |

### AvatarBadge

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `class` | string | `''` | Additional classes for customizing badge color. Default is `bg-green-500`. |

### AvatarGroup

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| - | - | - | Wrapper for grouping multiple avatars with overlapping styling. |

### AvatarGroupCount

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `count` | number | - | The number to display as "+N" for additional users. |

## Usage Examples

### Basic Avatar

```blade
<x-myui::avatar>
    <x-myui::avatar.image src="https://github.com/shadcn.png" alt="@shadcn" />
    <x-myui::avatar.fallback>CN</x-myui::avatar.fallback>
</x-myui::avatar>
```

### Fallback Only

When no image source is provided or the image fails to load, the fallback will be displayed.

```blade
<x-myui::avatar>
    <x-myui::avatar.fallback>JD</x-myui::avatar.fallback>
</x-myui::avatar>
```

### Sizes

Use the `size` prop to change the avatar size.

```blade
<x-myui::avatar size="sm">
    <x-myui::avatar.image src="..." alt="..." />
    <x-myui::avatar.fallback>SM</x-myui::avatar.fallback>
</x-myui::avatar>

<x-myui::avatar size="default">
    <x-myui::avatar.image src="..." alt="..." />
    <x-myui::avatar.fallback>MD</x-myui::avatar.fallback>
</x-myui::avatar>

<x-myui::avatar size="lg">
    <x-myui::avatar.image src="..." alt="..." />
    <x-myui::avatar.fallback>LG</x-myui::avatar.fallback>
</x-myui::avatar>

<x-myui::avatar size="xl">
    <x-myui::avatar.image src="..." alt="..." />
    <x-myui::avatar.fallback>XL</x-myui::avatar.fallback>
</x-myui::avatar>
```

### With Badge

Use the `AvatarBadge` component to add a status indicator to the avatar.

```blade
<!-- Online (green) -->
<x-myui::avatar>
    <x-myui::avatar.image src="..." alt="..." />
    <x-myui::avatar.fallback>CN</x-myui::avatar.fallback>
    <x-myui::avatar.badge class="bg-green-500" />
</x-myui::avatar>

<!-- Offline (gray) -->
<x-myui::avatar>
    <x-myui::avatar.image src="..." alt="..." />
    <x-myui::avatar.fallback>CN</x-myui::avatar.fallback>
    <x-myui::avatar.badge class="bg-gray-400" />
</x-myui::avatar>

<!-- Busy (red) -->
<x-myui::avatar>
    <x-myui::avatar.image src="..." alt="..." />
    <x-myui::avatar.fallback>CN</x-myui::avatar.fallback>
    <x-myui::avatar.badge class="bg-red-500" />
</x-myui::avatar>

<!-- Away (yellow) -->
<x-myui::avatar>
    <x-myui::avatar.image src="..." alt="..." />
    <x-myui::avatar.fallback>CN</x-myui::avatar.fallback>
    <x-myui::avatar.badge class="bg-yellow-500" />
</x-myui::avatar>
```

### Avatar Group

Use the `AvatarGroup` component to display multiple avatars with overlapping styling.

```blade
<x-myui::avatar.group>
    <x-myui::avatar>
        <x-myui::avatar.image src="..." alt="User 1" />
        <x-myui::avatar.fallback>U1</x-myui::avatar.fallback>
    </x-myui::avatar>
    <x-myui::avatar>
        <x-myui::avatar.image src="..." alt="User 2" />
        <x-myui::avatar.fallback>U2</x-myui::avatar.fallback>
    </x-myui::avatar>
    <x-myui::avatar>
        <x-myui::avatar.image src="..." alt="User 3" />
        <x-myui::avatar.fallback>U3</x-myui::avatar.fallback>
    </x-myui::avatar>
</x-myui::avatar.group>
```

### Avatar Group with Count

Use `AvatarGroupCount` to show the number of additional users.

```blade
<x-myui::avatar.group>
    <x-myui::avatar>
        <x-myui::avatar.image src="..." alt="User 1" />
        <x-myui::avatar.fallback>U1</x-myui::avatar.fallback>
    </x-myui::avatar>
    <x-myui::avatar>
        <x-myui::avatar.image src="..." alt="User 2" />
        <x-myui::avatar.fallback>U2</x-myui::avatar.fallback>
    </x-myui::avatar>
    <x-myui::avatar>
        <x-myui::avatar.image src="..." alt="User 3" />
        <x-myui::avatar.fallback>U3</x-myui::avatar.fallback>
    </x-myui::avatar>
    <x-myui::avatar.group-count count="5" />
</x-myui::avatar.group>
```

### With Dropdown

You can use the Avatar component as a trigger for a dropdown menu.

```blade
<x-myui::dropdown>
    <x-myui::dropdown.trigger>
        <x-myui::avatar class="cursor-pointer">
            <x-myui::avatar.image src="..." alt="User" />
            <x-myui::avatar.fallback>US</x-myui::avatar.fallback>
        </x-myui::avatar>
    </x-myui::dropdown.trigger>
    <x-myui::dropdown.content>
        <x-myui::dropdown.group>
            <x-myui::dropdown.label>My Account</x-myui::dropdown.label>
            <x-myui::dropdown.item>Profile</x-myui::dropdown.item>
            <x-myui::dropdown.item>Settings</x-myui::dropdown.item>
        </x-myui::dropdown.group>
        <x-myui::dropdown.separator />
        <x-myui::dropdown.item>Log out</x-myui::dropdown.item>
    </x-myui::dropdown.content>
</x-myui::dropdown>
```

## Design System

This component follows shadcn/ui design patterns and includes:

- **Consistent sizing**: Four predefined sizes (sm, default, lg, xl) for flexibility
- **Circular shape**: Fully rounded avatars following modern design trends
- **Fallback support**: Graceful degradation with initials when images fail
- **Status indicators**: Badge component for online/offline/busy states
- **Group support**: Overlapping avatars for team/user listings
- **Accessibility**: Proper alt text support and semantic HTML structure
