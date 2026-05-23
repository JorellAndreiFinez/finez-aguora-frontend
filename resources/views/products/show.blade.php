<x-layouts.app title="Product Details">
    <div id="product-form-app" class="mx-auto max-w-[740px]" data-products-url="{{ route('products.index') }}" data-product-id="{{ request()->route('product') }}" data-mode="edit">
        <div id="product-not-found" class="mx-auto mt-20 max-w-md text-center" hidden>
            <h1 class="mb-3 text-[26px] font-extrabold">Product not found</h1>
            <a href="{{ route('products.index') }}" class="btn-primary inline-flex">Back to Product List</a>
        </div>

        <div id="product-details-content">
            <div class="mb-5 flex items-center justify-between">
                <h1 class="inline-flex items-center gap-2 text-[26px] font-extrabold"><x-icons.arrow-left /> Product Details</h1>
                <div class="flex gap-2">
                    <button class="btn-secondary" type="button" data-open-modal="add-stock"><x-icons.plus /> Add Stock</button>
                    <button class="btn-primary w-[98px]" type="button" data-save-product>Save</button>
                </div>
            </div>

            <div class="grid grid-cols-[468px_248px] gap-7">
                <div class="ui-card p-5 text-[14px]">
                    <label class="block">SKU (Stock Keeping Unit)<input class="ui-input mt-2" data-product-input="sku"></label>
                    <label class="mt-4 block">Product Name<input class="ui-input mt-2" data-product-input="name"></label>
                    <label class="mt-4 block">Category
                        <select class="ui-input mt-2" data-product-input="category"></select>
                    </label>
                    <div class="mt-4 grid grid-cols-2 gap-3">
                        <label class="block">Stock on Hand<input class="ui-input mt-2 bg-[#E5E7EB]" data-product-input="stock" readonly></label>
                        <label class="block">Low Stock Alert<input class="ui-input mt-2" data-product-input="lowStock"></label>
                    </div>
                    <div class="mt-4 grid grid-cols-2 gap-3">
                        <label class="block">Price<input class="ui-input mt-2" data-product-input="price"></label>
                        <label class="block">Cost per item<input class="ui-input mt-2" data-product-input="cost"></label>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="ui-card p-4 text-[14px]">
                        <h2 class="mb-3 font-extrabold">Media</h2>
                        <div class="grid h-[148px] place-items-center rounded border border-dashed border-[#CAD4E2] text-center">
                            <div id="product-media-preview"></div>
                        </div>
                    </div>
                    <div class="ui-card p-4 text-[14px]">
                        <p class="mb-2 font-semibold">Status</p>
                        <div class="inline-flex overflow-hidden rounded-md border border-[#CAD4E2]">
                            <button class="h-9 w-[86px] bg-[#091E42] text-white" type="button" data-product-status="Active">Active</button>
                            <button class="h-9 w-[86px] text-[#8B8B8B]" type="button" data-product-status="Inactive">Inactive</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-backdrop" data-modal="add-stock" hidden>
            <div class="modal-panel w-[320px] p-4">
                <div class="mb-4 flex items-center justify-between">
                    <h3 class="text-[16px] font-extrabold">Add Stock</h3>
                    <button class="text-[#334155]" data-close-modal><x-icons.x /></button>
                </div>
                <label class="block text-[14px]">Quantity<input class="ui-input mt-2" data-stock-quantity placeholder="0"></label>
                <div class="mt-5 flex justify-end gap-2">
                    <button class="btn-secondary" data-close-modal>Cancel</button>
                    <button class="btn-primary" data-add-stock>Add</button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
