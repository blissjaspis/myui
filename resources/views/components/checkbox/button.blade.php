{{--
    Checkbox Button Component
    Documentation: docs/components/checkbox.md
--}}
<button type="button" role="checkbox" x-bind:aria-checked="check" x-bind:data-state="check ? 'checked' : 'unchecked'" value="on"
    {{ $attributes->merge(['class' => 'peer h-4 w-4 shrink-0 rounded-sm border border-primary dark:border-primary ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground dark:data-[state=checked]:text-primary']) }}>
    <span x-show="check" data-state="checked" class="flex items-center justify-center text-current" style="pointer-events: none;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-4 w-4">
            <path d="M20 6 9 17l-5-5"></path>
        </svg>
    </span>
</button>

{{ $slot }}