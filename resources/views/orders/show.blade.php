<x-layouts.app title="Order">
    <div id="order-show-app" class="mx-auto max-w-[1168px]" data-order-id="{{ request()->route('order') }}" data-orders-url="{{ route('orders.index') }}">
        <div class="mb-5 flex items-center justify-between">
            <a href="{{ route('orders.index') }}" class="inline-flex items-center gap-2 text-[26px] font-extrabold">
                <x-icons.arrow-left class="size-7" />
                <span id="show-order-title">Order</span>
            </a>
            <div class="relative flex gap-2">
                <button class="btn-secondary" type="button" data-action-menu>
                    More Action
                    <x-icons.chevron-down />
                </button>
                <div id="action-menu" hidden class="absolute left-0 top-11 z-10 w-[154px] rounded border border-[#DDE5F0] bg-white py-1 shadow">
                    <button class="flex w-full items-center gap-2 px-3 py-2 text-left hover:bg-[#F8FAFC]" type="button">Download</button>
                    <button class="flex w-full items-center gap-2 px-3 py-2 text-left hover:bg-[#F8FAFC]" type="button" data-cancel-order>Cancel Order</button>
                </div>
                <button class="btn-secondary" type="button">Print</button>
                <a class="btn-secondary" href="{{ route('orders.create') }}">Add Payment</a>
            </div>
        </div>

        <div id="order-not-found" hidden class="ui-card p-6 text-center">
            <p class="mb-4 font-extrabold">Order not found</p>
            <a class="btn-primary inline-flex" href="{{ route('orders.index') }}">Back to Order List</a>
        </div>

        <div id="order-show-content" class="grid grid-cols-[1fr_328px] gap-5">
            <div class="space-y-5">
                <div class="ui-card overflow-hidden">
                    <div class="flex h-[60px] items-center justify-between border-b border-[#DDE5F0] px-3.5">
                        <h2 class="font-extrabold">Ordered Products</h2>
                        <x-icons.chevron-down class="size-6 text-[#6B7A90]" />
                    </div>
                    <div class="grid h-[46px] grid-cols-[1fr_160px_120px] items-center border-b border-[#DDE5F0] bg-[#F8FAFC] px-3.5 font-semibold"><span>Products</span><span>Quantity</span><span>Total</span></div>
                    <div id="show-product-rows"></div>
                </div>

                <div class="ui-card p-5">
                    <h2 class="mb-4 font-extrabold">Payment</h2>
                    <div id="show-payment-summary"></div>
                </div>
            </div>

            <aside class="space-y-5">
                <div id="show-customer-card" class="ui-card space-y-4 p-4 text-[14px]"></div>
                <div id="show-order-card" class="ui-card space-y-4 p-4 text-[14px]"></div>
                <div class="ui-card p-5 text-[13px]">
                    <h2 class="mb-4 font-extrabold">Logs</h2>
                    <div id="show-logs" class="border-l border-[#091E42] pl-4"></div>
                </div>
            </aside>
        </div>
    </div>
</x-layouts.app>
