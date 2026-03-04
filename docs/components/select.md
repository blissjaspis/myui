# Select Component

A collection of select/dropdown components inspired by shadcn/ui design patterns, built with Laravel Blade and Alpine.js.

## Requirements

The select component requires the following Alpine.js plugins:

```html
<!-- Alpine.js Anchor plugin (for positioning) -->
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/anchor@3.x.x/dist/cdn.min.js"></script>
<!-- Alpine.js Focus plugin (for focus management) -->
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
<!-- Alpine.js Core -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

## Overview

This package provides two select component approaches:

1. **Shadcn-style Components** (`<x-myui::select>`) - Composable, modular components for full control
2. **Basic Select** (`<x-myui::select.basic>`) - All-in-one component with built-in features

---

## Shadcn-Style Components

Composable select components that follow shadcn/ui design patterns.

### Available Components

| Component | Description |
|-----------|-------------|
| `<x-myui::select>` | Main wrapper with Alpine.js state management |
| `<x-myui::select.trigger>` | Button to open/close the dropdown |
| `<x-myui::select.value>` | Displays selected value or placeholder |
| `<x-myui::select.content>` | Dropdown content container |
| `<x-myui::select.group>` | Groups items together |
| `<x-myui::select.item>` | Individual selectable option |
| `<x-myui::select.label>` | Label for a group |
| `<x-myui::select.separator>` | Visual divider between groups |

### Basic Usage

```blade
<x-myui::select name="theme">
    <x-myui::select.trigger>
        <x-myui::select.value placeholder="Select a theme" />
    </x-myui::select.trigger>
    <x-myui::select.content>
        <x-myui::select.item value="light">Light</x-myui::select.item>
        <x-myui::select.item value="dark">Dark</x-myui::select.item>
        <x-myui::select.item value="system">System</x-myui::select.item>
    </x-myui::select.content>
</x-myui::select>
```

### Component Props

#### `<x-myui::select>` Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `wire` | string | `null` | Livewire property for entanglement (Livewire v4 compatible) |
| `name` | string | `null` | Form input name (creates hidden input) |
| `value` | string | `null` | Initial selected value |
| `disabled` | boolean | `false` | Disable the entire select |
| `required` | boolean | `false` | Make the select required |

#### `<x-myui::select.trigger>` Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `size` | string | `'default'` | Trigger size: `'sm'`, `'default'`, `'lg'` |
| `class` | string | `null` | Additional CSS classes |

#### `<x-myui::select.value>` Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `placeholder` | string | `null` | Placeholder text when nothing selected |

#### `<x-myui::select.content>` Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `position` | string | `'popper'` | Positioning: `'popper'`, `'item-aligned'` |
| `align` | string | `'center'` | Alignment: `'start'`, `'center'`, `'end'` |
| `side` | string | `'bottom'` | Side: `'top'`, `'bottom'` |
| `sideOffset` | int | `4` | Distance from trigger |
| `teleport` | string | `'body'` | Element to teleport content to |
| `matchTriggerWidth` | boolean | `true` | Match dropdown width to trigger button |
| `class` | string | `null` | Additional CSS classes |

> **Note:** The select content uses Alpine.js `x-teleport` to portal the dropdown to the document body. This ensures proper z-index handling and positioning even inside overflow containers or modals. By default, the dropdown width automatically matches the trigger button's width using Alpine's anchor plugin.

#### `<x-myui::select.item>` Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `value` | string | `null` | The option value (required) |
| `disabled` | boolean | `false` | Disable this item |

### Usage Examples

#### With Groups and Separators

```blade
<x-myui::select name="fruit">
    <x-myui::select.trigger>
        <x-myui::select.value placeholder="Select a fruit" />
    </x-myui::select.trigger>
    <x-myui::select.content>
        <x-myui::select.group>
            <x-myui::select.label>Citrus</x-myui::select.label>
            <x-myui::select.item value="orange">Orange</x-myui::select.item>
            <x-myui::select.item value="lemon">Lemon</x-myui::select.item>
        </x-myui::select.group>
        <x-myui::select.separator />
        <x-myui::select.group>
            <x-myui::select.label>Berries</x-myui::select.label>
            <x-myui::select.item value="strawberry">Strawberry</x-myui::select.item>
            <x-myui::select.item value="blueberry">Blueberry</x-myui::select.item>
        </x-myui::select.group>
    </x-myui::select.content>
