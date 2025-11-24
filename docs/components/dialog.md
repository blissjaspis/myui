# Dialog Component

A window overlaid on either the primary window or another dialog window, rendering the content underneath inert.

## Components

- `x-myui::dialog`: The root container.
- `x-myui::dialog.content`: The content container of the dialog.
- `x-myui::dialog.header`: The header of the dialog.
- `x-myui::dialog.header-title`: The title of the dialog.
- `x-myui::dialog.header-description`: The description of the dialog.
- `x-myui::dialog.footer`: The footer of the dialog.

## Usage

The dialog component uses Alpine.js for state management. You need to wrap the trigger and the dialog content in an Alpine component (e.g., `x-data="{ open: false }"`).

```blade
<div x-data="{ open: false }">
    <x-myui::button x-on:click="open = true" variant="outline">Edit Profile</x-myui::button>

    <x-myui::dialog x-show="open">
        <x-myui::dialog.content>
            <x-myui::dialog.header>
                <x-myui::dialog.header-title>Edit profile</x-myui::dialog.header-title>
                <x-myui::dialog.header-description>
                    Make changes to your profile here. Click save when you're done.
                </x-myui::dialog.header-description>
            </x-myui::dialog.header>
            <div class="grid gap-4 py-4">
                <x-myui::form>
                    <x-myui::form.label for="name" class="text-right">Name</x-myui::form.label>
                    <x-myui::form.input id="name" value="Pedro Duarte" class="col-span-3" />
                </x-myui::form>
                <x-myui::form>
                    <x-myui::form.label for="username" class="text-right">Username</x-myui::form.label>
                    <x-myui::form.input id="username" value="@peduarte" class="col-span-3" />
                </x-myui::form>
            </div>
            <x-myui::dialog.footer>
                <x-myui::button type="submit" x-on:click="open = false">Save changes</x-myui::button>
            </x-myui::dialog.footer>
        </x-myui::dialog.content>
    </x-myui::dialog>
</div>
```

