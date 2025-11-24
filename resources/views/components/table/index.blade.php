{{--
    Table Component
    Documentation: docs/components/table.md
--}}
@props(['caption' => ''])

<div class="relative w-full overflow-auto">
    <table class="w-full text-sm {{ $caption != '' ? 'caption-bottom' : ''}}">
        @if ($caption != '')
            <caption class="mt-4 text-sm text-muted-foreground">{{ $caption }}</caption>
        @endif

        {{ $slot }}
    </table>
</div>