# MyUI Icons

A collection of SVG icon components for Laravel applications, sourced from [Heroicons](https://heroicons.com). These icons are designed as reusable Blade components that accept attributes for customization.

The icon names match Heroicons' naming convention, making it easy to switch between manual SVG usage and these Blade components.

## Icon Collection Status

This is a comprehensive collection of Heroicons. Currently includes **116 icons**, with more being added over time. All icon names match the [Heroicons](https://heroicons.com) naming convention for easy migration from manual SVG usage.

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
| X Circle | `<x-myui::icons.x-circle />` | X in circle |
| Minus | `<x-myui::icons.minus />` | Minus/dash |
| Chevron Down | `<x-myui::icons.chevron-down />` | Downward chevron |
| Chevron Up | `<x-myui::icons.chevron-up />` | Upward chevron |
| Chevron Left | `<x-myui::icons.chevron-left />` | Left chevron |
| Chevron Right | `<x-myui::icons.chevron-right />` | Right chevron |
| Ellipsis Horizontal | `<x-myui::icons.ellipsis-horizontal />` | Three dots horizontal |
| Ellipsis Vertical | `<x-myui::icons.ellipsis-vertical />` | Three dots vertical |
| Bars 2 | `<x-myui::icons.bars-2 />` | Two horizontal lines |
| Bars 3 | `<x-myui::icons.bars-3 />` | Three horizontal lines (hamburger) |
| External Link | `<x-myui::icons.external-link />` | Arrow pointing out |
| Arrow Top Right on Square | `<x-myui::icons.arrow-top-right-on-square />` | External link |
| Arrow Right Start on Rectangle | `<x-myui::icons.arrow-right-start-on-rectangle />` | Logout/exit |
| Arrow Left | `<x-myui::icons.arrow-left />` | Arrow pointing left |
| Arrow Right | `<x-myui::icons.arrow-right />` | Arrow pointing right |
| Arrow Trending Up | `<x-myui::icons.arrow-trending-up />` | Trending up |
| Arrow Trending Down | `<x-myui::icons.arrow-trending-down />` | Trending down |
| Arrows Right Left | `<x-myui::icons.arrows-right-left />` | Transfer/swap |
| Arrows Up Down | `<x-myui::icons.arrows-up-down />` | Sort/resize vertical |
| Cloud Arrow Down | `<x-myui::icons.cloud-arrow-down />` | Download from cloud |
| Loading | `<x-myui::icons.loading />` | Spinner/loading indicator |
| Slash | `<x-myui::icons.slash />` | Slash separator |
| No Symbol | `<x-myui::icons.no-symbol />` | Prohibited/blocked |

### Documents & Files

| Icon | Component | Description |
|------|-----------|-------------|
| Document | `<x-myui::icons.document />` | File/document |
| Document Text | `<x-myui::icons.document-text />` | Document with lines |
| Clipboard | `<x-myui::icons.clipboard />` | Clipboard/copy |
| Photo | `<x-myui::icons.photo />` | Image/picture |
| Arrow Up Tray | `<x-myui::icons.arrow-up-tray />` | Upload |
| Arrow Up on Square | `<x-myui::icons.arrow-up-on-square />` | Share to square |
| QR Code | `<x-myui::icons.qr-code />` | QR code |
| Queue List | `<x-myui::icons.queue-list />` | List/queue |
| Square 2 Stack | `<x-myui::icons.square-2-stack />` | Stacked layers |

### Archives

| Icon | Component | Description |
|------|-----------|-------------|
| Archive Box | `<x-myui::icons.archive-box />` | Archive box |
| Archive Box Arrow Down | `<x-myui::icons.archive-box-arrow-down />` | Archive in |
| Archive Box X Mark | `<x-myui::icons.archive-box-x-mark />` | Archive remove |

### Communication & Social

| Icon | Component | Description |
|------|-----------|-------------|
| Envelope | `<x-myui::icons.envelope />` | Email/message |
| Paper Airplane | `<x-myui::icons.paper-airplane />` | Send/message |
| Bell | `<x-myui::icons.bell />` | Notifications |
| Bell Alert | `<x-myui::icons.bell-alert />` | Urgent notification |
| Chat Bubble Oval Left | `<x-myui::icons.chat-bubble-oval-left />` | Chat/message |
| Chat Bubble Left | `<x-myui::icons.chat-bubble-left />` | Chat left |
| Chat Bubble Left Right | `<x-myui::icons.chat-bubble-left-right />` | Conversation |
| Chat Bubble Bottom Center | `<x-myui::icons.chat-bubble-bottom-center />` | Chat bubble |
| Chat Bubble Bottom Center Text | `<x-myui::icons.chat-bubble-bottom-center-text />` | Chat with text |
| Hashtag | `<x-myui::icons.hashtag />` | Tag/social |
| At Symbol | `<x-myui::icons.at-symbol />` | Mention/email |
| Fire | `<x-myui::icons.fire />` | Trending/popular |
| Heart | `<x-myui::icons.heart />` | Like/favorite |
| Star | `<x-myui::icons.star />` | Rating/favorite |
| Bookmark | `<x-myui::icons.bookmark />` | Save/bookmark |
| Bookmark Slash | `<x-myui::icons.bookmark-slash />` | Remove bookmark |
| Lifebuoy | `<x-myui::icons.lifebuoy />` | Help/support |
| Share | `<x-myui::icons.share />` | Share |
| Megaphone | `<x-myui::icons.megaphone />` | Announcement |
| RSS | `<x-myui::icons.rss />` | RSS feed |

### User & Account

| Icon | Component | Description |
|------|-----------|-------------|
| User | `<x-myui::icons.user />` | User profile |
| User Circle | `<x-myui::icons.user-circle />` | User in circle |
| Users | `<x-myui::icons.users />` | Multiple users |
| User Group | `<x-myui::icons.user-group />` | Group of users |
| Identification | `<x-myui::icons.identification />` | ID card |
| Eye | `<x-myui::icons.eye />` | View/visible |
| Eye Slash | `<x-myui::icons.eye-slash />` | Hidden/invisible |
| Lock Closed | `<x-myui::icons.lock-closed />` | Private/locked |
| Lock Open | `<x-myui::icons.lock-open />` | Unlocked |
| Shield Exclamation | `<x-myui::icons.shield-exclamation />` | Security warning |
| Percent Badge | `<x-myui::icons.percent-badge />` | Discount/percentage |
| Face Smile | `<x-myui::icons.face-smile />` | Happy face |
| Face Frown | `<x-myui::icons.face-frown />` | Sad face |
| Flag | `<x-myui::icons.flag />` | Flag/report |

### Commerce & Shopping

| Icon | Component | Description |
|------|-----------|-------------|
| Shopping Cart | `<x-myui::icons.shopping-cart />` | Cart |
| Shopping Bag | `<x-myui::icons.shopping-bag />` | Shopping bag |
| Building Storefront | `<x-myui::icons.building-storefront />` | Store/shop |
| Truck | `<x-myui::icons.truck />` | Shipping/delivery |
| Briefcase | `<x-myui::icons.briefcase />` | Business/work |
| Wallet | `<x-myui::icons.wallet />` | Payment/wallet |
| Credit Card | `<x-myui::icons.credit-card />` | Payment card |
| Gift | `<x-myui::icons.gift />` | Gift/present |
| Tag | `<x-myui::icons.tag />` | Price tag |
| Ticket | `<x-myui::icons.ticket />` | Ticket/voucher |
| Receipt Percent | `<x-myui::icons.receipt-percent />` | Discount receipt |
| Receipt Refund | `<x-myui::icons.receipt-refund />` | Refund/return |
| Scale | `<x-myui::icons.scale />` | Balance/justice |
| Trophy | `<x-myui::icons.trophy />` | Achievement/prize |
| Rocket Launch | `<x-myui::icons.rocket-launch />` | Launch/deploy |

### Search & Location

| Icon | Component | Description |
|------|-----------|-------------|
| Search | `<x-myui::icons.search />` | Search magnifying glass |
| Magnifying Glass | `<x-myui::icons.magnifying-glass />` | Alternative search |
| Magnifying Glass Circle | `<x-myui::icons.magnifying-glass-circle />` | Search in circle |
| Map Pin | `<x-myui::icons.map-pin />` | Location/marker |
| Map | `<x-myui::icons.map />` | Map/geography |
| Globe Alt | `<x-myui::icons.globe-alt />` | Globe/world |
| Funnel | `<x-myui::icons.funnel />` | Filter |

### Information & Feedback

| Icon | Component | Description |
|------|-----------|-------------|
| Information Circle | `<x-myui::icons.information-circle />` | Info |
| Info | `<x-myui::icons.info />` | Alternative info |
| Question Mark Circle | `<x-myui::icons.question-mark-circle />` | Help/question |

### System & Status

| Icon | Component | Description |
|------|-----------|-------------|
| Signal | `<x-myui::icons.signal />` | Signal strength |
| Signal Slash | `<x-myui::icons.signal-slash />` | No signal |
| Server | `<x-myui::icons.server />` | Server/hosting |
| Sparkles | `<x-myui::icons.sparkles />` | AI/magic/new |
| Trash | `<x-myui::icons.trash />` | Delete/remove |

### Theme & Display

| Icon | Component | Description |
|------|-----------|-------------|
| Sun | `<x-myui::icons.sun />` | Light mode |
| Moon | `<x-myui::icons.moon />` | Dark mode |

### Miscellaneous

| Icon | Component | Description |
|------|-----------|-------------|
| Cake | `<x-myui::icons.cake />` | Birthday/celebration |

### Media & Tools

| Icon | Component | Description |
|------|-----------|-------------|
| Camera | `<x-myui::icons.camera />` | Camera/photo |
| Printer | `<x-myui::icons.printer />` | Print |
| Cog | `<x-myui::icons.cog />` | Settings/gear |
| Wrench | `<x-myui::icons.wrench />` | Tool/repair |
| Calendar | `<x-myui::icons.calendar />` | Date/calendar |
| Clock | `<x-myui::icons.clock />` | Time/clock |
| Calculator | `<x-myui::icons.calculator />` | Calculator/math |
| Beaker | `<x-myui::icons.beaker />` | Lab/experiment |
| Bolt | `<x-myui::icons.bolt />` | Lightning/power |
| Bolt Slash | `<x-myui::icons.bolt-slash />` | No power |
| Light Bulb | `<x-myui::icons.light-bulb />` | Idea/tip |
| Key | `<x-myui::icons.key />` | Key/access |

## Complete Icon List (116 icons)

```
├── archive-box-arrow-down.blade.php
├── archive-box-x-mark.blade.php
├── archive-box.blade.php
├── arrow-left.blade.php
├── arrow-right-start-on-rectangle.blade.php
├── arrow-right.blade.php
├── arrow-top-right-on-square.blade.php
├── arrow-trending-down.blade.php
├── arrow-trending-up.blade.php
├── arrow-up-on-square.blade.php
├── arrow-up-tray.blade.php
├── arrows-right-left.blade.php
├── arrows-up-down.blade.php
├── at-symbol.blade.php
├── bars-2.blade.php
├── bars-3.blade.php
├── beaker.blade.php
├── bell-alert.blade.php
├── bell.blade.php
├── bolt-slash.blade.php
├── bolt.blade.php
├── bookmark-slash.blade.php
├── bookmark.blade.php
├── briefcase.blade.php
├── building-storefront.blade.php
├── cake.blade.php
├── calculator.blade.php
├── calendar.blade.php
├── camera.blade.php
├── chat-bubble-bottom-center-text.blade.php
├── chat-bubble-bottom-center.blade.php
├── chat-bubble-left-right.blade.php
├── chat-bubble-left.blade.php
├── chat-bubble-oval-left.blade.php
├── check-badge.blade.php
├── check-circle.blade.php
├── check.blade.php
├── chevron-down.blade.php
├── chevron-left.blade.php
├── chevron-right.blade.php
├── clipboard.blade.php
├── clock.blade.php
├── cloud-arrow-down.blade.php
├── cog.blade.php
├── credit-card.blade.php
├── document-text.blade.php
├── document.blade.php
├── ellipsis-horizontal.blade.php
├── ellipsis-vertical.blade.php
├── envelope.blade.php
├── external-link.blade.php
├── eye-slash.blade.php
├── eye.blade.php
├── face-frown.blade.php
├── face-smile.blade.php
├── fire.blade.php
├── flag.blade.php
├── funnel.blade.php
├── gift.blade.php
├── globe-alt.blade.php
├── hashtag.blade.php
├── heart.blade.php
├── identification.blade.php
├── info.blade.php
├── information-circle.blade.php
├── key.blade.php
├── lifebuoy.blade.php
├── light-bulb.blade.php
├── loading.blade.php
├── lock-closed.blade.php
├── lock-open.blade.php
├── magnifying-glass-circle.blade.php
├── magnifying-glass.blade.php
├── map-pin.blade.php
├── map.blade.php
├── megaphone.blade.php
├── minus.blade.php
├── moon.blade.php
├── no-symbol.blade.php
├── paper-airplane.blade.php
├── percent-badge.blade.php
├── photo.blade.php
├── printer.blade.php
├── qr-code.blade.php
├── question-mark-circle.blade.php
├── queue-list.blade.php
├── receipt-percent.blade.php
├── receipt-refund.blade.php
├── rocket-launch.blade.php
├── rss.blade.php
├── scale.blade.php
├── server.blade.php
├── share.blade.php
├── shield-exclamation.blade.php
├── shopping-bag.blade.php
├── shopping-cart.blade.php
├── signal-slash.blade.php
├── signal.blade.php
├── slash.blade.php
├── sparkles.blade.php
├── square-2-stack.blade.php
├── star.blade.php
├── sun.blade.php
├── tag.blade.php
├── ticket.blade.php
├── trash.blade.php
├── trophy.blade.php
├── truck.blade.php
├── user-circle.blade.php
├── user-group.blade.php
├── user.blade.php
├── users.blade.php
├── wallet.blade.php
├── wrench.blade.php
├── x-circle.blade.php
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
