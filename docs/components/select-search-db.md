# Search DB Component

A database-driven search component with autocomplete functionality, designed to be generic and adaptable for any database query.

## Components

- `x-myui::select.search-db`: The component for database-backed searching.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `name` | string | required | The name attribute for the input field. |
| `label` | string | `''` | The label for the search field. |
| `placeholder` | string | `'Search...'` | The placeholder text. |
| `wire` | string | `null` | The Livewire model property to bind to. Requires `entangle`. |
| `showClearIcon` | boolean | `true` | Whether to show a clear button when a selection is made. |
| `method` | string | `'searchLocation'` | The Livewire method to call for searching. |
| `property` | string | `'locations'` | The Livewire property to check for initial data. |
| `notFoundText` | string | `'No results found'` | Text to display when no results match. |
| `searchingText` | string | `'Searching...'` | Text to display while searching. |
| `typeText` | string | `'Type at least 3 characters to search...'` | Text to display for short queries. |

## Requirements

This component relies on a Livewire component method (defined by the `method` prop) being available on the parent Livewire component. This method should return a promise that resolves to an array of results.

### Result Data Structure

Each result object must have:
- `id`: Unique identifier
- `label`: Main display text

Optional fields:
- `subtitle`: Secondary text to display below the label.
- Legacy location fields (`subdistrict_name`, `city_name`, etc.) are supported for backward compatibility.

## Usage

### Livewire Integration

In your Livewire component:

```php
public $selectedUser;
public $users = [];

public function searchUsers($query)
{
    return User::where('name', 'like', "%{$query}%")
        ->limit(10)
        ->get()
        ->map(function($user) {
            return [
                'id' => $user->id,
                'label' => $user->name,
                'subtitle' => $user->email // Optional subtitle
            ];
        });
}
```

In your Blade view:

```blade
<x-myui::select.search-db
    name="user_id"
    label="Assign User"
    wire="selectedUser"
    method="searchUsers"
    property="users"
    placeholder="Search for a user..."
/>
```
