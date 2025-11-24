{{--
    Search DB Component
    Documentation: docs/components/select-search-db.md
--}}
@php
$checkIcon = '<svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
</svg>';

$clearIcon = '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
</svg>';
@endphp

@props([
    'name',
    'label' => '',
    'options' => [],
    'placeholder' => 'Search...',
    'wire' => null,
    'showClearIcon' => true,
    'method' => 'searchLocation', // Default method name
    'notFoundText' => 'No results found',
    'searchingText' => 'Searching...',
    'typeText' => 'Type at least 3 characters to search...',
    'property' => 'locations' // Default property to bind init results
])

<div x-data="{ 
        open: false,
        search: '',
        searching: false,
        selected: $wire.entangle('{{ $wire }}'),
        selectedOption: null,
        options: [],
        
        init() {
            this.$watch('search', (value) => {
                if (value.length > 2) {
                    this.searchOptions(value);
                } else {
                    this.options = [];
                }
            });

            // Initialize with existing data if available
            let initialData = $wire.{{ $property }};
            if (initialData && initialData.length > 0) {
                 // Find the currently selected item from initial data if it exists
                 let current = initialData.find(item => item.id == this.selected);
                 if (current) {
                     this.selectedOption = current;
                 }
            }
        },
        
        async searchOptions(query) {
            this.searching = true;
            try {
                // Call dynamic method name
                let result = await $wire.{{ $method }}(query);
                this.options = result || [];
            } catch (error) {
                console.error('Search error:', error);
                this.options = [];
            } finally {
                this.searching = false;
            }
        },
        
        selectOption(option) {
            this.selectedOption = option;
            this.selected = option.id;
            this.search = '';
            this.open = false;
            
            // Update Livewire model
            if ('{{ $wire }}') {
                $wire.{{ $wire }} = option.id;
            }
        },
        
        clearSelection() {
            this.selectedOption = null;
            this.selected = null;
            this.search = '';
            $wire.{{ $wire }} = null;
        }
    }"
    class="relative w-full">
    
    @if ($label)
        <label class="block text-sm font-medium mb-2 text-foreground">{{ $label }}</label>
    @endif

    <div class="relative">
        <input type="text" 
            x-model.debounce.500ms="search"
            @focus="open = true"
            @click="open = true"
            class="w-full flex items-center justify-between rounded-md border border-input bg-background dark:bg-gray-900 px-3 py-2 text-sm shadow-sm ring-offset-background text-foreground dark:text-gray-100 placeholder:text-muted-foreground focus:outline-none focus:ring-1 focus:ring-ring disabled:cursor-not-allowed disabled:opacity-50 pr-10"
            :placeholder="selectedOption ? selectedOption.label : '{{$placeholder}}'">
        
        <!-- Display selected option when not searching -->
        <div x-show="selectedOption && !search && !open" 
             class="absolute inset-0 px-3 py-2 text-sm text-foreground dark:text-gray-100 pointer-events-none flex items-center"
             x-text="selectedOption && selectedOption.label"></div>
        
        <div class="absolute right-3 top-1/2 transform -translate-y-1/2 flex items-center gap-2 text-muted-foreground">
            <div x-show="searching" class="animate-spin">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4a2 2 0 104 0m-4 0a2 2 0 100-4m0 4a2 2 0 104 0m-4 0a2 2 0 100-4"/>
                </svg>
            </div>
            @if ($showClearIcon)
                <button type="button"
                    x-show="selectedOption && !searching"
                    @click.stop="clearSelection()"
                    class="opacity-60 hover:opacity-100">
                    {!! $clearIcon !!}
                </button>
            @endif
        </div>
    </div>
    
    <div x-show="open && (search.length > 2 || options.length > 0)" 
        @click.away="open = false"
        class="absolute z-50 mt-1 w-full rounded-md border border-input bg-background dark:bg-gray-900 shadow-lg max-h-[300px] overflow-auto"
        x-cloak>
        
        <div x-show="searching" class="px-3 py-4 text-center text-sm text-muted-foreground">
            <div class="flex justify-center items-center gap-2">
                <div class="animate-spin">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4a2 2 0 104 0m-4 0a2 2 0 100-4m0 4a2 2 0 104 0m-4 0a2 2 0 100-4"/>
                    </svg>
                </div>
                {{ $searchingText }}
            </div>
        </div>
        
        <div x-show="!searching">
            <template x-if="options.length > 0">
                <div class="p-1">
                    <template x-for="option in options" :key="option.id">
                        <div @click="selectOption(option)"
                            class="relative flex flex-col rounded-sm px-3 py-2 text-sm outline-none hover:bg-accent hover:text-accent-foreground dark:hover:bg-gray-800 cursor-pointer transition-colors"
                            :class="{'bg-accent dark:bg-gray-800': selected === option.id}">
                            <div class="font-medium text-foreground dark:text-gray-100" x-text="option.label"></div>
                            
                            <!-- Dynamic subtitle rendering -->
                            <div class="text-xs text-muted-foreground mt-1" x-show="option.subtitle">
                                <span x-text="option.subtitle"></span>
                            </div>

                            <!-- Fallback for legacy location data structure -->
                            <div class="text-xs text-muted-foreground mt-1" x-show="!option.subtitle && (option.subdistrict_name || option.city_name)">
                                <span x-text="option.subdistrict_name"></span><span x-show="option.subdistrict_name && option.district_name">, </span>
                                <span x-text="option.district_name"></span><span x-show="option.district_name && option.city_name">, </span> 
                                <span x-text="option.city_name"></span><span x-show="option.city_name && option.province_name">, </span> 
                                <span x-text="option.province_name"></span>
                                <span x-text="option.zip_code" class="ml-2 font-mono"></span>
                            </div>

                            <span x-show="selected === option.id" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-primary">
                                {!! $checkIcon !!}
                            </span>
                        </div>
                    </template>
                </div>
            </template>
            
            <template x-if="!searching && search.length > 2 && options.length === 0">
                <div class="px-3 py-6 text-center text-sm text-muted-foreground">
                    <div class="flex justify-center mb-2">
                        <svg class="h-6 w-6 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    {{ $notFoundText }} "<span x-text="search"></span>"
                </div>
            </template>
            
            <template x-if="!searching && search.length <= 2 && search.length > 0">
                <div class="px-3 py-4 text-center text-sm text-muted-foreground">
                    {{ $typeText }}
                </div>
            </template>
        </div>
    </div>

    @if(!$wire)
        <input type="hidden" :name="name" :value="selected">
    @endif
</div>