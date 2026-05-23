<x-layouts.app title="Category List">
    <div id="category-list-app" class="mx-auto max-w-[736px]">
        <h1 class="mb-4 text-[26px] font-extrabold">Category List</h1>

        <div class="ui-card overflow-hidden">
            <div class="flex h-[74px] items-center gap-2 border-b border-[#DDE5F0] px-3">
                <label class="relative w-[244px]">
                    <input id="category-search" class="ui-input h-10 pr-10 italic" placeholder="Search Category">
                    <x-icons.search class="absolute right-3 top-1/2 size-5 -translate-y-1/2 text-[#091E42]" />
                </label>
                <button class="btn-primary h-10" type="button" data-open-modal="category-form">
                    <x-icons.plus />
                    Add Category
                </button>
            </div>

            <table class="w-full text-left text-[14px]">
                <thead class="h-[44px] bg-[#F8FAFC]">
                    <tr class="border-b border-[#DDE5F0]">
                        <th class="px-4 font-semibold">
                            <span class="inline-flex items-center gap-1">Category <x-icons.chevrons-up-down class="text-[#091E42]" /></span>
                        </th>
                        <th class="w-[140px] font-semibold">Status</th>
                    </tr>
                </thead>
                <tbody id="categories-table-body"></tbody>
            </table>

            <div class="flex h-[76px] items-center justify-between px-4">
                <div class="flex items-center gap-2 text-[14px]">
                    <select class="ui-input w-12 px-1"><option>10</option></select>
                    <span id="categories-count-label">1 - 10 of 100</span>
                </div>
                <div class="flex overflow-hidden rounded border border-[#DDE5F0] text-[14px]">
                    @foreach (['‹','1','2','3','...','10','›'] as $page)
                        <button class="h-9 min-w-10 border-r border-[#DDE5F0] px-3 last:border-r-0 {{ $page === '1' ? 'bg-[#091E42] text-white' : ($page === '‹' || $page === '›' ? 'text-[#DDE5F0]' : '') }}" type="button">{{ $page }}</button>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="modal-backdrop" data-modal="category-form" hidden>
            <div class="modal-panel w-[320px] p-4">
                <div class="mb-5 flex items-center justify-between">
                    <h3 class="text-[16px] font-extrabold">Category Details</h3>
                    <button class="text-[#334155]" data-close-modal><x-icons.x /></button>
                </div>
                <label class="block text-[14px]">Category Name<input class="ui-input mt-2" data-category-input="name" placeholder="Category Name"></label>
                <div class="mt-4 text-[14px]">
                    <p class="mb-2 font-semibold">Status</p>
                    <div class="inline-flex overflow-hidden rounded-md border border-[#CAD4E2]">
                        <button class="h-9 w-[86px] bg-[#091E42] text-white" type="button" data-category-status="Active">Active</button>
                        <button class="h-9 w-[86px] text-[#8B8B8B]" type="button" data-category-status="Inactive">Inactive</button>
                    </div>
                </div>
                <div class="mt-5 flex justify-end gap-2">
                    <button class="btn-secondary bg-[#C5222A] text-white" data-delete-category>Delete</button>
                    <button class="btn-primary" data-save-category>Save</button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
