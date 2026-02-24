# Myui

> Myui is a Laravel Blade component library that provides a set of pre-built, accessible UI components to help you build modern and responsive web applications. Built for Laravel with PHP 8.2+, it offers a comprehensive collection of form inputs, layouts, overlays, and display components following best practices for accessibility and design.

## Overview

- [Introduction](./button.md): Getting started with Myui components and installation.

## Installation

Install via Composer:

```bash
composer require blissjaspis/myui
```

The package will automatically register its service provider and components will be available in your Blade templates using the `myui::` namespace.

## Components

### Form & Input

- [Button](./button.md): Button component with variants for primary, secondary, outline, and destructive styles.
- [Input](./input.md): Text input component with focus states and styling.
- [Textarea](./textarea.md): Multi-line text input component.
- [Checkbox](./checkbox.md): Checkbox input component with label support.
- [Radio Group](./radio-group.md): Radio button group component for single selection.
- [Select](./select.md): Dropdown select component with options and groups.
- [Select (Basic)](./select-basic.md): Simplified select component for basic use cases.
- [Select (Multiple)](./select-multiple.md): Multi-select dropdown component.
- [Select (Search DB)](./select-search-db.md): Select component with database search capabilities.
- [Switch](./switch.md): Toggle switch component for boolean values.
- [Label](./label.md): Form label component for accessibility.

### Layout & Navigation

- [Tabs](./tabs.md): Tabbed interface component with content panels.
- [Tab Links](./tab-links.md): Navigation tabs using links for page navigation.
- [Accordion](./accordion.md): Collapsible accordion component for content organization.
- [Breadcrumb](./breadcrumb.md): Breadcrumb navigation component.
- [Navbar](./navbar.md): Navigation bar component with title and content slots.
- [Separator](./separator.md): Visual divider between content sections.

### Overlays & Dialogs

- [Dialog](./dialog.md): Modal dialog component with header, content, and footer.
- [Sheet](./sheet.md): Slide-out panel component (side drawer).
- [Popover](./popover.md): Floating popover component for contextual content.
- [Tooltip](./tooltip.md): Tooltip component for additional information on hover.
- [Dropdown](./dropdown.md): Dropdown menu component with items and separators.

### Feedback & Status

- [Alert](./alert.md): Alert component for messages with title and description.
- [Badge](./badge.md): Badge component for labels and status indicators.
- [Sonner](./sonner.md): Toast notification component using Sonner.

### Display & Media

- [Card](./card.md): Card container component with header, title, and footer.
- [Table](./table.md): Table component for displaying tabular data.
- [Typography](./typography.md): Typography styles and text components.
- [Link](./link.md): Styled link component with external link support.

### Form Helpers

- [Form](./form.md): Form wrapper component with field, label, and message support.
- [Form Field](./form.md): Form field component for grouping inputs with labels.
- [Form Label](./form.md): Form label component with required indicator.
- [Form Message](./form.md): Form error/success message component.
- [Input Group](./input.md): Input component with prefix and suffix addons.

## Component Usage

Components are used via Blade syntax with the `myui::` namespace:

```blade
<x-myui::button variant="primary">Click me</x-myui::button>

<x-myui::input name="email" type="email" placeholder="Enter your email" />

<x-myui::card>
    <x-slot:title>Card Title</x-slot:title>
    Card content goes here
</x-myui::card>
```

## Requirements

- PHP ^8.2|^8.3|^8.4
- Laravel ^10.0|^11.0|^12.0

## Links

- [GitHub Repository](https://github.com/blissjaspis/myui)
- [License: MIT](./LICENSE)
