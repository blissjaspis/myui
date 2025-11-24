{{--
    Separator Component
    Documentation: docs/components/separator.md
--}}
@props(['orientation' => 'horizontal', 'variant' => 'single', 'text' => ''])

@if ($variant == 'single')
    @php
        $class = match ($orientation) {
            'vertical' => 'border-0 bg-border dark:bg-gray-700 self-stretch self-center w-px',
            default => 'shrink-0 bg-border dark:bg-gray-700 h-[1px] w-full my-4',
        };
    @endphp

    <div data-orientation="{{ $orientation }}" {{ $attributes->merge(['class' => $class]) }} role="none"></div>
@endif

@if ($variant == 'text')
    @if ($orientation == 'vertical')
        <div data-orientation="vertical" {{ $attributes->merge(['class' => 'flex flex-col items-center h-full']) }} role="none">
            <div class="bg-border dark:bg-gray-700 w-[1px] grow min-h-[10px]"></div>
            <span class="shrink py-2 font-medium text-sm text-muted-foreground dark:text-gray-400 whitespace-nowrap text-vertical" style="writing-mode: vertical-rl; text-orientation: mixed;">{{ $text }}</span>
            <div class="bg-border dark:bg-gray-700 w-[1px] grow min-h-[10px]"></div>
        </div>
    @else
        <div data-orientation="horizontal" {{ $attributes->merge(['class' => 'flex items-center w-full']) }} role="none">
            <div class="bg-border dark:bg-gray-700 h-[1px] w-full my-4"></div>
            <span class="shrink mx-6 font-medium text-sm text-muted-foreground dark:text-gray-400 whitespace-nowrap">{{ $text }}</span>
            <div class="bg-border dark:bg-gray-700 h-[1px] w-full my-4"></div>
        </div>
    @endif
@endif