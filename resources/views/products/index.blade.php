<x-layouts.app title="Product List">
    <div id="product-list-app" class="mx-auto max-w-[1262px]" data-show-url="{{ url('/products/__PRODUCT__') }}">
        <h1 class="mb-4 text-[26px] font-extrabold">Product List</h1>

        <div class="ui-card overflow-hidden">
            <div class="flex h-[74px] items-center gap-2 border-b border-[#DDE5F0] px-3">
                <label class="relative w-[244px]">
                    <input id="product-search" class="ui-input h-10 pr-10 italic" placeholder="Search Product">
                    <x-icons.search class="absolute right-3 top-1/2 size-5 -translate-y-1/2 text-[#091E42]" />
                </label>
                <a class="btn-primary h-10" href="{{ route('products.create') }}">
                    <x-icons.plus />
                    Add Product
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full min-w-[1080px] table-auto text-left text-[14px]">
                    <thead class="h-[44px] bg-[#F8FAFC]">
                        <tr class="border-b border-[#DDE5F0]">
                            <th class="w-[330px] px-4 font-semibold">
                                <span class="inline-flex items-center gap-1">Product Name <x-icons.chevrons-up-down class="text-[#091E42]" /></span>
                            </th>
                            <th class="w-[150px] font-semibold">SKU</th>
                            <th class="w-[170px] font-semibold">Category</th>
                            <th class="w-[150px] font-semibold">Stock on Hand</th>
                            <th class="w-[120px] font-semibold">Price</th>
                            <th class="w-[120px] font-semibold">Status</th>
                        </tr>
                    </thead>
                    <tbody id="products-table-body"></tbody>
                </table>
            </div>

            <div class="flex h-[76px] items-center justify-between px-4">
                <div class="flex items-center gap-2 text-[14px]">
                    <select class="ui-input w-12 px-1"><option>10</option></select>
                    <span id="products-count-label">1 - 10 of 100</span>
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
