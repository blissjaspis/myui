<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accordion Component - Myui</title>
    @vite(['workbench/resources/css/app.css'])
    <!-- Alpine.js Collapse Plugin -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine.js Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto space-y-8 p-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Accordion Component</h1>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Accordion Components -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Accordion Components</x-myui::card.title>
                <x-myui::card.description>
                    shadcn/ui style accordion components built with Laravel Blade and Alpine.js.
                    Based on <a href="https://ui.shadcn.com/docs/components/radix/accordion" class="text-blue-600 hover:underline" target="_blank">shadcn/ui Accordion</a>.
                </x-myui::card.description>
            </x-myui::card.header>
            <x-myui::card.content>

                <!-- Single Accordion -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Single (Default)</h3>
                    <p class="text-sm text-muted-foreground mb-4">Only one item can be open at a time. First item is open by default.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::accordion type="single" collapsible defaultValue="item-1">
                            <x-myui::accordion.item value="item-1">
                                <x-myui::accordion.trigger>Is it accessible?</x-myui::accordion.trigger>
                                <x-myui::accordion.content>
                                    Yes. It adheres to the WAI-ARIA design pattern.
                                </x-myui::accordion.content>
                            </x-myui::accordion.item>

                            <x-myui::accordion.item value="item-2">
                                <x-myui::accordion.trigger>Is it styled?</x-myui::accordion.trigger>
                                <x-myui::accordion.content>
                                    Yes. It comes with default styles that match the other components' aesthetic.
                                </x-myui::accordion.content>
                            </x-myui::accordion.item>

                            <x-myui::accordion.item value="item-3">
                                <x-myui::accordion.trigger>Is it animated?</x-myui::accordion.trigger>
                                <x-myui::accordion.content>
                                    Yes. It's animated by default, but you can disable it if you prefer.
                                </x-myui::accordion.content>
                            </x-myui::accordion.item>
                        </x-myui::accordion>
                    </div>
                </div>

                <!-- Multiple Accordion -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Multiple</h3>
                    <p class="text-sm text-muted-foreground mb-4">Multiple items can be open at the same time.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::accordion type="multiple" defaultValue="shipping">
                            <x-myui::accordion.item value="shipping">
                                <x-myui::accordion.trigger>What are your shipping options?</x-myui::accordion.trigger>
                                <x-myui::accordion.content>
                                    We offer standard (5-7 days), express (2-3 days), and overnight shipping. Free shipping on international orders.
                                </x-myui::accordion.content>
                            </x-myui::accordion.item>

                            <x-myui::accordion.item value="returns">
                                <x-myui::accordion.trigger>What is your return policy?</x-myui::accordion.trigger>
                                <x-myui::accordion.content>
                                    You can return any item within 30 days of purchase for a full refund. Items must be in original condition.
                                </x-myui::accordion.content>
                            </x-myui::accordion.item>

                            <x-myui::accordion.item value="support">
                                <x-myui::accordion.trigger>How can I contact support?</x-myui::accordion.trigger>
                                <x-myui::accordion.content>
                                    You can reach our support team via email at support@example.com or call us at 1-800-EXAMPLE.
                                </x-myui::accordion.content>
                            </x-myui::accordion.item>
                        </x-myui::accordion>
                    </div>
                </div>

                <!-- With Card -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">With Card</h3>
                    <p class="text-sm text-muted-foreground mb-4">Accordion wrapped in a card component.</p>
                    <div class="max-w-md">
                        <x-myui::card>
                            <x-myui::card.header>
                                <x-myui::card.title>Frequently Asked Questions</x-myui::card.title>
                                <x-myui::card.description>
                                    Common questions about your account, plans, payments and cancellations.
                                </x-myui::card.description>
                            </x-myui::card.header>
                            <x-myui::card.content>
                                <x-myui::accordion type="single" collapsible>
                                    <x-myui::accordion.item value="plans">
                                        <x-myui::accordion.trigger>What subscription plans do you offer?</x-myui::accordion.trigger>
                                        <x-myui::accordion.content>
                                            We offer three subscription tiers: Starter ($9/month), Professional ($29/month), and Enterprise ($99/month). Each plan includes increasing storage limits, API access, priority support, and team collaboration features.
                                        </x-myui::accordion.content>
                                    </x-myui::accordion.item>

                                    <x-myui::accordion.item value="billing">
                                        <x-myui::accordion.trigger>How does billing work?</x-myui::accordion.trigger>
                                        <x-myui::accordion.content>
                                            We offer monthly and annual subscription plans. Billing is charged at the beginning of each cycle, and you can cancel anytime. All plans include automatic backups, 24/7 support, and unlimited team members.
                                        </x-myui::accordion.content>
                                    </x-myui::accordion.item>

                                    <x-myui::accordion.item value="cancel">
                                        <x-myui::accordion.trigger>How do I cancel my subscription?</x-myui::accordion.trigger>
                                        <x-myui::accordion.content>
                                            You can cancel your subscription from your account settings page. Once cancelled, you'll have access until the end of your billing period.
                                        </x-myui::accordion.content>
                                    </x-myui::accordion.item>
                                </x-myui::accordion>
                            </x-myui::card.content>
                        </x-myui::card>
                    </div>
                </div>

                <!-- Disabled Item -->
                <div class="mb-8">
                    <h3 class="text-lg font-medium mb-3">Disabled Item</h3>
                    <p class="text-sm text-muted-foreground mb-4">Individual accordion items can be disabled.</p>
                    <div class="bg-white dark:bg-gray-900 p-4 rounded-md border max-w-md">
                        <x-myui::accordion type="single" collapsible>
                            <x-myui::accordion.item value="active">
                                <x-myui::accordion.trigger>Active Item</x-myui::accordion.trigger>
                                <x-myui::accordion.content>
                                    This item is active and can be toggled. Try clicking on it!
                                </x-myui::accordion.content>
                            </x-myui::accordion.item>

                            <x-myui::accordion.item value="disabled" disabled>
                                <x-myui::accordion.trigger>Disabled Item</x-myui::accordion.trigger>
                                <x-myui::accordion.content>
                                    This item is disabled and cannot be toggled.
                                </x-myui::accordion.content>
                            </x-myui::accordion.item>

                            <x-myui::accordion.item value="another">
                                <x-myui::accordion.trigger>Another Active Item</x-myui::accordion.trigger>
                                <x-myui::accordion.content>
                                    This is another active item for demonstration purposes.
                                </x-myui::accordion.content>
                            </x-myui::accordion.item>
                        </x-myui::accordion>
                    </div>
                </div>

            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
