<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icons - Myui</title>
    @vite(['workbench/resources/css/app.css'])
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-6xl mx-auto space-y-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold mb-2">Icons</h1>
            <p class="text-gray-600 mb-4">116 Heroicons-based SVG icon components</p>
            <x-myui::button variant="link" asChild>
                <a href="/">← Back to All Components</a>
            </x-myui::button>
        </div>

        <!-- Navigation & UI -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Navigation & UI</x-myui::card.title>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-12 gap-4">
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.check class="w-6 h-6" />
                        <span class="text-xs text-gray-600">check</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.check-circle class="w-6 h-6" />
                        <span class="text-xs text-gray-600">check-circle</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.check-badge class="w-6 h-6" />
                        <span class="text-xs text-gray-600">check-badge</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.x class="w-6 h-6" />
                        <span class="text-xs text-gray-600">x</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.x-circle class="w-6 h-6" />
                        <span class="text-xs text-gray-600">x-circle</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.minus class="w-6 h-6" />
                        <span class="text-xs text-gray-600">minus</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.chevron-down class="w-6 h-6" />
                        <span class="text-xs text-gray-600">chevron-down</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.chevron-left class="w-6 h-6" />
                        <span class="text-xs text-gray-600">chevron-left</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.chevron-right class="w-6 h-6" />
                        <span class="text-xs text-gray-600">chevron-right</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.arrow-left class="w-6 h-6" />
                        <span class="text-xs text-gray-600">arrow-left</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.arrow-right class="w-6 h-6" />
                        <span class="text-xs text-gray-600">arrow-right</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.arrow-trending-up class="w-6 h-6" />
                        <span class="text-xs text-gray-600">trend-up</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.arrow-trending-down class="w-6 h-6" />
                        <span class="text-xs text-gray-600">trend-down</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.arrows-right-left class="w-6 h-6" />
                        <span class="text-xs text-gray-600">arrows-rl</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.arrows-up-down class="w-6 h-6" />
                        <span class="text-xs text-gray-600">arrows-ud</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.ellipsis-horizontal class="w-6 h-6" />
                        <span class="text-xs text-gray-600">ellipsis-h</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.ellipsis-vertical class="w-6 h-6" />
                        <span class="text-xs text-gray-600">ellipsis-v</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.bars-2 class="w-6 h-6" />
                        <span class="text-xs text-gray-600">bars-2</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.bars-3 class="w-6 h-6" />
                        <span class="text-xs text-gray-600">bars-3</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.external-link class="w-6 h-6" />
                        <span class="text-xs text-gray-600">external</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.arrow-top-right-on-square class="w-6 h-6" />
                        <span class="text-xs text-gray-600">arrow-square</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.arrow-right-start-on-rectangle class="w-6 h-6" />
                        <span class="text-xs text-gray-600">logout</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.cloud-arrow-down class="w-6 h-6" />
                        <span class="text-xs text-gray-600">cloud-down</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.loading class="w-6 h-6 animate-spin" />
                        <span class="text-xs text-gray-600">loading</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.slash class="w-6 h-6" />
                        <span class="text-xs text-gray-600">slash</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.no-symbol class="w-6 h-6" />
                        <span class="text-xs text-gray-600">no-symbol</span>
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- Documents & Files -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Documents & Files</x-myui::card.title>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-10 gap-4">
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.document class="w-6 h-6" />
                        <span class="text-xs text-gray-600">document</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.document-text class="w-6 h-6" />
                        <span class="text-xs text-gray-600">document-text</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.clipboard class="w-6 h-6" />
                        <span class="text-xs text-gray-600">clipboard</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.photo class="w-6 h-6" />
                        <span class="text-xs text-gray-600">photo</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.arrow-up-tray class="w-6 h-6" />
                        <span class="text-xs text-gray-600">upload</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.arrow-up-on-square class="w-6 h-6" />
                        <span class="text-xs text-gray-600">share-square</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.qr-code class="w-6 h-6" />
                        <span class="text-xs text-gray-600">qr-code</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.queue-list class="w-6 h-6" />
                        <span class="text-xs text-gray-600">queue-list</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.square-2-stack class="w-6 h-6" />
                        <span class="text-xs text-gray-600">stack</span>
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- Archives -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Archives</x-myui::card.title>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="grid grid-cols-4 md:grid-cols-6 gap-4">
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.archive-box class="w-6 h-6" />
                        <span class="text-xs text-gray-600">archive</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.archive-box-arrow-down class="w-6 h-6" />
                        <span class="text-xs text-gray-600">archive-down</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.archive-box-x-mark class="w-6 h-6" />
                        <span class="text-xs text-gray-600">archive-x</span>
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- Communication & Social -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Communication & Social</x-myui::card.title>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-12 gap-4">
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.envelope class="w-6 h-6" />
                        <span class="text-xs text-gray-600">envelope</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.paper-airplane class="w-6 h-6" />
                        <span class="text-xs text-gray-600">paper-airplane</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.bell class="w-6 h-6" />
                        <span class="text-xs text-gray-600">bell</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.bell-alert class="w-6 h-6" />
                        <span class="text-xs text-gray-600">bell-alert</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.chat-bubble-oval-left class="w-6 h-6" />
                        <span class="text-xs text-gray-600">chat</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.chat-bubble-left class="w-6 h-6" />
                        <span class="text-xs text-gray-600">chat-left</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.chat-bubble-left-right class="w-6 h-6" />
                        <span class="text-xs text-gray-600">chat-lr</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.chat-bubble-bottom-center class="w-6 h-6" />
                        <span class="text-xs text-gray-600">chat-bottom</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.chat-bubble-bottom-center-text class="w-6 h-6" />
                        <span class="text-xs text-gray-600">chat-text</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.hashtag class="w-6 h-6" />
                        <span class="text-xs text-gray-600">hashtag</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.at-symbol class="w-6 h-6" />
                        <span class="text-xs text-gray-600">at</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.fire class="w-6 h-6" />
                        <span class="text-xs text-gray-600">fire</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.heart class="w-6 h-6" />
                        <span class="text-xs text-gray-600">heart</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.star class="w-6 h-6" />
                        <span class="text-xs text-gray-600">star</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.bookmark class="w-6 h-6" />
                        <span class="text-xs text-gray-600">bookmark</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.bookmark-slash class="w-6 h-6" />
                        <span class="text-xs text-gray-600">bookmark-slash</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.lifebuoy class="w-6 h-6" />
                        <span class="text-xs text-gray-600">lifebuoy</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.share class="w-6 h-6" />
                        <span class="text-xs text-gray-600">share</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.megaphone class="w-6 h-6" />
                        <span class="text-xs text-gray-600">megaphone</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.rss class="w-6 h-6" />
                        <span class="text-xs text-gray-600">rss</span>
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- User & Account -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>User & Account</x-myui::card.title>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-12 gap-4">
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.user class="w-6 h-6" />
                        <span class="text-xs text-gray-600">user</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.user-circle class="w-6 h-6" />
                        <span class="text-xs text-gray-600">user-circle</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.users class="w-6 h-6" />
                        <span class="text-xs text-gray-600">users</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.user-group class="w-6 h-6" />
                        <span class="text-xs text-gray-600">user-group</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.identification class="w-6 h-6" />
                        <span class="text-xs text-gray-600">id-card</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.eye class="w-6 h-6" />
                        <span class="text-xs text-gray-600">eye</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.eye-slash class="w-6 h-6" />
                        <span class="text-xs text-gray-600">eye-slash</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.lock-closed class="w-6 h-6" />
                        <span class="text-xs text-gray-600">lock</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.lock-open class="w-6 h-6" />
                        <span class="text-xs text-gray-600">lock-open</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.shield-exclamation class="w-6 h-6" />
                        <span class="text-xs text-gray-600">shield</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.percent-badge class="w-6 h-6" />
                        <span class="text-xs text-gray-600">percent</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.face-smile class="w-6 h-6" />
                        <span class="text-xs text-gray-600">face-smile</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.face-frown class="w-6 h-6" />
                        <span class="text-xs text-gray-600">face-frown</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.flag class="w-6 h-6" />
                        <span class="text-xs text-gray-600">flag</span>
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- Commerce & Shopping -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Commerce & Shopping</x-myui::card.title>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-12 gap-4">
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.shopping-cart class="w-6 h-6" />
                        <span class="text-xs text-gray-600">cart</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.shopping-bag class="w-6 h-6" />
                        <span class="text-xs text-gray-600">bag</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.building-storefront class="w-6 h-6" />
                        <span class="text-xs text-gray-600">store</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.truck class="w-6 h-6" />
                        <span class="text-xs text-gray-600">truck</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.briefcase class="w-6 h-6" />
                        <span class="text-xs text-gray-600">briefcase</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.wallet class="w-6 h-6" />
                        <span class="text-xs text-gray-600">wallet</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.credit-card class="w-6 h-6" />
                        <span class="text-xs text-gray-600">credit-card</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.gift class="w-6 h-6" />
                        <span class="text-xs text-gray-600">gift</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.tag class="w-6 h-6" />
                        <span class="text-xs text-gray-600">tag</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.ticket class="w-6 h-6" />
                        <span class="text-xs text-gray-600">ticket</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.receipt-percent class="w-6 h-6" />
                        <span class="text-xs text-gray-600">receipt-%</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.receipt-refund class="w-6 h-6" />
                        <span class="text-xs text-gray-600">refund</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.scale class="w-6 h-6" />
                        <span class="text-xs text-gray-600">scale</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.trophy class="w-6 h-6" />
                        <span class="text-xs text-gray-600">trophy</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.rocket-launch class="w-6 h-6" />
                        <span class="text-xs text-gray-600">rocket</span>
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- System & Status -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>System & Status</x-myui::card.title>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="grid grid-cols-4 md:grid-cols-6 gap-4">
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.signal class="w-6 h-6" />
                        <span class="text-xs text-gray-600">signal</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.signal-slash class="w-6 h-6" />
                        <span class="text-xs text-gray-600">signal-slash</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.server class="w-6 h-6" />
                        <span class="text-xs text-gray-600">server</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.sparkles class="w-6 h-6" />
                        <span class="text-xs text-gray-600">sparkles</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.trash class="w-6 h-6" />
                        <span class="text-xs text-gray-600">trash</span>
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- Search & Location -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Search & Location</x-myui::card.title>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="grid grid-cols-4 md:grid-cols-6 gap-4">
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.magnifying-glass class="w-6 h-6" />
                        <span class="text-xs text-gray-600">magnifying-glass</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.magnifying-glass-circle class="w-6 h-6" />
                        <span class="text-xs text-gray-600">magnify-circle</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.map-pin class="w-6 h-6" />
                        <span class="text-xs text-gray-600">map-pin</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.map class="w-6 h-6" />
                        <span class="text-xs text-gray-600">map</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.globe-alt class="w-6 h-6" />
                        <span class="text-xs text-gray-600">globe</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.funnel class="w-6 h-6" />
                        <span class="text-xs text-gray-600">funnel</span>
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- Information & Feedback -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Information & Feedback</x-myui::card.title>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="grid grid-cols-4 md:grid-cols-4 gap-4">
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.information-circle class="w-6 h-6" />
                        <span class="text-xs text-gray-600">info-circle</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.info class="w-6 h-6" />
                        <span class="text-xs text-gray-600">info</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.question-mark-circle class="w-6 h-6" />
                        <span class="text-xs text-gray-600">question</span>
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- Theme & Display -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Theme & Display</x-myui::card.title>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="grid grid-cols-4 md:grid-cols-2 gap-4 max-w-xs">
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.sun class="w-6 h-6" />
                        <span class="text-xs text-gray-600">sun</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.moon class="w-6 h-6" />
                        <span class="text-xs text-gray-600">moon</span>
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- Miscellaneous -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Miscellaneous</x-myui::card.title>
            </x-myui::card.header>
            <x-myui::card.content>
                <div class="grid grid-cols-4 md:grid-cols-4 gap-4">
                    <div class="flex flex-col items-center gap-2 p-3 rounded-lg hover:bg-gray-50">
                        <x-myui::icons.cake class="w-6 h-6" />
                        <span class="text-xs text-gray-600">cake</span>
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>

        <!-- Usage Examples -->
        <x-myui::card>
            <x-myui::card.header>
                <x-myui::card.title>Usage Examples</x-myui::card.title>
            </x-myui::card.header>
            <x-myui::card.content class="space-y-6">
                <div>
                    <h4 class="text-sm font-medium mb-2">Button with Icon</h4>
                    <div class="flex flex-wrap gap-4">
                        <x-myui::button>
                            <x-myui::icons.envelope class="w-4 h-4 mr-2" />
                            Send Message
                        </x-myui::button>
                        <x-myui::button variant="outline">
                            <x-myui::icons.heart class="w-4 h-4 mr-2" />
                            Like
                        </x-myui::button>
                        <x-myui::button variant="secondary">
                            <x-myui::icons.paper-airplane class="w-4 h-4 mr-2" />
                            Send
                        </x-myui::button>
                    </div>
                </div>

                <div>
                    <h4 class="text-sm font-medium mb-2">Input with Icon</h4>
                    <div class="relative max-w-sm">
                        <x-myui::icons.magnifying-glass class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" />
                        <x-myui::input class="pl-10" placeholder="Search..." />
                    </div>
                </div>

                <div>
                    <h4 class="text-sm font-medium mb-2">Status Indicators</h4>
                    <div class="flex flex-wrap gap-4">
                        <span class="flex items-center gap-1 text-green-600">
                            <x-myui::icons.check-circle class="w-4 h-4" />
                            Verified
                        </span>
                        <span class="flex items-center gap-1 text-red-600">
                            <x-myui::icons.shield-exclamation class="w-4 h-4" />
                            Warning
                        </span>
                        <span class="flex items-center gap-1 text-blue-600">
                            <x-myui::icons.information-circle class="w-4 h-4" />
                            Info
                        </span>
                        <span class="flex items-center gap-1 text-yellow-600">
                            <x-myui::icons.face-smile class="w-4 h-4" />
                            Happy
                        </span>
                    </div>
                </div>

                <div>
                    <h4 class="text-sm font-medium mb-2">Icon Sizes & Colors</h4>
                    <div class="flex flex-wrap items-center gap-4">
                        <x-myui::icons.star class="w-4 h-4 text-gray-400" />
                        <x-myui::icons.star class="w-5 h-5 text-gray-500" />
                        <x-myui::icons.star class="w-6 h-6 text-yellow-500" />
                        <x-myui::icons.star class="w-8 h-8 text-yellow-500" />
                        <x-myui::icons.heart class="w-6 h-6 text-red-500" />
                        <x-myui::icons.moon class="w-6 h-6 text-indigo-600" />
                        <x-myui::icons.sun class="w-6 h-6 text-orange-500" />
                        <x-myui::icons.camera class="w-6 h-6 text-purple-500" />
                        <x-myui::icons.cog class="w-6 h-6 text-gray-600 animate-spin" style="animation-duration: 3s;" />
                    </div>
                </div>
            </x-myui::card.content>
        </x-myui::card>
    </div>
</body>
</html>
