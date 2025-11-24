<x-myui::button {{ $attributes->merge() }} x-ref="trigger" type="button" x-on:click="show = ! show">
    {{ $slot }}
</x-myui::button>