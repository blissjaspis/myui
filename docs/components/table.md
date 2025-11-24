# Table Component

A responsive table component.

## Components

- `x-myui::table`: The root container.
- `x-myui::table.header`: The table header (thead).
- `x-myui::table.head`: The table head cell (th).
- `x-myui::table.body`: The table body (tbody).
- `x-myui::table.row`: The table row (tr).
- `x-myui::table.cell`: The table cell (td).
- `x-myui::table.footer`: The table footer (tfoot).

## Usage

```blade
<x-myui::table caption="A list of your recent invoices.">
    <x-myui::table.header>
        <x-myui::table.row>
            <x-myui::table.head class="w-[100px]">Invoice</x-myui::table.head>
            <x-myui::table.head>Status</x-myui::table.head>
            <x-myui::table.head>Method</x-myui::table.head>
            <x-myui::table.head class="text-right">Amount</x-myui::table.head>
        </x-myui::table.row>
    </x-myui::table.header>
    <x-myui::table.body>
        <x-myui::table.row>
            <x-myui::table.cell class="font-medium">INV001</x-myui::table.cell>
            <x-myui::table.cell>Paid</x-myui::table.cell>
            <x-myui::table.cell>Credit Card</x-myui::table.cell>
            <x-myui::table.cell class="text-right">$250.00</x-myui::table.cell>
        </x-myui::table.row>
    </x-myui::table.body>
</x-myui::table>
```

