{{--
    Radio Group Item Component
    Documentation: docs/components/radio-group.md
--}}
<input
    type="radio"
    :name="name"
    x-model="__selected"
    {{ $attributes->merge(['class' => 'aspect-square h-4 w-4 rounded-full border border-primary dark:border-primary text-primary shadow focus:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 dark:bg-gray-900 dark:text-primary']) }}
/>