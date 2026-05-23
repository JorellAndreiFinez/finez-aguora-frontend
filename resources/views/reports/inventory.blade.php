<x-layouts.app title="Inventory Report">
    <div id="inventory-report-app" class="mx-auto max-w-[1600px]">
        <h1 class="mb-6 text-[26px] font-extrabold">Inventory Report</h1>

        <div class="ui-card mb-4">
            <div class="h-[49px] border-b border-[#DDE5F0] px-3 py-3 font-extrabold">
                Inventory Filter
            </div>

            <div class="flex flex-wrap gap-7 p-5 text-[14px]">
                <label class="block w-[222px]">
                    Category
                    <select class="ui-input mt-2" data-inventory-filter="category">
                        <option>ALL</option>
                    </select>
                </label>

                <label class="block w-[222px]">
                    Status
                    <select class="ui-input mt-2" data-inventory-filter="status">
                        <option>ALL</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </label>

                <div class="w-full">
                    <button class="btn-primary w-[102px]" type="button" data-apply-inventory-filter>
                        Submit
                    </button>
                </div>
            </div>
        </div>

        <div class="mb-4 grid grid-cols-5 gap-5">
            <div class="ui-card flex h-[106px] items-center justify-between p-5">
                <div>
                    <p class="font-semibold">Active Products</p><strong id="inventory-active-count"
                        class="mt-2 block text-[24px]">0</strong>
                </div><span
                    class="grid size-12 place-items-center rounded-full bg-[#091E42] text-white"><x-icons.package /></span>
            </div>
            <div class="ui-card flex h-[106px] items-center justify-between p-5">
                <div>
                    <p class="font-semibold">Out of Stock</p><strong id="inventory-out-count"
                        class="mt-2 block text-[24px]">0</strong>
                </div><span
                    class="grid size-12 place-items-center rounded-full bg-[#091E42] text-white"><x-icons.box /></span>
            </div>
            <div class="ui-card flex h-[106px] items-center justify-between p-5">
                <div>
                    <p class="font-semibold">Low Stock</p><strong id="inventory-low-count"
                        class="mt-2 block text-[24px]">0</strong>
                </div><span
                    class="grid size-12 place-items-center rounded-full bg-[#091E42] text-white"><x-icons.triangle-alert /></span>
            </div>
            <div class="ui-card flex h-[106px] items-center justify-between p-5">
                <div>
                    <p class="font-semibold">Total Inventory Cost</p><strong id="inventory-cost-total"
                        class="mt-2 block text-[24px]">0.00</strong>
                </div><span
                    class="grid size-12 place-items-center rounded-full bg-[#091E42] text-white"><x-icons.clipboard-list /></span>
            </div>
            <div class="ui-card flex h-[106px] items-center justify-between p-5">
                <div>
                    <p class="font-semibold">Forecasted Sales</p><strong id="inventory-sales-total"
                        class="mt-2 block text-[24px]">0.00</strong>
                </div><span
                    class="grid size-12 place-items-center rounded-full bg-[#091E42] text-white"><x-icons.trending-up /></span>
            </div>
        </div>

        <div class="mb-6 flex gap-2">
            <button class="btn-secondary text-[#607089]" type="button" data-report-print><x-icons.printer />
                Print</button>
            <button class="btn-secondary text-[#607089]" type="button"
                data-report-export="inventory"><x-icons.file-spreadsheet /> Export CSV</button>
        </div>

        <div class="ui-card overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full min-w-[1300px] table-auto text-left text-[14px]">
                    <thead class="h-[49px] bg-[#F8FAFC]">
                        <tr class="border-b border-[#DDE5F0]">
                            <th class="w-[720px] px-4 font-semibold"><span
                                    class="inline-flex items-center gap-1">Product Name
                                    <x-icons.chevrons-up-down /></span></th>
                            <th class="w-[180px] font-semibold">Category</th>
                            <th class="w-[160px] font-semibold">Stock On Hand</th>
                            <th class="w-[160px] font-semibold">Inventory Cost</th>
                            <th class="w-[170px] font-semibold">Forecasted Sales</th>
                            <th class="w-[130px] font-semibold">Status</th>
                        </tr>
                    </thead>
                    <tbody id="inventory-report-body"></tbody>
                </table>
            </div>
            <div class="flex h-[88px] items-center justify-between px-4">
                <div class="flex items-center gap-2 text-[14px]"><select class="ui-input w-12 px-1">
                        <option>10</option>
                    </select><span id="inventory-count-label">1 - 10 of 100</span></div>
                <div class="flex overflow-hidden rounded border border-[#DDE5F0] text-[14px]">
                    <button class="grid h-9 min-w-10 place-items-center border-r border-[#DDE5F0] px-3 text-[#DDE5F0]"
                        type="button"><x-icons.arrow-left class="size-4" /></button>
                    @foreach (['1', '2', '3', '...', '10'] as $page)
                        <button
                            class="h-9 min-w-10 border-r border-[#DDE5F0] px-3 {{ $page === '1' ? 'bg-[#091E42] text-white' : '' }}"
                            type="button">{{ $page }}</button>
                    @endforeach
                    <button class="grid h-9 min-w-10 place-items-center px-3 text-[#DDE5F0]"
                        type="button"><x-icons.arrow-right class="size-4" /></button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
