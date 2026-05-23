<div class="modal-backdrop" data-modal="products" hidden>
    <div class="modal-panel w-[704px] overflow-hidden">
        <div class="flex h-[58px] items-center justify-between px-4">
            <h3 class="text-[16px] font-extrabold">Product List</h3>
            <button class="text-[#334155]" data-close-modal><x-icons.x /></button>
        </div>
        <div class="border-y border-[#DDE5F0] p-3"><input class="ui-input" placeholder="Search Products"></div>
        <table class="w-full text-left text-[14px]">
            <thead class="h-[52px]"><tr><th class="w-12 px-4"></th><th>Product Name</th><th class="w-44">Stock on hand</th><th class="w-28">Price</th></tr></thead>
            <tbody id="product-picker-rows"></tbody>
        </table>
        <div class="flex h-[70px] items-center justify-between border-t border-[#DDE5F0] px-4">
            <span id="selected-count" class="rounded bg-[#D2D8E2] px-4 py-2 text-[13px] font-semibold">0 Selected</span>
            <div class="flex gap-2"><button class="btn-secondary" data-close-modal>Cancel</button><button class="btn-primary" data-products-add>Add</button></div>
        </div>
    </div>
</div>

@foreach ([['discount','Add Discount'],['discount-details','Discount Details'],['shipping','Add Shipping'],['shipping-details','Shipping Details']] as $modal)
    <div class="modal-backdrop" data-modal="{{ $modal[0] }}" hidden>
        <div class="modal-panel w-[320px] p-4">
            <div class="mb-4 flex items-center justify-between">
                <h3 class="text-[16px] font-extrabold">{{ $modal[1] }}</h3>
                <button class="text-[#334155]" data-close-modal><x-icons.x /></button>
            </div>
            <label class="mb-4 block text-[14px]">Amount<input class="ui-input mt-2" data-adjustment-amount="{{ str_contains($modal[0], 'discount') ? 'discount' : 'shipping' }}" placeholder="0.00"></label>
            <label class="block text-[14px]">Note<input class="ui-input mt-2" data-adjustment-note="{{ str_contains($modal[0], 'discount') ? 'discount' : 'shipping' }}" placeholder="Note"></label>
            <div class="mt-4 flex justify-end gap-2">
                @if (str_contains($modal[0], 'details'))
                    <button class="btn-secondary" data-remove-adjustment="{{ str_contains($modal[0], 'discount') ? 'discount' : 'shipping' }}">Remove</button>
                @else
                    <button class="btn-secondary" data-close-modal>Cancel</button>
                @endif
                <button class="btn-primary" data-save-adjustment="{{ str_contains($modal[0], 'discount') ? 'discount' : 'shipping' }}">Submit</button>
            </div>
        </div>
    </div>
@endforeach

<div class="modal-backdrop" data-modal="payment" hidden>
    <div class="modal-panel w-[410px] p-4">
        <div class="mb-4 flex items-center justify-between"><h3 class="text-[16px] font-extrabold">Add Payment</h3><button class="text-[#334155]" data-close-modal><x-icons.x /></button></div>
        <div class="mb-5 grid grid-cols-3 gap-5">
            @foreach (['cash' => 'Cash', 'check' => 'Check', 'bank' => 'Bank Transfer'] as $key => $label)
                <button class="payment-type rounded-md border border-[#CAD4E2] px-2 py-3 font-semibold data-[active=true]:border-[#091E42] data-[active=true]:bg-[#091E42] data-[active=true]:text-white" type="button" data-payment-type="{{ $key }}" data-active="{{ $loop->first ? 'true' : 'false' }}">
                    @switch($key)
                        @case('check')
                            <x-icons.receipt-text class="mx-auto mb-1 size-8" />
                            @break
                        @case('bank')
                            <x-icons.landmark class="mx-auto mb-1 size-8" />
                            @break
                        @default
                            <x-icons.banknote class="mx-auto mb-1 size-8" />
                    @endswitch
                    {{ $label }}
                </button>
            @endforeach
        </div>
        <div class="space-y-4 text-[14px]">
            <label class="block">Amount Paid<input class="ui-input mt-2" data-payment-input="amount" placeholder="0.00"></label>
            <div data-fields="cash"><label class="block">Reference Number<input class="ui-input mt-2" data-payment-input="reference" placeholder="Reference Number"></label><label class="mt-4 block">Note<input class="ui-input mt-2" data-payment-input="note" placeholder="Note"></label></div>
            <div data-fields="bank" hidden><label class="block">Bank Name<input class="ui-input mt-2" data-payment-input="bankName" placeholder="Bank Name"></label><label class="mt-4 block">Reference Number<input class="ui-input mt-2" data-payment-input="reference" placeholder="Reference Number"></label><label class="mt-4 block">Proof of Payment<div class="mt-2 flex h-9 overflow-hidden rounded border border-[#CAD4E2]"><span class="grid w-24 place-items-center border-r border-[#CAD4E2]">Browse..</span><span class="grid place-items-center px-3">No file selected.</span></div></label></div>
            <div data-fields="check" hidden><label class="block">Bank Name<input class="ui-input mt-2" data-payment-input="bankName" placeholder="Bank Name"></label><label class="mt-4 block">Bank Account Number<input class="ui-input mt-2" data-payment-input="account" placeholder="Bank Account Number"></label><label class="mt-4 block">Check Number<input class="ui-input mt-2" data-payment-input="checkNumber" placeholder="Check Number"></label><label class="mt-4 block">Check Date<input class="ui-input mt-2" data-payment-input="checkDate" placeholder="MM/DD/YYYY"></label><label class="mt-4 block">Proof of Payment<div class="mt-2 flex h-9 overflow-hidden rounded border border-[#CAD4E2]"><span class="grid w-24 place-items-center border-r border-[#CAD4E2]">Browse..</span><span class="grid place-items-center px-3">No file selected.</span></div></label></div>
        </div>
        <div class="mt-4 flex justify-end gap-2"><button class="btn-secondary" data-close-modal>Cancel</button><button class="btn-primary" data-save-payment>Submit</button></div>
    </div>
</div>

<div class="modal-backdrop" data-modal="customer" hidden>
    <div class="modal-panel w-[486px] p-6">
        <div class="mb-4 flex items-center justify-between"><h3 class="text-[16px] font-extrabold">Create Customer</h3><button class="text-[#334155]" data-close-modal><x-icons.x /></button></div>
        <div class="space-y-4 text-[14px]">
            <label class="block">Name<input class="ui-input mt-2" data-new-customer="name" placeholder="Name"></label>
            <label class="block">Address<input class="ui-input mt-2" data-new-customer="address" placeholder="Address"></label>
            <label class="block">Phone Number<input class="ui-input mt-2" data-new-customer="phone" placeholder="09XXXXXXXXX"></label>
            <label class="block">E-mail Address<input class="ui-input mt-2" data-new-customer="email" placeholder="E-mail Address"></label>
        </div>
        <div class="mt-5 flex justify-end gap-2"><button class="btn-secondary" data-close-modal>Cancel</button><button class="btn-primary" data-save-customer>Submit</button></div>
    </div>
</div>
