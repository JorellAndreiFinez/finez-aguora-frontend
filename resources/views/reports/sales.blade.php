<x-layouts.app title="Sales Report">
    <div id="sales-report-app" class="mx-auto max-w-[1600px]">
        <h1 class="mb-4 text-[26px] font-extrabold">Sales Report</h1>

        <div class="ui-card mb-4">
            <div class="h-[49px] border-b border-[#DDE5F0] px-3 py-3 font-extrabold">
                Sales Report
            </div>

            <div class="relative flex flex-wrap gap-5 p-5 text-[14px]">
                <label class="block w-[288px]">
                    Date
                    <button class="ui-input mt-2 flex items-center justify-between text-left" type="button"
                        data-date-toggle>
                        <span id="sales-date-label">MM/DD/YYYY - MM/DD/YYYY</span>
                        <x-icons.chevron-down class="size-4 text-[#607089]" />
                    </button>
                </label>

                <label class="block w-[222px]">
                    Customer
                    <select class="ui-input mt-2" data-sales-filter="customer">
                        <option>ALL</option>
                    </select>
                </label>

                <label class="block w-[222px]">
                    Status
                    <select class="ui-input mt-2" data-sales-filter="status">
                        <option>ALL</option>
                        <option>Paid</option>
                        <option>Partial</option>
                        <option>Unpaid</option>
                        <option>Overdue</option>
                        <option>Draft</option>
                    </select>
                </label>

                <div class="w-full">
                    <button class="btn-primary w-[102px]" type="button" data-apply-sales-filter>
                        Submit
                    </button>
                </div>

                <div id="sales-date-panel"
                    class="absolute left-5 top-[132px] z-20 grid w-[672px] grid-cols-[1fr_154px] rounded border border-[#DDE5F0] bg-white text-[14px] shadow-md"
                    hidden>
                    ...
                </div>
            </div>
        </div>

        <div class="mb-4 flex gap-2">
            <button class="btn-secondary text-[#607089]" type="button" data-report-print><x-icons.printer />
                Print</button>
            <button class="btn-secondary text-[#607089]" type="button"
                data-report-export="sales"><x-icons.file-spreadsheet /> Export CSV</button>
        </div>

        <div class="ui-card overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full min-w-[1200px] table-auto text-left text-[14px]">
                    <thead class="h-[49px] bg-[#F8FAFC]">
                        <tr class="border-b border-[#DDE5F0]">
                            <th class="w-[176px] px-4 font-semibold"><span class="inline-flex items-center gap-1">Sales
                                    Invoice <x-icons.chevrons-up-down /></span></th>
                            <th class="w-[250px] font-semibold">Order Date</th>
                            <th class="w-[300px] font-semibold">Payment type</th>
                            <th class="w-[232px] font-semibold">Sales Amount</th>
                            <th class="w-[214px] font-semibold">Cost</th>
                            <th class="w-[254px] font-semibold">Net Sales</th>
                            <th class="w-[156px] font-semibold">Status</th>
                        </tr>
                    </thead>
                    <tbody id="sales-report-body"></tbody>
                </table>
            </div>
            <div class="flex h-[80px] items-center justify-between px-4">
                <div class="flex items-center gap-2 text-[14px]"><select class="ui-input w-12 px-1">
                        <option>10</option>
                    </select><span id="sales-count-label">1 - 10 of 100</span></div>
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
