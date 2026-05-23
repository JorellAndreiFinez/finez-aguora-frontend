<x-layouts.app title="Add Product">
    <div id="product-form-app" class="mx-auto max-w-[740px]" data-products-url="{{ route('products.index') }}" data-mode="create">
        <div class="mb-5 flex items-center justify-between">
            <h1 class="inline-flex items-center gap-2 text-[26px] font-extrabold"><x-icons.arrow-left /> Add Product</h1>
            <div class="flex gap-2">
                <a href="{{ route('products.index') }}" class="btn-secondary w-[94px]">Cancel</a>
                <button class="btn-primary w-[98px]" type="button" data-save-product>Submit</button>
            </div>
        </div>

        <div class="grid grid-cols-[468px_248px] gap-7">
            <div class="ui-card p-5 text-[14px]">
                <label class="block">SKU (Stock Keeping Unit)<input class="ui-input mt-2" data-product-input="sku" placeholder="SKU (Stock Keeping Unit)"></label>
                <label class="mt-4 block">Product Name<input class="ui-input mt-2" data-product-input="name" placeholder="Product Name"></label>
                <label class="mt-4 block">Category
                    <select class="ui-input mt-2" data-product-input="category"></select>
                </label>
                <div class="mt-4 grid grid-cols-2 gap-3">
                    <label class="block">Stock on Hand<input class="ui-input mt-2" data-product-input="stock" placeholder="0"></label>
                    <label class="block">Low Stock Alert<input class="ui-input mt-2" data-product-input="lowStock" placeholder="0"></label>
                </div>
                <div class="mt-4 grid grid-cols-2 gap-3">
                    <label class="block">Price<input class="ui-input mt-2" data-product-input="price" placeholder="0.00"></label>
                    <label class="block">Cost per item<input class="ui-input mt-2" data-product-input="cost" placeholder="0.00"></label>
                </div>
            </div>

            <div class="space-y-4">
                <div class="ui-card p-4 text-[14px]">
                    <h2 class="mb-3 font-extrabold">Media</h2>
                    <div class="grid h-[148px] place-items-center rounded border border-dashed border-[#CAD4E2] text-center text-[#8B8B8B]">
                        <div><x-icons.plus class="mx-auto mb-2 size-5" /><span class="text-[11px]">Add Photo</span></div>
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
</x-layouts.app>
