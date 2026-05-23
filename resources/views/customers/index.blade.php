<x-layouts.app title="Customer List">
    <div id="customer-list-app" class="mx-auto max-w-[1262px]" data-show-url="{{ url('/customers/__CUSTOMER__') }}">
        <h1 class="mb-4 text-[26px] font-extrabold">Customer List</h1>

        <div class="ui-card overflow-hidden">
            <div class="flex h-[74px] items-center gap-2 border-b border-[#DDE5F0] px-3">
                <label class="relative w-[244px]">
                    <input id="customer-search" class="ui-input h-10 pr-10 italic" placeholder="Search Customer">
                    <x-icons.search class="absolute right-3 top-1/2 size-5 -translate-y-1/2 text-[#091E42]" />
                </label>
                <button class="btn-primary h-10" type="button" data-open-modal="customer-form">
                    <x-icons.plus />
                    Add Customer
                </button>
            </div>

            <div class="flex h-12 items-center gap-3 border-b border-[#DDE5F0] px-1 text-[14px] font-semibold">
                @foreach (['All','Active','Inactive'] as $filter)
                    <button class="{{ $loop->first ? 'rounded-md bg-[#E5E7EB] px-4 py-1' : '' }}" type="button" data-customer-filter="{{ $filter }}">{{ $filter }}</button>
                @endforeach
            </div>

            <div class="overflow-x-auto">
                <table class="w-full min-w-[1120px] table-auto text-left text-[14px]">
                    <thead class="h-[44px] bg-[#F8FAFC]">
                        <tr class="border-b border-[#DDE5F0]">
                            <th class="w-[210px] px-4 font-semibold">
                                <span class="inline-flex items-center gap-1">Name <x-icons.chevrons-up-down class="text-[#091E42]" /></span>
                            </th>
                            <th class="w-[275px] font-semibold">Address</th>
                            <th class="w-[190px] font-semibold">Phone Number</th>
                            <th class="w-[240px] font-semibold">Email Address</th>
                            <th class="w-[205px] font-semibold">Total Transaction</th>
                            <th class="w-[130px] font-semibold">Status</th>
                        </tr>
                    </thead>
                    <tbody id="customers-table-body"></tbody>
                </table>
            </div>

            <div class="flex h-[76px] items-center justify-between px-4">
                <div class="flex items-center gap-2 text-[14px]">
                    <select class="ui-input w-12 px-1"><option>10</option></select>
                    <span id="customers-count-label">1 - 10 of 100</span>
                </div>
                <div class="flex overflow-hidden rounded border border-[#DDE5F0] text-[14px]">
                    @foreach (['‹','1','2','3','...','10','›'] as $page)
                        <button class="h-9 min-w-10 border-r border-[#DDE5F0] px-3 last:border-r-0 {{ $page === '1' ? 'bg-[#091E42] text-white' : ($page === '‹' || $page === '›' ? 'text-[#DDE5F0]' : '') }}" type="button">{{ $page }}</button>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="modal-backdrop" data-modal="customer-form" hidden>
            <div class="modal-panel w-[486px] p-6">
                <div class="mb-4 flex items-center justify-between">
                    <h3 id="customer-form-title" class="text-[16px] font-extrabold">Edit Customer Information</h3>
                    <button class="text-[#334155]" data-close-modal><x-icons.x /></button>
                </div>
                <div class="space-y-4 text-[14px]">
                    <label class="block">Name<input class="ui-input mt-2" data-customer-input="name" placeholder="Name"></label>
                    <label class="block">Address<input class="ui-input mt-2" data-customer-input="address" placeholder="Address"></label>
                    <label class="block">Phone Number<input class="ui-input mt-2" data-customer-input="phone" placeholder="09XXXXXXXXX"></label>
                    <label class="block">E-mail Address<input class="ui-input mt-2" data-customer-input="email" placeholder="Email"></label>
                </div>
                <div class="mt-5 flex justify-end gap-2">
                    <button class="btn-secondary" data-close-modal>Cancel</button>
                    <button class="btn-primary" data-save-customer-list>Submit</button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