</x-myui::select>
```

#### With Disabled Items

```blade
<x-myui::select name="plan">
    <x-myui::select.trigger>
        <x-myui::select.value placeholder="Select a plan" />
    </x-myui::select.trigger>
    <x-myui::select.content>
        <x-myui::select.item value="free">Free</x-myui::select.item>
        <x-myui::select.item value="pro">Pro</x-myui::select.item>
        <x-myui::select.item value="enterprise" disabled>Enterprise</x-myui::select.item>
    </x-myui::select.content>
</x-myui::select>
```

#### Size Variants

```blade
<!-- Small -->
<x-myui::select.trigger size="sm">
    <x-myui::select.value placeholder="Small trigger" />
</x-myui::select.trigger>

<!-- Default -->
<x-myui::select.trigger size="default">
    <x-myui::select.value placeholder="Default trigger" />
</x-myui::select.trigger>

<!-- Large -->
<x-myui::select.trigger size="lg">
    <x-myui::select.value placeholder="Large trigger" />
</x-myui::select.trigger>
```

#### Livewire Integration (Livewire v4)

The select component uses Alpine v3 and supports Livewire v4 via Alpine's `$wire.entangle()`.

You can bind either with the component `wire` prop or with native `wire:model` attributes:

```blade
<x-myui::select wire="selectedUser">...</x-myui::select>
<x-myui::select wire:model.live="selectedUser">...</x-myui::select>
```

The selected value automatically syncs with your Livewire component's public property.

**Frontend (Blade View):**

```blade
<x-myui::select wire="selectedUser">
    <x-myui::select.trigger>
        <x-myui::select.value placeholder="Choose a user" />
    </x-myui::select.trigger>
    <x-myui::select.content>
        @foreach($users as $user)
            <x-myui::select.item :value="$user->id">{{ $user->name }}</x-myui::select.item>
        @endforeach
    </x-myui::select.content>
