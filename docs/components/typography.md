# Typography Component

Styles for headings, paragraphs, lists, and other text elements.

Based on [shadcn/ui Typography](https://ui.shadcn.com/docs/components/radix/typography).

## Features

- **Multiple variants**: h1, h2, h3, h4, p, lead, large, small, muted, blockquote, inline-code, list, table
- **Consistent styling**: Follows shadcn/ui design system
- **CSS variables**: Automatic light/dark mode support
- **Scroll margin**: Proper spacing for anchor links

## Components

| Component | Description |
|-----------|-------------|
| `x-myui::typography` | The typography wrapper with variant prop |

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | string | `'p'` | The text style variant. See table below for options. |

### Available Variants

| Variant | Element | Description |
|---------|---------|-------------|
| `h1` | h1 | Page title, 4xl font size, extra bold |
| `h2` | h2 | Section heading, 3xl font size, with bottom border |
| `h3` | h3 | Subsection heading, 2xl font size |
| `h4` | h4 | Small heading, xl font size |
| `p` | p | Standard paragraph with leading-7 |
| `lead` | p | Lead paragraph, larger text, muted color |
| `large` | div | Large text, semibold |
| `small` | small | Small text, medium weight |
| `muted` | p | Muted/secondary text color |
| `blockquote` | blockquote | Quote with left border |
| `inline-code` | code | Inline code snippet styling |
| `list` | ul | Unordered list with proper spacing |
| `table` | div | Table wrapper with overflow handling |

## Usage Examples

### Headings

```blade
<x-myui::typography variant="h1">Taxing Laughter: The Joke Tax Chronicles</x-myui::typography>

<x-myui::typography variant="h2">The King's Plan</x-myui::typography>

<x-myui::typography variant="h3">The Joke Tax</x-myui::typography>

<x-myui::typography variant="h4">People stopped telling jokes</x-myui::typography>
```

### Body Text

```blade
<x-myui::typography variant="p">
    The king, seeing how much happier his subjects were, realized the error
    of his ways and repealed the joke tax.
</x-myui::typography>

<x-myui::typography variant="lead">
    A modal dialog that interrupts the user with important content and
    expects a response.
</x-myui::typography>
```

### Special Styles

```blade
<x-myui::typography variant="blockquote">
    "After all," he said, "everyone enjoys a good joke, so it's only fair
    that they should pay for the privilege."
</x-myui::typography>

<x-myui::typography variant="inline-code">@radix-ui/react-alert-dialog</x-myui::typography>

<x-myui::typography variant="large">Are you absolutely sure?</x-myui::typography>

<x-myui::typography variant="small">Email address</x-myui::typography>

<x-myui::typography variant="muted">Enter your email address.</x-myui::typography>
```

### Lists

```blade
<x-myui::typography variant="list">
    <li>1st level of puns: 5 gold coins</li>
    <li>2nd level of jokes: 10 gold coins</li>
    <li>3rd level of one-liners: 20 gold coins</li>
</x-myui::typography>
```

### Tables

```blade
<x-myui::typography variant="table">
    <thead>
        <tr>
            <th>King's Treasury</th>
            <th>People's happiness</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Empty</td>
            <td>Overflowing</td>
        </tr>
        <tr>
            <td>Full</td>
            <td>Ecstatic</td>
        </tr>
    </tbody>
</x-myui::typography>
```

## CSS Classes Reference

| Variant | Key Classes |
|---------|-------------|
| h1 | `scroll-m-20 text-4xl font-extrabold tracking-tight text-balance lg:text-5xl` |
| h2 | `scroll-m-20 border-b pb-2 text-3xl font-semibold tracking-tight first:mt-0` |
| h3 | `scroll-m-20 text-2xl font-semibold tracking-tight` |
| h4 | `scroll-m-20 text-xl font-semibold tracking-tight` |
| p | `leading-7 [&:not(:first-child)]:mt-6` |
| lead | `text-xl text-muted-foreground` |
| large | `text-lg font-semibold` |
| small | `text-sm font-medium leading-none` |
| muted | `text-sm text-muted-foreground` |
| blockquote | `mt-6 border-l-2 pl-6 italic` |
| inline-code | `relative rounded bg-muted px-[0.3rem] py-[0.2rem] font-mono text-sm font-semibold` |
| list | `my-6 ml-6 list-disc [&>li]:mt-2` |
| table | `my-6 w-full overflow-y-auto` |
