# Card Component

Displays a card with header, content, and footer.

## Components

- `x-myui::card`: The root container.
- `x-myui::card.header`: The header of the card.
- `x-myui::card.title`: The title of the card.
- `x-myui::card.description`: The description of the card.
- `x-myui::card.content`: The content of the card.
- `x-myui::card.footer`: The footer of the card.

## Usage

```blade
<x-myui::card class="w-[350px]">
    <x-myui::card.header>
        <x-myui::card.title>Create project</x-myui::card.title>
        <x-myui::card.description>Deploy your new project in one-click.</x-myui::card.description>
    </x-myui::card.header>
    <x-myui::card.content>
        <form>
            <div class="grid w-full items-center gap-4">
                <x-myui::form>
                    <x-myui::form.label for="name">Name</x-myui::form.label>
                    <x-myui::form.input id="name" placeholder="Name of your project" />
                </x-myui::form>
            </div>
        </form>
    </x-myui::card.content>
    <x-myui::card.footer class="flex justify-between">
        <x-myui::button variant="outline">Cancel</x-myui::button>
        <x-myui::button>Deploy</x-myui::button>
    </x-myui::card.footer>
</x-myui::card>
```

