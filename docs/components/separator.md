# Separator Component

Visually or semantically separates content.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `orientation` | string | `'horizontal'` | The orientation of the separator. Options: `'horizontal'`, `'vertical'`. |
| `decorative` | boolean | `false` | When `true`, the separator is purely visual and hidden from assistive technologies. |

## Usage

### Horizontal

Default horizontal separator.

```blade
<x-myui::separator />
```

### Vertical

Use `orientation="vertical"` for a vertical separator.

```blade
<div class="flex h-5 items-center gap-4 text-sm">
    <div>Blog</div>
    <x-myui::separator orientation="vertical" />
    <div>Docs</div>
    <x-myui::separator orientation="vertical" />
    <div>Source</div>
</div>
```

### Menu

Vertical separators between menu items.

```blade
<div class="flex items-center gap-2 text-sm md:gap-4">
    <div class="flex flex-col gap-1">
        <span class="font-medium">Settings</span>
        <span class="text-muted-foreground text-xs">Manage preferences</span>
    </div>
    <x-myui::separator orientation="vertical" />
    <div class="flex flex-col gap-1">
        <span class="font-medium">Account</span>
        <span class="text-muted-foreground text-xs">Profile & security</span>
    </div>
    <x-myui::separator orientation="vertical" class="hidden md:block" />
    <div class="hidden flex-col gap-1 md:flex">
        <span class="font-medium">Help</span>
        <span class="text-muted-foreground text-xs">Support & docs</span>
    </div>
</div>
```

### List

Horizontal separators between list items.

```blade
<div class="flex w-full max-w-sm flex-col gap-2 text-sm">
    <dl class="flex items-center justify-between">
        <dt>Item 1</dt>
        <dd class="text-muted-foreground">Value 1</dd>
    </dl>
    <x-myui::separator />
    <dl class="flex items-center justify-between">
        <dt>Item 2</dt>
        <dd class="text-muted-foreground">Value 2</dd>
    </dl>
    <x-myui::separator />
    <dl class="flex items-center justify-between">
        <dt>Item 3</dt>
        <dd class="text-muted-foreground">Value 3</dd>
    </dl>
</div>
```

### Decorative

Use `decorative="true"` for purely visual separators that should not be announced by screen readers.

```blade
<div class="flex max-w-sm flex-col gap-4 text-sm">
    <div class="flex flex-col gap-1.5">
        <div class="leading-none font-medium">shadcn/ui</div>
        <div class="text-muted-foreground">The Foundation for your Design System</div>
    </div>
    <x-myui::separator decorative />
    <div>A set of beautifully designed components that you can customize.</div>
</div>
```
