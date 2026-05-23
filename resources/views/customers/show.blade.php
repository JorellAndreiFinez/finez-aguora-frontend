<x-layouts.app title="Customer Details">
    <div id="customer-show-app" class="mx-auto max-w-[1244px]" data-customer-id="{{ request()->route('customer') }}" data-customers-url="{{ route('customers.index') }}">
        <div class="mb-4 flex items-center justify-between">
            <a href="{{ route('customers.index') }}" class="inline-flex items-center gap-2 text-[26px] font-extrabold">
                <x-icons.arrow-left class="size-7" />
                Customer Details
            </a>
            <div class="flex gap-2">
                <button class="btn-secondary" type="button" data-open-modal="delete-customer"><x-icons.trash-2 /> Delete</button>
                <button class="btn-secondary" type="button" data-toggle-customer-status><x-icons.toggle-left /> <span id="customer-status-button">Set Inactive</span></button>
                <button class="btn-secondary" type="button" data-open-modal="edit-customer"><x-icons.pencil /> Edit Information</button>
            </div>
        </div>

        <div id="customer-not-found" hidden class="ui-card p-6 text-center">
            <p class="mb-4 font-extrabold">Customer not found</p>
            <a class="btn-primary inline-flex" href="{{ route('customers.index') }}">Back to Customer List</a>
        </div>

        <div id="customer-details-content" class="grid grid-cols-[329px_1fr] gap-9">
            <div id="customer-info-card" class="ui-card h-fit space-y-4 p-4 text-[14px]"></div>

            <div class="ui-card overflow-hidden">
                <div class="flex h-[48px] items-center border-b border-[#DDE5F0] px-3.5">
                    <h2 class="font-extrabold">Order List</h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[820px] table-auto text-left text-[14px]">
                        <thead class="h-[44px] bg-[#F8FAFC]">
                            <tr class="border-b border-[#DDE5F0]">
                                <th class="w-[154px] px-4 font-semibold">
                                    <span class="inline-flex items-center gap-1">Order No. <x-icons.chevrons-up-down class="text-[#091E42]" /></span>
                                </th>
                                <th class="w-[196px] font-semibold">Order Date</th>
                                <th class="w-[238px] font-semibold">Payment Type</th>
                                <th class="w-[150px] font-semibold">Total</th>
                                <th class="w-[150px] font-semibold">Balance</th>
                            </tr>
                        </thead>
                        <tbody id="customer-orders-body"></tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal-backdrop" data-modal="edit-customer" hidden>
            <div class="modal-panel w-[486px] p-6">
                <div class="mb-4 flex items-center justify-between">
                    <h3 class="text-[16px] font-extrabold">Edit Customer Information</h3>
                    <button class="text-[#334155]" data-close-modal><x-icons.x /></button>
                </div>
                <div class="space-y-4 text-[14px]">
                    <label class="block">Name<input class="ui-input mt-2" data-detail-customer-input="name"></label>
                    <label class="block">Address<input class="ui-input mt-2" data-detail-customer-input="address"></label>
                    <label class="block">Phone Number<input class="ui-input mt-2" data-detail-customer-input="phone"></label>
                    <label class="block">E-mail Address<input class="ui-input mt-2" data-detail-customer-input="email"></label>
                </div>
                <div class="mt-5 flex justify-end gap-2">
                    <button class="btn-secondary" data-close-modal>Cancel</button>
                    <button class="btn-primary" data-save-customer-detail>Save</button>
                </div>
            </div>
        </div>

        <div class="modal-backdrop" data-modal="delete-customer" hidden>
            <div class="modal-panel w-[402px] p-4">
                <div class="mb-5 flex items-center justify-between">
                    <h3 id="delete-customer-title" class="text-[16px] font-extrabold">Delete Customer?</h3>
                    <button class="text-[#334155]" data-close-modal><x-icons.x /></button>
                </div>
                <p id="delete-customer-copy" class="mb-7 text-[14px]">If you delete this customer, this can't be undone.</p>
                <div class="flex justify-end gap-2">
                    <button class="btn-secondary" data-close-modal>Cancel</button>
                    <button class="rounded-md bg-[#C62828] px-4 py-2 text-[14px] font-extrabold text-white" type="button" data-confirm-delete-customer>Delete Customer</button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
