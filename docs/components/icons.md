# MyUI Icons

A collection of SVG icon components for Laravel applications, sourced from [Heroicons](https://heroicons.com). These icons are designed as reusable Blade components that accept attributes for customization.

The icon names match Heroicons' naming convention, making it easy to switch between manual SVG usage and these Blade components.

## Icon Collection Status

This is a **partial collection** of Heroicons. Currently includes 43 icons, with more being added over time. All icon names match the [Heroicons](https://heroicons.com) naming convention for easy migration from manual SVG usage.

## Usage

Render any icon using Laravel's Blade component syntax with the `myui` package prefix:

```blade
<x-myui::icons.check class="w-6 h-6 text-green-600" />
<x-myui::icons.heart class="w-5 h-5 text-red-500" />
<x-myui::icons.user class="w-4 h-4" />
```

All icons accept standard HTML attributes through `{{ $attributes->merge() }}`, allowing you to customize:
- **Size**: Use Tailwind classes like `w-4 h-4`, `w-5 h-5`, `w-6 h-6`
- **Color**: Use Tailwind color classes like `text-gray-500`, `text-blue-600`
- **Additional attributes**: `aria-label`, `id`, data attributes, etc.

## Icon Specifications

| Property | Value |
|----------|-------|
| ViewBox | `0 0 24 24` |
| Stroke Width | `1.5` |
| Style | Outline (stroke-based) |
| Color | `currentColor` (inherits from parent) |

## Available Icons

### Navigation & UI

| Icon | Component | Description |
|------|-----------|-------------|
| Check | `<x-myui::icons.check />` | Simple checkmark |
| Check Circle | `<x-myui::icons.check-circle />` | Checkmark in circle |
| Check Badge | `<x-myui::icons.check-badge />` | Verified badge checkmark |
| X | `<x-myui::icons.x />` | Close/X mark |
| Chevron Down | `<x-myui::icons.chevron-down />` | Downward chevron |
| Ellipsis Horizontal | `<x-myui::icons.ellipsis-horizontal />` | Three dots menu |
| External Link | `<x-myui::icons.external-link />` | Arrow pointing out |
| Arrow Top Right on Square | `<x-myui::icons.arrow-top-right-on-square />` | External link |
| Arrow Right Start on Rectangle | `<x-myui::icons.arrow-right-start-on-rectangle />` | Logout/exit |
| Loading | `<x-myui::icons.loading />` | Spinner/loading indicator |

### Communication & Social

| Icon | Component | Description |
|------|-----------|-------------|
| Envelope | `<x-myui::icons.envelope />` | Email/message |
| Bell | `<x-myui::icons.bell />` | Notifications |
| Chat Bubble Oval Left | `<x-myui::icons.chat-bubble-oval-left />` | Chat/message |
| Hashtag | `<x-myui::icons.hashtag />` | Tag/social |
| At Symbol | `<x-myui::icons.at-symbol />` | Mention/email |
| Fire | `<x-myui::icons.fire />` | Trending/popular |
| Heart | `<x-myui::icons.heart />` | Like/favorite |
| Star | `<x-myui::icons.star />` | Rating/favorite |
| Bookmark | `<x-myui::icons.bookmark />` | Save/bookmark |
| Bookmark Slash | `<x-myui::icons.bookmark-slash />` | Remove bookmark |
| Lifebuoy | `<x-myui::icons.lifebuoy />` | Help/support |

### User & Account

| Icon | Component | Description |
|------|-----------|-------------|
| User | `<x-myui::icons.user />` | User profile |
| User Circle | `<x-myui::icons.user-circle />` | User in circle |
| Eye | `<x-myui::icons.eye />` | View/visible |
| Eye Slash | `<x-myui::icons.eye-slash />` | Hidden/invisible |
| Lock Closed | `<x-myui::icons.lock-closed />` | Private/locked |
| Lock Open | `<x-myui::icons.lock-open />` | Unlocked |
| Shield Exclamation | `<x-myui::icons.shield-exclamation />` | Security warning |
| Percent Badge | `<x-myui::icons.percent-badge />` | Discount/percentage |

### Commerce & Shopping

| Icon | Component | Description |
|------|-----------|-------------|
| Shopping Cart | `<x-myui::icons.shopping-cart />` | Cart |
| Shopping Bag | `<x-myui::icons.shopping-bag />` | Shopping bag |
| Building Storefront | `<x-myui::icons.building-storefront />` | Store/shop |
| Truck | `<x-myui::icons.truck />` | Shipping/delivery |
| Briefcase | `<x-myui::icons.briefcase />` | Business/work |

### Search & Location

| Icon | Component | Description |
|------|-----------|-------------|
| Search | `<x-myui::icons.search />` | Search magnifying glass |
| Magnifying Glass | `<x-myui::icons.magnifying-glass />` | Alternative search |
| Map Pin | `<x-myui::icons.map-pin />` | Location/marker |

### Information & Feedback

| Icon | Component | Description |
|------|-----------|-------------|
| Information Circle | `<x-myui::icons.information-circle />` | Info |
| Info | `<x-myui::icons.info />` | Alternative info |
| Question Mark Circle | `<x-myui::icons.question-mark-circle />` | Help/question |
| Trash | `<x-myui::icons.trash />` | Delete/remove |

### Theme & Display

| Icon | Component | Description |
|------|-----------|-------------|
| Sun | `<x-myui::icons.sun />` | Light mode |
| Moon | `<x-myui::icons.moon />` | Dark mode |

## Complete Icon List

```
├── arrow-right-start-on-rectangle.blade.php
├── arrow-top-right-on-square.blade.php
├── at-symbol.blade.php
├── bell.blade.php
├── bookmark.blade.php
├── bookmark-slash.blade.php
├── briefcase.blade.php
├── building-storefront.blade.php
├── chat-bubble-oval-left.blade.php
├── check-badge.blade.php
├── check-circle.blade.php
├── check.blade.php
├── chevron-down.blade.php
├── ellipsis-horizontal.blade.php
├── envelope.blade.php
├── external-link.blade.php
├── eye-slash.blade.php
├── eye.blade.php
├── fire.blade.php
├── hashtag.blade.php
├── heart.blade.php
├── info.blade.php
├── information-circle.blade.php
├── lifebuoy.blade.php
├── loading.blade.php
├── lock-closed.blade.php
├── lock-open.blade.php
├── magnifying-glass.blade.php
├── map-pin.blade.php
├── moon.blade.php
├── percent-badge.blade.php
├── question-mark-circle.blade.php
├── search.blade.php
├── shield-exclamation.blade.php
├── shopping-bag.blade.php
├── shopping-cart.blade.php
├── star.blade.php
├── sun.blade.php
├── trash.blade.php
├── truck.blade.php
├── user-circle.blade.php
├── user.blade.php
├── x.blade.php
```

## Examples

### Button with Icon
```blade
<button class="flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded">
    <x-myui::icons.envelope class="w-4 h-4" />
    Send Message
</button>
```

### Form Input with Icon
```blade
<div class="relative">
    <x-myui::icons.search class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" />
    <input type="text" class="pl-10 pr-4 py-2 border rounded" placeholder="Search..." />
</div>
```

### Status Indicator
```blade
<span class="flex items-center gap-1 text-green-600">
    <x-myui::icons.check-circle class="w-4 h-4" />
    Verified
</span>
```

### Theme Toggle
```blade
<button x-data @click="toggleTheme()">
    <x-myui::icons.sun class="w-5 h-5 dark:hidden" />
    <x-myui::icons.moon class="w-5 h-5 hidden dark:block" />
</button>
```

## Adding New Icons

When adding new icons from [Heroicons](https://heroicons.com):

1. Copy the SVG from Heroicons (outline style, 24x24)
2. Create a new `.blade.php` file in `resources/views/components/icons/`
3. Use the standard SVG structure:
   ```blade
   <svg {{ $attributes->merge() }} xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
       <path stroke-linecap="round" stroke-linejoin="round" d="..." />
   </svg>
   ```
4. Use the exact Heroicons name in kebab-case (e.g., `arrow-right.blade.php`)
5. Update this documentation with the new icon entry

This ensures users can easily migrate from manual Heroicons SVGs to these Blade components using the same names.

## Design System

These icons are sourced from [Heroicons](https://heroicons.com) by the Tailwind CSS team:
- 24x24 grid
- 1.5px stroke
- Rounded caps and joins
- Consistent geometric proportions
- Outline style for maximum flexibility

All icon names match Heroicons' official naming convention, making it seamless to switch between using Heroicons directly and using these Blade components.
