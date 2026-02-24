{{--
    Accordion Trigger Component
    Based on shadcn/ui Accordion design
    Documentation: docs/components/accordion.md
--}}
<h3 class="flex">
    <button
        type="button"
        @click="if (!disabled) toggle(value)"
        :disabled="disabled"
        :aria-expanded="isOpen(value)"
        :data-state="isOpen(value) ? 'open' : 'closed'"
        {{ $attributes->merge([
            'class' => 'flex flex-1 items-center justify-between py-4 font-medium transition-all hover:underline disabled:pointer-events-none disabled:opacity-50 [&[data-state=open]>svg]:rotate-180',
        ]) }}
    >
        {{ $slot }}

        {{-- Chevron Icon --}}
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="h-4 w-4 shrink-0 transition-transform duration-200"
        >
            <path d="m6 9 6 6 6-6" />
        </svg>
    </button>
</h3>
