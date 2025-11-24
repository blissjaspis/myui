{{--
    Select Multiple Component
    Documentation: docs/components/select-multiple.md
--}}
@php
$checkIcon = '<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
</svg>';

$searchIcon = '<svg class="h-5 w-5 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
</svg>';

$chevronIcon = '<svg class="h-5 w-5 text-muted-foreground" viewBox="0 0 20 20" fill="none" stroke="currentColor">
    <path d="M7 7l3-3 3 3m0 6l-3 3-3-3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>';

$clearIcon = '<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
</svg>';
@endphp

@php
$noResults = '
<div class="px-3 py-6 text-center text-sm text-muted-foreground">
    <div class="flex justify-center mb-2">
        <svg class="h-6 w-6 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
    'placeholder' => 'Select options...',
    'selected' => [],
    'wire' => null
])

<div x-data="{
    open: false,
    search: '',
    selected: @js($selected),
    options: @js($options),
    filteredOptions() {
        return this.options.filter(option => 
            option.label.toLowerCase().includes(this.search.toLowerCase())
        )
    },
    getSelectedText() {
        if (this.selected.length === 0) return '{{$placeholder}}';
        if (this.selected.length === 1) {
            return this.options.find(opt => opt.value === this.selected[0])?.label;
        }
        return `${this.selected.length} selected`;
    }
}" class="relative w-full">
    <label class="block text-sm font-medium mb-2 text-foreground">{{ $label }}</label>
    
    <button type="button"
        @click="open = !open"
        class="min-w-[180px] relative w-full flex items-center justify-between rounded-md border border-input bg-background dark:bg-gray-900 px-3 py-2 text-sm shadow-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-1 focus:ring-ring disabled:cursor-not-allowed disabled:opacity-50">
        <span x-text="getSelectedText()"
            class="block truncate text-foreground dark:text-gray-100"></span>
        <div class="flex items-center gap-2">
            <div 
                x-show="selected.length"
                @click.stop="selected = []; if ('{{ $wire }}') $wire.set('{{ $wire }}', [])"
                class="opacity-60 hover:opacity-100 text-muted-foreground">
                {!! $clearIcon !!}
            </div>
            {!! $chevronIcon !!}
        </div>
    </button>

    <div x-show="open"
        @click.away="open = false"
        class="absolute z-50 mt-1 w-full rounded-md border border-input bg-background dark:bg-gray-900 shadow-md">
        <div class="relative">
            <div class="flex items-center border-b border-input px-3">
                {!! $searchIcon !!}
                <input type="text"
                    x-model="search"
                    @click.stop
                    class="w-full py-2 pl-2 pr-8 text-sm bg-transparent text-foreground dark:text-gray-100 focus:outline-none placeholder:text-muted-foreground"
                    placeholder="Search...">
                <button 
                    x-show="search"
                    @click.stop="search = ''"
                    class="absolute right-3 opacity-60 hover:opacity-100 text-muted-foreground">
                    {!! $clearIcon !!}
                </button>
            </div>
        </div>
            
        <div class="max-h-[300px] overflow-auto p-1">
            <template x-if="filteredOptions().length > 0">
                <template x-for="option in filteredOptions()" :key="option.value">
                    <div @click="
                        if (selected.includes(option.value)) {
                            selected = selected.filter(v => v !== option.value);
                        } else {
                            selected.push(option.value);
                        }
                        if ('{{ $wire }}') $wire.set('{{ $wire }}', selected)"
                        class="relative flex items-center justify-between rounded-sm px-2 py-1.5 text-sm outline-none hover:bg-accent hover:text-accent-foreground dark:hover:bg-gray-800 data-[disabled]:pointer-events-none data-[disabled]:opacity-50 cursor-pointer text-foreground dark:text-gray-100"
                        :class="{'bg-accent dark:bg-gray-800': selected.includes(option.value)}">
                        <span x-text="option.label"></span>
                        <span x-show="selected.includes(option.value)" class="text-primary">
                            {!! $checkIcon !!}
                        </span>
                    </div>
                </template>
            </template>
            
            <template x-if="filteredOptions().length === 0">
                <div class="text-sm text-center py-6 text-muted-foreground">
                    No results found.
                </div>
            </template>
        </div>
    </div>
    
    @if(!$wire)
        <template x-for="value in selected" :key="value">
            <input type="hidden" :name="name + '[]'" :value="value">
        </template>
    @endif
</div>