</x-myui::select>
```

**Backend (Livewire Component):**

```php
<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserForm extends Component
{
    public $selectedUser = null;  // Bound to the select component
    public $users = [];           // Options to populate the dropdown

    public function mount()
    {
        $this->users = User::all()
            ->map(fn($user) => [
                'id' => $user->id,
                'name' => $user->name
            ])
            ->toArray();
    }

    public function save()
    {
        // $this->selectedUser contains the selected value
        User::find($this->selectedUser)->update([...]);
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
```

**Cascading/Dependent Selects:**

When you need selects that depend on each other (e.g., Country → State → City):

```blade
<!-- Country Selection -->
<x-myui::select wire="selectedCountry">
    <x-myui::select.trigger>
        <x-myui::select.value placeholder="Select country" />
    </x-myui::select.trigger>
    <x-myui::select.content>
        @foreach($countries as $country)
            <x-myui::select.item :value="$country['id']">{{ $country['name'] }}</x-myui::select.item>
        @endforeach
    </x-myui::select.content>
</x-myui::select>

<!-- State Selection (dependent on country) -->
<x-myui::select wire="selectedState">
    <x-myui::select.trigger>
        <x-myui::select.value placeholder="Select state" />
    </x-myui::select.trigger>
    <x-myui::select.content>
        @foreach($states as $state)
            <x-myui::select.item :value="$state['id']">{{ $state['name'] }}</x-myui::select.item>
        @endforeach
    </x-myui::select.content>
</x-myui::select>
```

```php
<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\State;

class LocationForm extends Component
{
    public $selectedCountry = null;
    public $selectedState = null;
    public $countries = [];
    public $states = [];

    public function mount()
    {
        $this->countries = Country::all(['id', 'name'])->toArray();
    }

    // Automatically called when selectedCountry changes
    public function updatedSelectedCountry($value)
    {
        $this->selectedState = null; // Reset state when country changes
        $this->states = State::where('country_id', $value)
            ->get(['id', 'name'])
            ->toArray();
    }

    public function render()
    {
        return view('livewire.location-form');
    }
}
```

**With Validation:**

```blade
<div>
    <x-myui::select wire="selectedRole">
        <x-myui::select.trigger>
            <x-myui::select.value placeholder="Select a role" />
        </x-myui::select.trigger>
        <x-myui::select.content>
            <x-myui::select.item value="admin">Administrator</x-myui::select.item>
            <x-myui::select.item value="editor">Editor</x-myui::select.item>
            <x-myui::select.item value="viewer">Viewer</x-myui::select.item>
        </x-myui::select.content>
    </x-myui::select>

    @error('selectedRole')
        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>
```

```php
<?php

namespace App\Livewire;

use Livewire\Component;

class RoleForm extends Component
{
    public $selectedRole = null;

    protected $rules = [
        'selectedRole' => 'required|in:admin,editor,viewer',
    ];

    protected $messages = [
        'selectedRole.required' => 'Please select a role.',
    ];

    public function save()
    {
        $this->validate();

        // Proceed with saving
    }

    public function render()
    {
        return view('livewire.role-form');
    }
}
```

**Pre-selecting a Value:**

```php
public function mount($userId)
{
    $user = User::find($userId);
    $this->selectedUser = $user->role_id; // Pre-select the user's current role
}
```

#### Custom Dropdown Width

By default, the dropdown automatically matches the trigger button's width. To use a custom width instead:

```blade
<x-myui::select name="theme">
    <x-myui::select.trigger>
        <x-myui::select.value placeholder="Select a theme" />
    </x-myui::select.trigger>
    <x-myui::select.content :matchTriggerWidth="false" class="w-96">
        <x-myui::select.item value="light">Light</x-myui::select.item>
        <x-myui::select.item value="dark">Dark</x-myui::select.item>
        <x-myui::select.item value="system">System</x-myui::select.item>
    </x-myui::select.content>
</x-myui::select>
```

---

## Select Basic Component

A complete, all-in-one select component with built-in search and clear functionality.

### Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `name` | string | - | The name attribute for form submission (required if not using Livewire) |
| `label` | string | - | Label text displayed above the select |
| `options` | array | `[]` | Array of options with `label` and `value` keys |
| `placeholder` | string | `'Select an option...'` | Placeholder text |
| `wire` | string | `null` | Livewire property to bind to |
| `showClearIcon` | boolean | `false` | Show a clear button to reset selection |
| `showSearch` | boolean | `false` | Show a search input in the dropdown |

### Usage Example

```blade
<x-myui::select.basic
    name="user_id"
    label="Select User"
    :options="$users"
    placeholder="Choose a user..."
    wire="selectedUser"
    show-search
    show-clear-icon
/>
```

### Options Array Structure

```php
$users = [
    ['label' => 'John Doe', 'value' => 1],
    ['label' => 'Jane Smith', 'value' => 2],
    ['label' => 'Bob Johnson', 'value' => 3],
];
```

### Livewire Integration

The basic select component uses the same `wire` prop for two-way binding, but also supports dynamic option updates via events.

**Basic Binding:**

```blade
<x-myui::select.basic
    wire="selectedUser"
    label="Choose User"
    :options="$users"
    placeholder="Select a user..."
/>
```

```php
<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserDropdown extends Component
{
    public $selectedUser = null;
    public $users = [];

    public function mount()
    {
        $this->loadUsers();
    }

    public function loadUsers($search = '')
    {
        $query = User::query();

        if ($search) {
            $query->where('name', 'like', "%{$search}%");
        }

        // Format must have 'label' and 'value' keys
        $this->users = $query->get()
            ->map(fn($user) => [
                'label' => $user->name,
                'value' => $user->id
            ])
            ->toArray();
    }

    public function render()
    {
        return view('livewire.user-dropdown');
    }
}
```

**Dynamic Option Updates:**

The basic select listens for `updateOptions` events to refresh its options without reloading the page.

```php
// In your Livewire component
public function updatedSearchQuery($value)
{
    // Filter users based on search
    $filteredUsers = User::where('name', 'like', "%{$value}%")
        ->get()
        ->map(fn($user) => [
            'label' => $user->name,
            'value' => $user->id
        ])
        ->toArray();

    // Dispatch event to update the select options
    $this->dispatch('updateOptions', [
        [
            'target' => 'selectedUser',     // The wire property to update
            'options' => $filteredUsers,      // New options array
            'reset' => []                     // Optional: other properties to reset
        ]
    ]);
}

// Reset with cascading effect
public function clearSelection()
{
    $this->dispatch('updateOptions', [
        [
            'target' => 'selectedUser',
            'options' => [],
            'reset' => ['selectedDepartment', 'selectedTeam']  // Reset related fields
        ]
    ]);
}
```

**With Search Enabled:**

```blade
<x-myui::select.basic
    wire="selectedProduct"
    label="Product"
    :options="$products"
    placeholder="Search products..."
    show-search
    show-clear-icon
/>
```

```php
<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductSelector extends Component
{
    public $selectedProduct = null;
    public $products = [];

    public function mount()
    {
        $this->products = Product::all()
            ->map(fn($p) => ['label' => $p->name, 'value' => $p->id])
            ->toArray();
    }

    // Called when selection changes
    public function updatedSelectedProduct($value)
    {
        $product = Product::find($value);
        // Do something with selected product
        $this->dispatch('productSelected', $product->toArray());
    }

    public function render()
    {
        return view('livewire.product-selector');
    }
}
```

---

## Features

- **Dark Mode Support** - All components include dark mode styling
- **Keyboard Navigation** - Full keyboard support (Enter, Space, Escape, Tab)
- **Accessibility** - Proper ARIA attributes and roles
- **Form Integration** - Hidden input support for traditional form submissions
- **Livewire Support** - Native entanglement for reactive updates
- **Transitions** - Smooth open/close animations with Alpine.js

## CSS Classes

Components use standard Tailwind CSS with these custom properties:

- `border-input` - Input border color
- `bg-popover` - Dropdown background
- `text-popover-foreground` - Dropdown text color
- `bg-accent` / `text-accent-foreground` - Selected/hover states
- `text-muted-foreground` - Placeholder text

Ensure your `tailwind.config.js` includes these colors or customize the component templates.

---

## How Livewire Integration Works

### Technical Overview

The select component uses Alpine.js's `$wire.entangle()` to create a reactive two-way binding between the frontend selection and the Livewire backend property.

**Frontend (Alpine.js):**
```javascript
// From select/index.blade.php
value: $wire.entangle('propertyName')
```

This means:
- When a user selects an item, `value` updates automatically
- The `$wire.entangle()` syncs this value back to the Livewire component
- If the Livewire property changes server-side, the select updates automatically

### Data Flow

```
User clicks item
       ↓
Alpine value updates
       ↓
$wire.entangle() syncs to Livewire
       ↓
Livewire property updated
       ↓
Server processes (validation, etc.)
       ↓
Livewire re-renders if needed
       ↓
Select reflects new state
```

### Option Value Types

The `value` prop on `select.item` accepts:
- **Strings**: `value="active"`
- **Numbers**: `:value="1"` (use colon prefix for integers)
- **Booleans**: `:value="true"`

### Common Pitfalls

1. **Using both `wire` and `wire:model` at the same time**: Use one binding style consistently. If both are provided, prefer the `wire` prop for clarity.

2. **Integer values as strings**: If your Livewire property expects an integer, use `:value="$user->id"` (with colon) instead of `value="{{ $user->id }}"` to pass the actual integer.

3. **Initial value mismatch**: If pre-selecting values, ensure the type matches (string vs integer).

4. **Missing Alpine plugins**: Both `@alpinejs/anchor` and `@alpinejs/focus` are required for proper functionality.
