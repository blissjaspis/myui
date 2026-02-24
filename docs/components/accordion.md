# Accordion Component

A vertically stacked set of interactive headings that each reveal a section of content.

Based on [shadcn/ui Accordion](https://ui.shadcn.com/docs/components/radix/accordion).

## Features

- **Single or Multiple Mode**: Control if one or multiple items can be open at once
- **Collapsible**: Option to allow all items to be closed in single mode
- **Keyboard navigation**: Enter/Space to toggle items
- **Smooth animations**: Built-in collapse/expand transitions
- **Disabled state**: Individual items can be disabled
- **Data attributes**: `data-state="open|closed"` for custom styling

## Components

| Component | Description |
|-----------|-------------|
| `x-myui::accordion` | The root container managing state |
| `x-myui::accordion.item` | Individual accordion item wrapper |
| `x-myui::accordion.trigger` | The clickable header that toggles content |
| `x-myui::accordion.content` | The collapsible content panel |

## Props

### Accordion (Root)

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `type` | `'single' \| 'multiple'` | `'single'` | Determines if one or multiple items can be open. |
| `collapsible` | `boolean` | `false` | When `true` and `type="single"`, allows closing the currently open item. |
| `defaultValue` | `string` | `null` | The value of the item that should be open initially. |

### Accordion Item

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | `string` | `''` | The unique value identifying the item. |
| `disabled` | `boolean` | `false` | When `true`, prevents user interaction. |

### Accordion Trigger

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `disabled` | `boolean` | `false` | When `true`, prevents user interaction. |

### Accordion Content

No specific props. Uses the parent item's value for state management.

## Usage Examples

### Single (Default)

Only one item can be open at a time.

```blade
<x-myui::accordion type="single" collapsible defaultValue="item-1">
    <x-myui::accordion.item value="item-1">
        <x-myui::accordion.trigger>Is it accessible?</x-myui::accordion.trigger>
        <x-myui::accordion.content>
            Yes. It adheres to the WAI-ARIA design pattern.
        </x-myui::accordion.content>
    </x-myui::accordion.item>

    <x-myui::accordion.item value="item-2">
        <x-myui::accordion.trigger>Is it styled?</x-myui::accordion.trigger>
        <x-myui::accordion.content>
            Yes. It comes with default styles that match the other components' aesthetic.
        </x-myui::accordion.content>
    </x-myui::accordion.item>

    <x-myui::accordion.item value="item-3">
        <x-myui::accordion.trigger>Is it animated?</x-myui::accordion.trigger>
        <x-myui::accordion.content>
            Yes. It's animated by default, but you can disable it if you prefer.
        </x-myui::accordion.content>
    </x-myui::accordion.item>
</x-myui::accordion>
```

### Multiple

Multiple items can be open at the same time.

```blade
<x-myui::accordion type="multiple" defaultValue="item-1">
    <x-myui::accordion.item value="item-1">
        <x-myui::accordion.trigger>What are your shipping options?</x-myui::accordion.trigger>
        <x-myui::accordion.content>
            We offer standard (5-7 days), express (2-3 days), and overnight shipping. Free shipping on orders over $50.
        </x-myui::accordion.content>
    </x-myui::accordion.item>

    <x-myui::accordion.item value="item-2">
        <x-myui::accordion.trigger>What is your return policy?</x-myui::accordion.trigger>
        <x-myui::accordion.content>
            You can return any item within 30 days of purchase for a full refund. Items must be in original condition.
        </x-myui::accordion.content>
    </x-myui::accordion.item>

    <x-myui::accordion.item value="item-3">
        <x-myui::accordion.trigger>How can I contact support?</x-myui::accordion.trigger>
        <x-myui::accordion.content>
            You can reach our support team via email at support@example.com or call us at 1-800-EXAMPLE.
        </x-myui::accordion.content>
    </x-myui::accordion.item>
</x-myui::accordion>
```

### With Card

Wrap the accordion in a card component for a contained look.

```blade
<x-myui::card>
    <x-myui::card.header>
        <x-myui::card.title>Frequently Asked Questions</x-myui::card.title>
        <x-myui::card.description>
            Common questions about your account, plans, payments and cancellations.
        </x-myui::card.description>
    </x-myui::card.header>
    <x-myui::card.content>
        <x-myui::accordion type="single" collapsible>
            <x-myui::accordion.item value="plans">
                <x-myui::accordion.trigger>What subscription plans do you offer?</x-myui::accordion.trigger>
                <x-myui::accordion.content>
                    We offer three subscription tiers: Starter ($9/month), Professional ($29/month), and Enterprise ($99/month).
                </x-myui::accordion.content>
            </x-myui::accordion.item>

            <x-myui::accordion.item value="billing">
                <x-myui::accordion.trigger>How does billing work?</x-myui::accordion.trigger>
                <x-myui::accordion.content>
                    Billing is charged at the beginning of each cycle. You can cancel anytime.
                </x-myui::accordion.content>
            </x-myui::accordion.item>

            <x-myui::accordion.item value="cancel">
                <x-myui::accordion.trigger>How do I cancel my subscription?</x-myui::accordion.trigger>
                <x-myui::accordion.content>
                    You can cancel your subscription from your account settings at any time.
                </x-myui::accordion.content>
            </x-myui::accordion.item>
        </x-myui::accordion>
    </x-myui::card.content>
</x-myui::card>
```

### Disabled Item

Disable individual accordion items.

```blade
<x-myui::accordion type="single" collapsible>
    <x-myui::accordion.item value="active">
        <x-myui::accordion.trigger>Active Item</x-myui::accordion.trigger>
        <x-myui::accordion.content>
            This item is active and can be toggled.
        </x-myui::accordion.content>
    </x-myui::accordion.item>

    <x-myui::accordion.item value="disabled" disabled>
        <x-myui::accordion.trigger>Disabled Item</x-myui::accordion.trigger>
        <x-myui::accordion.content>
            This item is disabled and cannot be toggled.
        </x-myui::accordion.content>
    </x-myui::accordion.item>
</x-myui::accordion>
```

## Accessibility

- Uses proper ARIA attributes: `aria-expanded` for state indication
- Implements keyboard navigation (Enter/Space to toggle)
- Focus management with visible focus ring
- `data-state` attributes for styling open/closed states
- `data-disabled` attribute for disabled state styling

## CSS Classes Reference

| Component | Key Classes |
|-----------|-------------|
| Accordion Item | `border-b` |
| Accordion Trigger | `flex flex-1 items-center justify-between py-4 font-medium transition-all hover:underline [&[data-state=open]>svg]:rotate-180` |
| Accordion Content | `overflow-hidden text-sm transition-all` |
| Chevron Icon | `h-4 w-4 shrink-0 transition-transform duration-200` |

## View the Component

You can view and test the accordion component in the workbench:

[http://localhost:8080/accordion](http://localhost:8080/accordion)
