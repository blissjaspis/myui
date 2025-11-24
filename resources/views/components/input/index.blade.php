{{--
    Input Component
    Documentation: docs/components/input.md
--}}
<input {{ $attributes->merge(['class' => 'flex h-10 w-full rounded-md border border-input dark:border-gray-700 bg-background dark:bg-gray-900 px-3 group-[&:has([data-slot=icon].left-2)]:pl-10 group-[&:has([data-slot=icon].right-2)]:pr-10 py-2 text-sm ring-offset-background dark:text-gray-100 file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground dark:placeholder:text-gray-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50']) }}>