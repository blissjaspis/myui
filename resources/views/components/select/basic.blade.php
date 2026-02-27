{{--
    Select Basic Component
    Documentation: docs/components/select-basic.md
--}}
@php
$checkIcon = '<svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
</svg>';

$searchIcon = '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
</svg>';

$chevronIcon = '<svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
</svg>';

$clearIcon = '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
</svg>';
@endphp

@php
$noResults = '
<div class="px-3 py-6 text-center text-sm text-gray-500">
    <div class="flex justify-center mb-2">
        <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
    </div>
    No results found
</div>';
@endphp

@props([
    'name',
    'label' => '',
    'options' => [],
    'placeholder' => 'Select an option...',
    'wire' => null,
    'showClearIcon' => false,
    'showSearch' => false
])

<div x-data="{ 
        open: false,
        search: '',
        selected: $wire.entangle('{{ $wire }}'),
        options: @js($options),
        filteredOptions() {
            return this.options.filter(option => 
                option.label.toLowerCase().includes(this.search.toLowerCase())
            )
        }
    }" 
    x-init="
        $wire.on('updateOptions', (newOptions) => {
            newOptions[0].reset.forEach(field => {
                if (field === '{{ $wire }}') {
                    options = [];
                    selected = null;
                }
            });
        
            if (newOptions[0].target === '{{ $wire }}') {
                options = newOptions[0].options;
                selected = null;
            }
        });
    "
    class="relative w-full">
    
    @if ($label)
        <label class="block text-sm font-medium mb-2 text-gray-900 dark:text-gray-300">{{ $label }}</label>
    @endif

    <button type="button" 
        @click="open = !open"
        class="min-w-[180px] relative w-full flex items-center justify-between rounded-md border border-input dark:border-gray-700 bg-transparent px-3 py-2 text-sm shadow-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-1 focus:ring-ring disabled:cursor-not-allowed disabled:opacity-50 text-gray-900 dark:text-gray-100">
        <span x-text="selected ? options.find(opt => opt.value == selected)?.label : '{{$placeholder}}'" 
            class="block truncate text-gray-900 dark:text-gray-100"></span>
        <div class="flex items-center gap-2 text-gray-500 dark:text-gray-400">
            @if ($showClearIcon)
                <div 
                    x-show="selected"
                    @click.stop="selected = null; if ('{{ $wire }}') $wire.set('{{ $wire }}', null)"
                    class="opacity-60 hover:opacity-100">
                    {!! $clearIcon !!}
                </div>
            @endif
            {!! $chevronIcon !!}
        </div>
    </button>
    
 
    <div x-show="open" 
        @click.away="open = false"
        class="absolute z-50 mt-1 w-full rounded-md border dark:border-gray-700 bg-white dark:bg-gray-800 shadow-md"
        x-cloak>
        <div class="relative">
            @if ($showSearch)
                <div class="flex items-center border-b dark:border-gray-700 px-3 text-gray-500 dark:text-gray-400">
                    {!! $searchIcon !!}
                    <input type="text" 
                    x-model="search"
                    @click.stop
                    class="w-full py-2 pl-2 pr-8 text-sm bg-transparent dark:text-gray-200 focus:outline-none placeholder-gray-400 dark:placeholder-gray-500"
                    placeholder="Search...">
                <button 
                    x-show="search"
                    @click.stop="search = ''"
                    class="absolute right-3 opacity-60 hover:opacity-100">
                        {!! $clearIcon !!}
                    </button>
                </div>
            @endif
        </div>
            
        <div class="max-h-[300px] overflow-auto p-1">
            <template x-if="filteredOptions().length > 0">
                <template x-for="option in filteredOptions()" :key="option.value">
                    <div @click="selected = option.value; if ('{{ $wire }}') $wire.set('{{ $wire }}', option.value); open = false"
                        class="relative flex items-center justify-between rounded-sm px-2 py-1.5 text-sm outline-none hover:bg-accent hover:text-accent-foreground dark:hover:bg-gray-700 dark:text-gray-200 data-disabled:pointer-events-none data-disabled:opacity-50 cursor-pointer"
                        :class="{'bg-accent dark:bg-gray-700': selected === option.value}">
                        <span x-text="option.label"></span>
                        <span x-show="selected == option.value" class="text-indigo-600 dark:text-indigo-400">
                            {!! $checkIcon !!}
                        </span>
                    </div>
                </template>
            </template>
            
            <template x-if="filteredOptions().length === 0">
                <div class="text-sm text-center py-6 text-gray-500 dark:text-gray-400">
                    No results found.
                </div>
            </template>
        </div>
    </div>

    @if(!$wire)
        <input type="hidden" :name="name" :value="selected">
    @endif
</div>