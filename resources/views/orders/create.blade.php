<x-layouts.app title="Create Order">
    <div id="order-create-app" class="relative mx-auto max-w-[1168px]" data-next-order-url="{{ url('/orders/__ORDER__') }}" data-orders-url="{{ route('orders.index') }}">
        <div id="toast" hidden class="absolute left-1/2 top-[-24px] z-20 flex h-16 w-[314px] -translate-x-1/2 items-center gap-3 rounded-[3px] bg-[#091E42] px-4 text-white shadow">
            <span class="grid size-5 place-items-center rounded-full bg-white text-[#091E42]"><x-icons.check-circle class="size-4" /></span>
            <span id="toast-text" class="font-extrabold">Payment Added</span>
            <button class="ml-auto text-[#BFF3C6]" type="button" data-toast-close><x-icons.x class="size-4" /></button>
        </div>

        <div class="mb-5 flex items-center justify-between">
            <a href="{{ route('orders.index') }}" class="inline-flex items-center gap-2 text-[26px] font-extrabold">
                <x-icons.arrow-left class="size-7" />
                Create Order
            </a>
            <div class="flex gap-2">
                <button class="btn-secondary" type="button" data-save-draft>Save as draft</button>
                <button class="btn-primary" type="button" data-submit-order>Submit</button>
            </div>
        </div>

        <div class="grid grid-cols-[1fr_328px] gap-5">
            <div class="ui-card self-start overflow-hidden">
                <div class="flex h-[60px] items-center justify-between border-b border-[#DDE5F0] px-3.5">
                    <h2 class="font-extrabold">Add Products</h2>
                    <button class="btn-secondary w-[98px]" type="button" data-open-modal="products">Browse</button>
                </div>
                <div id="products-empty" class="h-[46px] px-3.5 pt-4 font-semibold">Products</div>
                <div id="products-table" hidden>
                    <div class="grid h-[46px] grid-cols-[1fr_160px_120px_34px] items-center border-b border-[#DDE5F0] bg-[#F8FAFC] px-3.5 font-semibold">
                        <span>Products</span><span>Quantity</span><span>Total</span><span></span>
                    </div>
                    <div id="product-rows"></div>
                </div>
            </div>

            <aside class="space-y-5">
                <div class="ui-card p-5">
                    <h2 class="mb-4 font-extrabold">Payment</h2>
                    <div id="payment-summary" class="space-y-2 text-[14px]"></div>
                </div>

                <div class="ui-card relative p-4">
                    <div class="mb-3 flex items-center justify-between">
                        <h2 class="font-extrabold">Customer Information</h2>
                        <button id="change-customer" hidden class="link-blue text-[12px]" type="button">Change</button>
                    </div>
                    <div id="customer-empty">
                        <label class="mb-2 block text-[14px] font-semibold">Customer</label>
                        <button class="ui-input flex items-center justify-between text-left text-[#8B8B8B]" type="button" data-customer-toggle>
                            Search or customer a client
                            <x-icons.chevron-down class="size-4 text-[#6B7A90]" />
                        </button>
                        <div id="customer-menu" hidden class="absolute left-3 right-3 top-[136px] z-10 rounded-md border border-[#CAD4E2] bg-white p-2 shadow">
                            <button class="mb-2 link-blue text-[12px]" type="button" data-open-modal="customer">Create New Customer</button>
                            <input class="ui-input mb-2 italic" placeholder="Search">
                            <div id="customer-options"></div>
                        </div>
                    </div>
                    <div id="customer-selected" hidden class="space-y-4 text-[14px]"></div>
                </div>

                <div class="ui-card p-4">
                    <h2 class="mb-4 font-extrabold">Order Information</h2>
                    <div class="space-y-4 text-[14px]">
                        <label class="block">Order Date<input class="ui-input mt-2" data-order-field="date" value="03/11/2026"></label>
                        <label class="block">Order Number<input class="ui-input mt-2" data-order-field="number" value="0000011"></label>
                        <label class="block">Terms (Days)<input class="ui-input mt-2" data-order-field="terms" value="0"></label>
                        <label class="block">Due Date<input class="ui-input mt-2 bg-[#E6EAF0]" data-order-field="dueDate" placeholder="MM/DD/YYYY"></label>
                        <label class="block">Note<textarea class="ui-input mt-2 h-[66px] py-2" data-order-field="note" placeholder="Note"></textarea></label>
                    </div>
                </div>
            </aside>
        </div>

        @include('orders.partials.create-modals')
    </div>
</x-layouts.app>
