<x-layouts.app title="Order List">
    <div id="order-list-app" class="relative space-y-4" data-show-created="{{ request('created') ? 'true' : 'false' }}" data-create-url="{{ route('orders.create') }}" data-show-url="{{ url('/orders/__ORDER__') }}">
        <div id="order-list-toast" hidden class="absolute left-1/2 top-[-24px] z-10 flex h-16 w-[314px] -translate-x-1/2 items-center gap-3 rounded-[3px] bg-[#091E42] px-4 text-white shadow">
            <span class="grid size-5 place-items-center rounded-full bg-white text-[#091E42]">
                <x-icons.check-circle class="size-4" />
            </span>
            <span class="font-extrabold">Order Created</span>
            <button class="ml-auto text-[#BFF3C6]" type="button" data-toast-close><x-icons.x class="size-4" /></button>
        </div>

        <h1 class="text-[26px] font-extrabold">Order List</h1>

        <div class="ui-card overflow-hidden">
            <div class="flex h-[75px] items-center gap-2 border-b border-[#DDE5F0] px-3">
                <label class="relative w-[244px]">
                    <input id="order-search" class="ui-input h-10 pr-10 italic" placeholder="Search Order">
                    <x-icons.search class="absolute right-3 top-1/2 size-5 -translate-y-1/2 text-[#091E42]" />
                </label>
                <a class="btn-primary h-10" href="{{ route('orders.create') }}">
                    <x-icons.plus />
                    Add Order
                </a>
            </div>

            <div class="flex h-12 items-center gap-3 border-b border-[#DDE5F0] px-1 text-[14px] font-semibold">
                @foreach (['All','Unpaid','Partial','Paid','Overdue','Draft','Cancelled'] as $filter)
                    <button class="{{ $loop->first ? 'rounded-md bg-[#E5E7EB] px-4 py-1' : '' }}" type="button" data-order-filter="{{ $filter }}">{{ $filter }}</button>
                @endforeach
            </div>

            <div class="overflow-x-auto">
            <table class="w-full min-w-[1080px] table-auto text-left text-[14px]">
                <thead class="h-[44px] bg-[#F8FAFC]">
                    <tr class="border-b border-[#DDE5F0]">
                        <th class="w-[165px] px-4 font-semibold">
                            <span class="inline-flex items-center gap-1">
                                Order No.
                                <x-icons.chevrons-up-down class="text-[#091E42]" />
                            </span>
                        </th>
                        <th class="w-[180px] font-semibold">Order Date</th>
                        <th class="min-w-[220px] font-semibold">Customer</th>
                        <th class="w-[210px] font-semibold">Payment Type</th>
                        <th class="w-[220px] font-semibold">Total</th>
                        <th class="w-[150px] font-semibold">Status</th>
                    </tr>
                </thead>
                <tbody id="orders-table-body"></tbody>
            </table>
            </div>

            <div class="flex h-[76px] items-center justify-between px-4">
                <div class="flex items-center gap-2 text-[14px]">
                    <select class="ui-input w-12 px-1"><option>10</option></select>
                    <span id="orders-count-label">1 - 10 of 100</span>
                </div>
                <div class="flex overflow-hidden rounded border border-[#DDE5F0] text-[14px]">
                    @foreach (['‹','1','2','3','...','10','›'] as $page)
                        <button class="h-9 min-w-10 border-r border-[#DDE5F0] px-3 last:border-r-0 {{ $page === '1' ? 'bg-[#091E42] text-white' : ($page === '‹' || $page === '›' ? 'text-[#DDE5F0]' : '') }}" type="button">{{ $page }}</button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
