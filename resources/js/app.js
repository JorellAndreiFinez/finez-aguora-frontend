const STORAGE = {
    orders: 'aguora.orders.v1',
    draft: 'aguora.draftOrder.v1',
    customers: 'aguora.customers.v1',
    products: 'aguora.products.v1',
    categories: 'aguora.categories.v1',
};

const statusColors = {
    Paid: '#009D19',
    Partial: '#1688F7',
    Unpaid: '#FF812E',
    Overdue: '#EA3737',
    Draft: '#BDBDBD',
    Cancelled: '#6B7280',
};

const paymentLabels = {
    cash: 'Cash',
    check: 'Check',
    bank: 'Bank Transfer',
};

const icon = {
    x: '<svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>',
    circlePlus: '<svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M8 12h8"></path><path d="M12 8v8"></path></svg>',
};

const seedCategories = [
    { id: 'video-card', name: 'Video card', status: 'Active' },
    { id: 'cooling', name: 'Cooling', status: 'Active' },
    { id: 'glass', name: 'Glass', status: 'Active' },
    { id: 'monitor', name: 'Monitor', status: 'Inactive' },
    { id: 'mousepad', name: 'Mousepad', status: 'Active' },
    { id: 'motherboard', name: 'Motherboard', status: 'Active' },
    { id: 'memory', name: 'Memory', status: 'Active' },
    { id: 'accessory', name: 'Accessory', status: 'Active' },
    { id: 'storage', name: 'Storage', status: 'Active' },
    { id: 'peripherals', name: 'Peripherals', status: 'Active' },
];

const seedProducts = [
    { id: 'sapphire', sku: '95652262', name: 'Sapphire Pulse RX 6600 Gaming 8GB GDDR6 PCIe 4.0', category: 'Video card', price: 10000, cost: 5000, stock: 100, lowStock: 10, status: 'Active', tag: 'GPU' },
    { id: 'corsair', sku: '95652263', name: 'Corsair iCue Link QX140 RGB 140mm', category: 'Cooling', price: 1000, cost: 500, stock: 100, lowStock: 10, status: 'Active', tag: 'RGB' },
    { id: 'asus', sku: '95652264', name: 'Asus ROG Moonstone Ace L Tempered Glass', category: 'Glass', price: 1000, cost: 500, stock: 100, lowStock: 10, status: 'Active', tag: 'GLS' },
    { id: 'samsung-g5', sku: '95652265', name: 'Samsung Odyssey G5 LS27CG510EEXXP 27" VA 165Hz', category: 'Monitor', price: 1000, cost: 500, stock: 100, lowStock: 10, status: 'Active', tag: 'MON' },
    { id: 'kingston-pad', sku: '95652266', name: 'Kingston Fury XL Mousepad 70x30x3mm', category: 'Mousepad', price: 1000, cost: 500, stock: 100, lowStock: 10, status: 'Active', tag: 'PAD' },
    { id: 'msi-b550', sku: '95652267', name: 'MSI B550M Pro-VDH WiFi (AM4) Motherboard', category: 'Motherboard', price: 1000, cost: 500, stock: 100, lowStock: 10, status: 'Active', tag: 'MB' },
    { id: 'gskill', sku: '95652268', name: 'G.Skill Ripjaws V 16GB Dual DDR4 3200Mhz CL16', category: 'Memory', price: 1000, cost: 500, stock: 100, lowStock: 10, status: 'Active', tag: 'RAM' },
    { id: 'wrist-rest', sku: '95652269', name: 'Kingston WRIST REST Black GKR0100', category: 'Accessory', price: 1000, cost: 500, stock: 100, lowStock: 10, status: 'Active', tag: 'WR' },
    { id: 'asrock-b550', sku: '95652270', name: 'Asrock B550M Pro SE microATX AM4 DDR4 Motherboard', category: 'Motherboard', price: 1000, cost: 500, stock: 100, lowStock: 10, status: 'Active', tag: 'MB' },
    { id: 'samsung-24', sku: '95652271', name: 'Samsung LS24C310EAEXXP 23.8" IPS 75Hz FHD', category: 'Monitor', price: 1000, cost: 500, stock: 100, lowStock: 10, status: 'Active', tag: 'MON' },
];

const seedCustomers = [
    { id: 'charles-h-stone', name: 'Charles H. Stone', address: '1066 Christie Way', phone: '0912 345 6789', email: 'sample@email.com', status: 'Active', totalTransactions: 10 },
    { id: 'harold-m-garza', name: 'Harold M. Garza', address: '1406 Columbia Road', phone: '0912 345 6789', email: 'sample@email.com', status: 'Active', totalTransactions: 10 },
    { id: 'sara-p-hyatt', name: 'Sara P. Hyatt', address: '3319 Fairmont Avenue', phone: '0912 345 6789', email: 'sample@email.com', status: 'Active', totalTransactions: 10 },
    { id: 'cindy-p-roberson', name: 'Cindy P. Roberson', address: '2032 Preston Street', phone: '0912 345 6789', email: 'sample@email.com', status: 'Inactive', totalTransactions: 10 },
    { id: 'thomas-s-craven', name: 'Thomas S. Craven', address: '1717 Washington Street', phone: '0912 345 6789', email: 'sample@email.com', status: 'Active', totalTransactions: 10 },
    { id: 'heather-h-mathews', name: 'Heather H. Mathews', address: '3980 Jefferson Street', phone: '0912 345 6789', email: 'sample@email.com', status: 'Active', totalTransactions: 10 },
    { id: 'gary-c-sullivan', name: 'Gary C. Sullivan', address: '2036 Bottom Lane', phone: '0912 345 6789', email: 'sample@email.com', status: 'Active', totalTransactions: 10 },
    { id: 'maria-w-townsend', name: 'Maria W. Townsend', address: '2191 Hidden Valley Road', phone: '0912 345 6789', email: 'sample@email.com', status: 'Active', totalTransactions: 10 },
    { id: 'debora-k-banks', name: 'Debora K. Banks', address: '4533 Wilkinson Street', phone: '0912 345 6789', email: 'sample@email.com', status: 'Active', totalTransactions: 10 },
    { id: 'wilma-j-smith', name: 'Wilma J. Smith', address: '376 Skinner Hollow Road', phone: '0912 345 6789', email: 'sample@email.com', status: 'Active', totalTransactions: 10 },
    { id: 'janice', name: 'Janice J. Talbott', address: '2444 Lowes Alley', phone: '0912 345 6789', email: 'janice@email.com', status: 'Active', totalTransactions: 10 },
];

const seedOrders = [
    { number: '0000010', date: '03/10/2026', customer: null, products: [], subtotal: 15000, itemCount: 15, discount: null, shipping: null, payment: { type: 'cash', amount: 0 }, total: 15000, balance: 15000, status: 'Draft', logs: ['Order Saved as Draft'] },
    { number: '0000009', date: '03/10/2026', customer: null, products: [], subtotal: 15000, itemCount: 15, discount: null, shipping: null, payment: { type: 'check', amount: 0 }, total: 15000, balance: 15000, status: 'Unpaid', logs: ['Order Created'] },
    { number: '0000008', date: '03/10/2026', customer: null, products: [], subtotal: 15000, itemCount: 15, discount: null, shipping: null, payment: { type: 'cash', amount: 10000 }, total: 15000, balance: 5000, status: 'Partial', logs: ['Cash Payment: 10,000.00', 'Order Created'] },
    { number: '0000007', date: '03/10/2026', customer: null, products: [], subtotal: 15000, itemCount: 15, discount: null, shipping: null, payment: { type: 'bank', amount: 0 }, total: 15000, balance: 15000, status: 'Overdue', logs: ['Order Created'] },
    ...Array.from({ length: 6 }, (_, index) => {
        const n = 6 - index;
        return { number: String(n).padStart(7, '0'), date: '03/10/2026', customer: null, products: [], subtotal: 15000, itemCount: 15, discount: null, shipping: null, payment: { type: 'cash', amount: 15000 }, total: 15000, balance: 0, status: 'Paid', logs: ['Cash Payment: 15,000.00', 'Order Created'] };
    }),
];

const readJson = (key, fallback) => {
    try {
        const value = localStorage.getItem(key);
        return value ? JSON.parse(value) : fallback;
    } catch {
        return fallback;
    }
};

const writeJson = (key, value) => localStorage.setItem(key, JSON.stringify(value));

const money = (value) => Number(value || 0).toLocaleString('en-US', {
    minimumFractionDigits: 2,
    maximumFractionDigits: 2,
});

const peso = (value) => `PHP ${money(value)}`;

const parseMoney = (value) => Number(String(value || '').replace(/,/g, '')) || 0;

const displayDate = (value) => {
    const [month, day, year] = String(value || '').split('/');
    const date = new Date(Number(year), Number(month) - 1, Number(day));
    if (Number.isNaN(date.getTime())) return value || '-';
    return date.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
};

const html = (value) => String(value ?? '').replace(/[&<>"']/g, (char) => ({
    '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;',
}[char]));

const productById = (id) => getProducts().find((product) => product.id === id);

const slugify = (value) => String(value || 'customer')
    .toLowerCase()
    .replace(/[^a-z0-9]+/g, '-')
    .replace(/(^-|-$)/g, '') || `customer-${Date.now()}`;

const normalizeCustomer = (customer) => ({
    id: customer.id || slugify(customer.name),
    name: customer.name || '-',
    address: customer.address || '-',
    phone: customer.phone || '0912 345 6789',
    email: customer.email || 'sample@email.com',
    status: customer.status || 'Active',
    totalTransactions: Number(customer.totalTransactions ?? 10),
});

const normalizeCategory = (category) => ({
    id: category.id || slugify(category.name),
    name: category.name || 'Category Name',
    status: category.status || 'Active',
});

const normalizeProduct = (product) => ({
    id: product.id || slugify(product.name),
    sku: product.sku || '95652262',
    name: product.name || 'Product Name',
    category: product.category || 'Video card',
    price: Number(product.price || 0),
    cost: Number(product.cost || product.costPerItem || 0),
    stock: Number(product.stock ?? 0),
    lowStock: Number(product.lowStock ?? 0),
    status: product.status || 'Active',
    tag: product.tag || String(product.name || 'PR').slice(0, 3).toUpperCase(),
});

const ensureStores = () => {
    if (!localStorage.getItem(STORAGE.orders)) writeJson(STORAGE.orders, seedOrders);
    if (!localStorage.getItem(STORAGE.products)) writeJson(STORAGE.products, seedProducts);
    if (!localStorage.getItem(STORAGE.categories)) writeJson(STORAGE.categories, seedCategories);
    const stored = readJson(STORAGE.customers, []);
    const normalized = stored.map(normalizeCustomer);
    const seedIds = new Set(seedCustomers.map((customer) => customer.id));
    const storedOnly = normalized.filter((customer) => !seedIds.has(customer.id));
    const merged = [...seedCustomers, ...storedOnly];
    writeJson(STORAGE.customers, merged.length ? merged : seedCustomers);
};

const getOrders = () => readJson(STORAGE.orders, seedOrders);
const setOrders = (orders) => writeJson(STORAGE.orders, orders);
const getCustomers = () => readJson(STORAGE.customers, seedCustomers).map(normalizeCustomer);
const setCustomers = (customers) => writeJson(STORAGE.customers, customers);
const getCategories = () => readJson(STORAGE.categories, seedCategories).map(normalizeCategory);
const setCategories = (categories) => writeJson(STORAGE.categories, categories);
const getProducts = () => readJson(STORAGE.products, seedProducts).map(normalizeProduct);
const setProducts = (products) => writeJson(STORAGE.products, products);

const nextOrderNumber = () => {
    const max = getOrders().reduce((highest, order) => Math.max(highest, Number(order.number || 0)), 0);
    return String(max + 1).padStart(7, '0');
};

const totals = (order) => {
    const products = order.products || [];
    const subtotal = products.reduce((sum, item) => {
        const product = productById(item.id);
        return sum + (product ? product.price * Number(item.qty || 0) : 0);
    }, 0);
    const itemCount = products.reduce((sum, item) => sum + Number(item.qty || 0), 0);
    const discount = Number(order.discount?.amount || 0);
    const shipping = Number(order.shipping?.amount || 0);
    const paid = Number(order.payment?.amount || 0);
    const total = subtotal - discount + shipping;
    return { subtotal, itemCount, total, paid, balance: Math.max(total - paid, 0) };
};

const defaultDraft = () => ({
    number: nextOrderNumber(),
    date: '03/11/2026',
    terms: '0',
    dueDate: '',
    note: '',
    customer: null,
    products: [],
    discount: null,
    shipping: null,
    payment: null,
});

const saveDraft = (draft) => writeJson(STORAGE.draft, draft);
const loadDraft = () => readJson(STORAGE.draft, null) || defaultDraft();

const showToast = (id, text) => {
    const toast = document.querySelector(id);
    if (!toast) return;
    const textNode = toast.querySelector('#toast-text');
    if (textNode && text) textNode.textContent = text;
    toast.hidden = false;
};

const openModal = (name) => {
    const modal = document.querySelector(`[data-modal="${name}"]`);
    if (modal) modal.hidden = false;
};

const closeModals = () => {
    document.querySelectorAll('[data-modal]').forEach((modal) => {
        modal.hidden = true;
    });
};

const renderThumb = (product) => `<span class="grid size-[42px] shrink-0 place-items-center rounded border border-[#DDE5F0] bg-[#F8FAFC] text-[11px] font-extrabold text-[#091E42]">${html(product.tag)}</span>`;

const buildOrder = (draft, status) => {
    const computed = totals(draft);
    const resolvedStatus = status || (computed.paid >= computed.total && computed.total > 0 ? 'Paid' : (computed.paid > 0 ? 'Partial' : 'Unpaid'));
    const paymentLog = draft.payment ? `${paymentLabels[draft.payment.type]} Payment: ${money(draft.payment.amount)}${draft.payment.reference ? `<br>Reference Number: ${html(draft.payment.reference)}` : ''}` : null;
    return {
        ...draft,
        subtotal: computed.subtotal,
        itemCount: computed.itemCount,
        total: computed.total,
        balance: computed.balance,
        status: resolvedStatus,
        logs: [paymentLog, status === 'Draft' ? 'Order Saved as Draft' : 'Order Created'].filter(Boolean),
    };
};

const upsertOrder = (order) => {
    const rest = getOrders().filter((existing) => existing.number !== order.number);
    setOrders([order, ...rest]);
};

function initCreatePage() {
    const root = document.querySelector('#order-create-app');
    if (!root) return;

    let draft = loadDraft();
    let selectedProductIds = new Set(draft.products.map((item) => item.id));

    const persist = () => saveDraft(draft);

    const renderProducts = () => {
        const rows = document.querySelector('#product-rows');
        const empty = document.querySelector('#products-empty');
        const table = document.querySelector('#products-table');
        if (!rows || !empty || !table) return;
        table.hidden = draft.products.length === 0;
        empty.hidden = draft.products.length > 0;
        rows.innerHTML = draft.products.map((item) => {
            const product = productById(item.id);
            if (!product) return '';
            return `<div class="grid min-h-[75px] grid-cols-[1fr_160px_120px_34px] items-center border-b border-[#DDE5F0] px-3.5">
                <div class="flex items-center gap-3">${renderThumb(product)}<div><p class="font-semibold">${html(product.name)}</p><p class="link-blue">${money(product.price)}</p></div></div>
                <input class="ui-input h-9 w-[60px]" data-product-qty="${html(item.id)}" value="${html(item.qty)}">
                <span>${money(product.price * Number(item.qty || 0))}</span>
                <button class="text-[#334155]" type="button" data-remove-product="${html(item.id)}">${icon.x}</button>
            </div>`;
        }).join('');
    };

    const renderPicker = () => {
        const body = document.querySelector('#product-picker-rows');
        const count = document.querySelector('#selected-count');
        if (!body || !count) return;
        body.innerHTML = getProducts().map((product) => `<tr class="h-[65px] border-t border-[#DDE5F0]">
            <td class="px-4"><input class="product-check" type="checkbox" value="${html(product.id)}" ${selectedProductIds.has(product.id) ? 'checked' : ''}></td>
            <td><div class="flex items-center gap-3">${renderThumb(product)}<span>${html(product.name)}</span></div></td>
            <td>${product.stock}</td>
            <td>${money(product.price)}</td>
        </tr>`).join('');
        count.textContent = `${selectedProductIds.size} Selected`;
    };

    const renderCustomers = () => {
        const options = document.querySelector('#customer-options');
        const selected = document.querySelector('#customer-selected');
        const empty = document.querySelector('#customer-empty');
        const change = document.querySelector('#change-customer');
        const customer = draft.customer;
        if (options) {
            options.innerHTML = getCustomers().map((item) => `<button class="block w-full px-2 py-2 text-left text-[14px] hover:bg-[#F8FAFC]" type="button" data-select-customer="${html(item.id)}">${html(item.name)}</button>`).join('');
        }
        if (!selected || !empty || !change) return;
        empty.hidden = Boolean(customer);
        selected.hidden = !customer;
        change.hidden = !customer;
        selected.innerHTML = customer ? `<p class="text-[#565656]">Customer Name</p><p class="font-semibold">${html(customer.name)}</p>
            <p class="text-[#565656]">Address</p><p class="font-semibold">${html(customer.address)}</p>
            <p class="text-[#565656]">Phone Number</p><p class="font-semibold">${html(customer.phone)}</p>
            <p class="text-[#565656]">E-mail Address</p><p class="font-semibold">${html(customer.email)}</p>` : '';
    };

    const renderSummary = () => {
        const target = document.querySelector('#payment-summary');
        if (!target) return;
        const computed = totals(draft);
        const discount = draft.discount;
        const shipping = draft.shipping;
        const payment = draft.payment;
        target.innerHTML = `<div class="flex justify-between"><span>Subtotal<br><small class="text-[#8B8B8B]">${computed.itemCount} Items</small></span><strong>${money(computed.subtotal)}</strong></div>
            <button class="link-blue block text-left" type="button" data-open-modal="${discount ? 'discount-details' : 'discount'}">Discount</button>
            ${discount ? `<div class="-mt-2 flex justify-between"><small class="text-[#8B8B8B]">${html(discount.note || '-')}</small><span>-${money(discount.amount)}</span></div>` : ''}
            <button class="link-blue block text-left" type="button" data-open-modal="${shipping ? 'shipping-details' : 'shipping'}">${shipping ? 'Shipping' : 'Add Shipping'}</button>
            ${shipping ? `<div class="-mt-2 flex justify-between"><small class="text-[#8B8B8B]">${html(shipping.note || '-')}</small><span>${money(shipping.amount)}</span></div>` : ''}
            <div class="flex justify-between pt-3 font-extrabold"><span>Total</span><span>${money(computed.total)}</span></div>
            ${payment ? `<div class="flex justify-between"><span class="link-blue">Paid<br><small class="text-[#8B8B8B]">${paymentLabels[payment.type]}</small></span><span class="link-blue">${money(payment.amount)}</span></div><div class="flex justify-between pt-2 font-extrabold"><span>Balance</span><span>${money(computed.balance)}</span></div>` : ''}
            <button class="link-blue inline-flex items-center gap-1 pt-1" type="button" data-open-modal="payment">${icon.circlePlus} Add Payment</button>`;
    };

    const renderFields = () => {
        root.querySelectorAll('[data-order-field]').forEach((field) => {
            field.value = draft[field.dataset.orderField] || '';
        });
    };

    const renderAll = () => {
        renderProducts();
        renderPicker();
        renderCustomers();
        renderSummary();
        renderFields();
    };

    const fillAdjustmentModal = (type) => {
        const value = draft[type] || {};
        document.querySelectorAll(`[data-adjustment-amount="${type}"]`).forEach((input) => input.value = value.amount ? money(value.amount) : '');
        document.querySelectorAll(`[data-adjustment-note="${type}"]`).forEach((input) => input.value = value.note || '');
    };

    const inputValue = (name) => {
        const input = [...document.querySelectorAll(`[data-payment-input="${name}"]`)].find((node) => !node.closest('[data-fields]') || !node.closest('[data-fields]').hidden);
        return input?.value || '';
    };

    document.addEventListener('click', (event) => {
        if (!root.contains(event.target)) return;

        const open = event.target.closest('[data-open-modal]');
        if (open) {
            if (open.dataset.openModal === 'products') {
                selectedProductIds = new Set(draft.products.map((item) => item.id));
                renderPicker();
            }
            if (open.dataset.openModal.includes('discount')) fillAdjustmentModal('discount');
            if (open.dataset.openModal.includes('shipping')) fillAdjustmentModal('shipping');
            openModal(open.dataset.openModal);
            return;
        }

        if (event.target.closest('[data-close-modal]')) {
            closeModals();
            return;
        }

        if (event.target.closest('[data-toast-close]')) {
            event.target.closest('#toast').hidden = true;
            return;
        }

        if (event.target.closest('[data-products-add]')) {
            const existing = new Map(draft.products.map((item) => [item.id, item]));
            draft.products = [...selectedProductIds].map((id) => existing.get(id) || { id, qty: 10 });
            persist();
            renderAll();
            closeModals();
            return;
        }

        const removeProduct = event.target.closest('[data-remove-product]');
        if (removeProduct) {
            draft.products = draft.products.filter((item) => item.id !== removeProduct.dataset.removeProduct);
            persist();
            renderAll();
            return;
        }

        const adjustment = event.target.closest('[data-save-adjustment]');
        if (adjustment) {
            const type = adjustment.dataset.saveAdjustment;
            const amount = parseMoney(document.querySelector(`[data-adjustment-amount="${type}"]`)?.value);
            const note = document.querySelector(`[data-adjustment-note="${type}"]`)?.value || '';
            draft[type] = amount ? { amount, note } : null;
            persist();
            renderAll();
            closeModals();
            return;
        }

        const removeAdjustment = event.target.closest('[data-remove-adjustment]');
        if (removeAdjustment) {
            draft[removeAdjustment.dataset.removeAdjustment] = null;
            persist();
            renderAll();
            closeModals();
            return;
        }

        const paymentType = event.target.closest('[data-payment-type]');
        if (paymentType) {
            document.querySelectorAll('[data-payment-type]').forEach((button) => button.dataset.active = String(button === paymentType));
            document.querySelectorAll('[data-fields]').forEach((fields) => fields.hidden = fields.dataset.fields !== paymentType.dataset.paymentType);
            return;
        }

        if (event.target.closest('[data-save-payment]')) {
            const active = document.querySelector('[data-payment-type][data-active="true"]')?.dataset.paymentType || 'cash';
            draft.payment = {
                type: active,
                amount: parseMoney(inputValue('amount')) || 10000,
                reference: inputValue('reference'),
                note: inputValue('note'),
                bankName: inputValue('bankName'),
                account: inputValue('account'),
                checkNumber: inputValue('checkNumber'),
                checkDate: inputValue('checkDate'),
            };
            persist();
            renderAll();
            closeModals();
            showToast('#toast', 'Payment Added');
            return;
        }

        if (event.target.closest('[data-customer-toggle]')) {
            document.querySelector('#customer-menu')?.toggleAttribute('hidden');
            return;
        }

        const selectCustomer = event.target.closest('[data-select-customer]');
        if (selectCustomer) {
            draft.customer = getCustomers().find((customer) => customer.id === selectCustomer.dataset.selectCustomer) || null;
            persist();
            document.querySelector('#customer-menu')?.setAttribute('hidden', '');
            renderAll();
            return;
        }

        if (event.target.closest('[data-save-customer]')) {
            const customer = {};
            document.querySelectorAll('[data-new-customer]').forEach((input) => customer[input.dataset.newCustomer] = input.value);
            customer.id = `${slugify(customer.name)}-${Date.now()}`;
            customer.status = 'Active';
            customer.totalTransactions = 0;
            const customers = [customer, ...getCustomers()];
            setCustomers(customers);
            draft.customer = customer;
            persist();
            closeModals();
            renderAll();
            return;
        }

        if (event.target.closest('#change-customer')) {
            draft.customer = null;
            persist();
            renderAll();
            return;
        }

        if (event.target.closest('[data-save-draft]')) {
            const order = buildOrder(draft, 'Draft');
            upsertOrder(order);
            localStorage.removeItem(STORAGE.draft);
            window.location.href = root.dataset.ordersUrl;
            return;
        }

        if (event.target.closest('[data-submit-order]')) {
            const order = buildOrder(draft);
            upsertOrder(order);
            localStorage.removeItem(STORAGE.draft);
            window.location.href = `${root.dataset.ordersUrl}?created=1`;
        }
    });

    document.addEventListener('change', (event) => {
        if (!root.contains(event.target) || !event.target.matches('.product-check')) return;
        if (event.target.checked) selectedProductIds.add(event.target.value);
        else selectedProductIds.delete(event.target.value);
        document.querySelector('#selected-count').textContent = `${selectedProductIds.size} Selected`;
    });

    document.addEventListener('input', (event) => {
        if (!root.contains(event.target)) return;
        const qty = event.target.closest('[data-product-qty]');
        if (qty) {
            const item = draft.products.find((product) => product.id === qty.dataset.productQty);
            if (item) item.qty = Math.max(0, Number(qty.value) || 0);
            persist();
            renderProducts();
            renderSummary();
            return;
        }
        const field = event.target.closest('[data-order-field]');
        if (field) {
            draft[field.dataset.orderField] = field.value;
            persist();
        }
    });

    renderAll();
}

function initOrderList() {
    const root = document.querySelector('#order-list-app');
    if (!root) return;
    const tbody = document.querySelector('#orders-table-body');
    const countLabel = document.querySelector('#orders-count-label');
    let activeFilter = 'All';
    let search = '';

    const render = () => {
        const orders = getOrders().filter((order) => {
            const matchesFilter = activeFilter === 'All' || order.status === activeFilter;
            const query = search.toLowerCase();
            const matchesSearch = !query || [order.number, displayDate(order.date), order.customer?.name, paymentLabels[order.payment?.type], order.status].some((value) => String(value || '').toLowerCase().includes(query));
            return matchesFilter && matchesSearch;
        });
        tbody.innerHTML = orders.slice(0, 10).map((order) => `<tr class="h-[54px] cursor-pointer border-b border-[#DDE5F0] hover:bg-[#F8FAFC]" data-order-row="${html(order.number)}">
            <td class="whitespace-nowrap px-4">${html(order.number)}</td>
            <td class="whitespace-nowrap">${html(displayDate(order.date))}</td>
            <td class="max-w-[260px] truncate pr-6">${html(order.customer?.name || '-')}</td>
            <td class="whitespace-nowrap pr-6">${html(paymentLabels[order.payment?.type] || '-')}</td>
            <td class="whitespace-nowrap pr-6">${money(order.total ?? totals(order).total)}</td>
            <td class="whitespace-nowrap"><span class="inline-flex items-center gap-2"><i class="size-2 rounded-full" style="background:${statusColors[order.status] || '#6B7280'}"></i>${html(order.status)}</span></td>
        </tr>`).join('');
        countLabel.textContent = orders.length ? `1 - ${Math.min(10, orders.length)} of ${orders.length}` : '0 - 0 of 0';
    };

    if (root.dataset.showCreated === 'true') showToast('#order-list-toast');

    document.addEventListener('click', (event) => {
        if (!root.contains(event.target)) return;
        if (event.target.closest('[data-toast-close]')) {
            event.target.closest('#order-list-toast').hidden = true;
            return;
        }
        const filter = event.target.closest('[data-order-filter]');
        if (filter) {
            activeFilter = filter.dataset.orderFilter;
            root.querySelectorAll('[data-order-filter]').forEach((button) => button.className = '');
            filter.className = 'rounded-md bg-[#E5E7EB] px-4 py-1';
            render();
            return;
        }
        const row = event.target.closest('[data-order-row]');
        if (row) window.location.href = root.dataset.showUrl.replace('__ORDER__', row.dataset.orderRow);
    });

    document.querySelector('#order-search')?.addEventListener('input', (event) => {
        search = event.target.value;
        render();
    });

    render();
}

function initShowPage() {
    const root = document.querySelector('#order-show-app');
    if (!root) return;
    const order = getOrders().find((item) => item.number === root.dataset.orderId);
    if (!order) {
        document.querySelector('#order-not-found').hidden = false;
        document.querySelector('#order-show-content').hidden = true;
        return;
    }
    const computed = totals(order);
    document.querySelector('#show-order-title').textContent = `Order #${order.number}`;
    document.querySelector('#show-product-rows').innerHTML = (order.products || []).map((item) => {
        const product = productById(item.id);
        if (!product) return '';
        return `<div class="grid min-h-[75px] grid-cols-[1fr_160px_120px] items-center border-b border-[#DDE5F0] px-3.5">
            <div class="flex items-center gap-3">${renderThumb(product)}<div><p class="font-semibold">${html(product.name)}</p><p class="link-blue">${money(product.price)}</p></div></div>
            <span>${html(item.qty)}</span><span>${money(product.price * Number(item.qty || 0))}</span>
        </div>`;
    }).join('');

    document.querySelector('#show-payment-summary').innerHTML = `<div class="grid grid-cols-[140px_1fr_140px] py-2"><span>Subtotal</span><span>${computed.itemCount} Items</span><span class="text-right">${money(computed.subtotal)}</span></div>
        <div class="grid grid-cols-[140px_1fr_140px] py-2"><span>Discount</span><span>${html(order.discount?.note || '-')}</span><span class="text-right">-${money(order.discount?.amount || 0)}</span></div>
        <div class="grid grid-cols-[140px_1fr_140px] py-2"><span>Shipping</span><span>${html(order.shipping?.note || '-')}</span><span class="text-right">${money(order.shipping?.amount || 0)}</span></div>
        <div class="grid grid-cols-[140px_1fr_140px] py-2"><span>Total</span><span></span><span class="text-right">${money(computed.total)}</span></div>
        <div class="grid grid-cols-[140px_1fr_140px] py-2"><span>Paid</span><span></span><span class="text-right">${money(computed.paid)}</span></div>
        <div class="mt-2 grid grid-cols-[1fr_140px] border-t border-[#DDE5F0] pt-3 font-extrabold"><span>Balance</span><span class="text-right">${money(computed.balance)}</span></div>`;

    const customer = order.customer;
    document.querySelector('#show-customer-card').innerHTML = `<h2 class="font-extrabold">Customer Information</h2>
        <p class="text-[#565656]">Customer Name</p><p class="font-semibold">${html(customer?.name || '-')}</p>
        <p class="text-[#565656]">Address</p><p class="font-semibold">${html(customer?.address || '-')}</p>
        <p class="text-[#565656]">Phone Number</p><p class="font-semibold">${html(customer?.phone || '-')}</p>
        <p class="text-[#565656]">E-mail Address</p><p class="font-semibold">${html(customer?.email || '-')}</p>`;

    document.querySelector('#show-order-card').innerHTML = `<h2 class="font-extrabold">Order Information</h2>
        <p class="text-[#565656]">Order Date</p><p class="font-semibold">${html(displayDate(order.date))}</p>
        <p class="text-[#565656]">Order Number</p><p class="font-semibold">${html(order.number)}</p>
        <p class="text-[#565656]">Terms (Days)</p><p class="font-semibold">${html(order.terms || '0')}</p>
        <p class="text-[#565656]">Due Date</p><p class="font-semibold">${html(order.dueDate || '-')}</p>
        <p class="text-[#565656]">Note</p><p class="font-semibold">${html(order.note || '-')}</p>
        <p class="text-[#565656]">Status</p><p class="font-semibold"><span class="inline-flex items-center gap-2"><i class="size-2 rounded-full" style="background:${statusColors[order.status] || '#6B7280'}"></i>${html(order.status)}</span></p>`;

    document.querySelector('#show-logs').innerHTML = (order.logs || ['Order Created']).map((log, index) => `<div class="relative ${index < order.logs.length - 1 ? 'mb-5' : ''}">
        <i class="absolute -left-[21px] top-0 size-3 rounded-full border-2 border-[#091E42] bg-white"></i>
        <p class="text-[#565656]">${html(displayDate(order.date))} 11:10 AM</p>
        <p class="mt-2 font-semibold">${log}</p>
    </div>`).join('');

    document.addEventListener('click', (event) => {
        if (!root.contains(event.target)) return;
        if (event.target.closest('[data-action-menu]')) {
            document.querySelector('#action-menu')?.toggleAttribute('hidden');
            return;
        }
        if (event.target.closest('[data-cancel-order]')) {
            const updated = { ...order, status: 'Cancelled', logs: ['Order Cancelled', ...(order.logs || [])] };
            upsertOrder(updated);
            window.location.href = root.dataset.ordersUrl;
        }
    });
}

function initCustomerList() {
    const root = document.querySelector('#customer-list-app');
    if (!root) return;

    const tbody = document.querySelector('#customers-table-body');
    const countLabel = document.querySelector('#customers-count-label');
    const formTitle = document.querySelector('#customer-form-title');
    let activeFilter = 'All';
    let search = '';
    let editingId = null;

    const customerOrders = (customer) => getOrders().filter((order) => order.customer?.id === customer.id);

    const saveCurrentCustomer = () => {
        const data = {};
        root.querySelectorAll('[data-customer-input]').forEach((input) => data[input.dataset.customerInput] = input.value.trim());
        if (!data.name) return;
        const customers = getCustomers();
        const previous = editingId ? customers.find((customer) => customer.id === editingId) : null;
        const customer = normalizeCustomer({
            ...previous,
            ...data,
            id: previous?.id || `${slugify(data.name)}-${Date.now()}`,
            status: previous?.status || 'Active',
            totalTransactions: previous?.totalTransactions ?? 0,
        });
        setCustomers(previous ? customers.map((item) => item.id === editingId ? customer : item) : [customer, ...customers]);
        editingId = null;
        closeModals();
        render();
    };

    const fillForm = (customer = null) => {
        formTitle.textContent = 'Edit Customer Information';
        root.querySelectorAll('[data-customer-input]').forEach((input) => {
            input.value = customer ? customer[input.dataset.customerInput] || '' : '';
        });
    };

    const render = () => {
        const customers = getCustomers().map((customer) => ({
            ...customer,
            totalTransactions: Math.max(customer.totalTransactions || 0, customerOrders(customer).length),
        })).filter((customer) => {
            const matchesFilter = activeFilter === 'All' || customer.status === activeFilter;
            const query = search.toLowerCase();
            const matchesSearch = !query || [customer.name, customer.address, customer.phone, customer.email, customer.status].some((value) => String(value || '').toLowerCase().includes(query));
            return matchesFilter && matchesSearch;
        });

        tbody.innerHTML = customers.slice(0, 10).map((customer) => `<tr class="h-[54px] cursor-pointer border-b border-[#DDE5F0] hover:bg-[#F8FAFC]" data-customer-row="${html(customer.id)}">
            <td class="whitespace-nowrap px-4">${html(customer.name)}</td>
            <td class="max-w-[260px] truncate pr-6">${html(customer.address)}</td>
            <td class="whitespace-nowrap pr-6">${html(customer.phone)}</td>
            <td class="max-w-[240px] truncate pr-6">${html(customer.email)}</td>
            <td class="whitespace-nowrap pr-6 text-center">${html(customer.totalTransactions)}</td>
            <td class="whitespace-nowrap"><span class="inline-flex items-center gap-2"><i class="size-2 rounded-full" style="background:${customer.status === 'Active' ? '#009D19' : '#EA3737'}"></i>${html(customer.status)}</span></td>
        </tr>`).join('');

        countLabel.textContent = customers.length ? `1 - ${Math.min(10, customers.length)} of ${customers.length}` : '0 - 0 of 0';
    };

    document.addEventListener('click', (event) => {
        if (!root.contains(event.target)) return;
        const open = event.target.closest('[data-open-modal]');
        if (open) {
            editingId = null;
            fillForm();
            openModal(open.dataset.openModal);
            return;
        }
        if (event.target.closest('[data-close-modal]')) {
            editingId = null;
            closeModals();
            return;
        }
        if (event.target.closest('[data-save-customer-list]')) {
            saveCurrentCustomer();
            return;
        }
        const filter = event.target.closest('[data-customer-filter]');
        if (filter) {
            activeFilter = filter.dataset.customerFilter;
            root.querySelectorAll('[data-customer-filter]').forEach((button) => button.className = '');
            filter.className = 'rounded-md bg-[#E5E7EB] px-4 py-1';
            render();
            return;
        }
        const row = event.target.closest('[data-customer-row]');
        if (row) window.location.href = root.dataset.showUrl.replace('__CUSTOMER__', row.dataset.customerRow);
    });

    document.querySelector('#customer-search')?.addEventListener('input', (event) => {
        search = event.target.value;
        render();
    });

    render();
}

function initCustomerShow() {
    const root = document.querySelector('#customer-show-app');
    if (!root) return;

    let customer = getCustomers().find((item) => item.id === root.dataset.customerId);
    const content = document.querySelector('#customer-details-content');
    const notFound = document.querySelector('#customer-not-found');

    const customerOrders = () => {
        const orders = getOrders().filter((order) => order.customer?.id === customer.id);
        if (orders.length) return orders;
        return Array.from({ length: 4 }, () => ({
            number: '0000010',
            date: '03/10/2026',
            payment: { type: 'cash', amount: 0 },
            total: 10000,
            balance: 10000,
        }));
    };

    const fillEditForm = () => {
        root.querySelectorAll('[data-detail-customer-input]').forEach((input) => {
            input.value = customer[input.dataset.detailCustomerInput] || '';
        });
    };

    const saveCustomer = () => {
        const data = {};
        root.querySelectorAll('[data-detail-customer-input]').forEach((input) => data[input.dataset.detailCustomerInput] = input.value.trim());
        customer = normalizeCustomer({ ...customer, ...data });
        setCustomers(getCustomers().map((item) => item.id === customer.id ? customer : item));
        closeModals();
        render();
    };

    const render = () => {
        if (!customer) {
            notFound.hidden = false;
            content.hidden = true;
            return;
        }
        notFound.hidden = true;
        content.hidden = false;
        document.querySelector('#customer-status-button').textContent = customer.status === 'Active' ? 'Set Inactive' : 'Set Active';
        document.querySelector('#delete-customer-title').textContent = `Delete ${customer.name}?`;
        document.querySelector('#delete-customer-copy').textContent = `If you delete ${customer.name}, this can't be undone.`;
        document.querySelector('#customer-info-card').innerHTML = `<h2 class="font-extrabold">Customer Information</h2>
            <p class="text-[#565656]">Customer Name</p><p class="font-semibold">${html(customer.name)}</p>
            <p class="text-[#565656]">Address</p><p class="font-semibold">${html(customer.address)}</p>
            <p class="text-[#565656]">Phone Number</p><p class="font-semibold">${html(customer.phone)}</p>
            <p class="text-[#565656]">E-mail Address</p><p class="font-semibold">${html(customer.email)}</p>`;

        document.querySelector('#customer-orders-body').innerHTML = customerOrders().map((order) => `<tr class="h-[54px] border-b border-[#DDE5F0]">
            <td class="whitespace-nowrap px-4">${html(order.number)}</td>
            <td class="whitespace-nowrap">${html(displayDate(order.date))}</td>
            <td class="whitespace-nowrap">${html(paymentLabels[order.payment?.type] || '-')}</td>
            <td class="whitespace-nowrap">${money(order.total ?? totals(order).total)}</td>
            <td class="whitespace-nowrap">${money(order.balance ?? totals(order).balance)}</td>
        </tr>`).join('');
    };

    document.addEventListener('click', (event) => {
        if (!root.contains(event.target)) return;
        const open = event.target.closest('[data-open-modal]');
        if (open) {
            if (open.dataset.openModal === 'edit-customer') fillEditForm();
            openModal(open.dataset.openModal);
            return;
        }
        if (event.target.closest('[data-close-modal]')) {
            closeModals();
            return;
        }
        if (event.target.closest('[data-save-customer-detail]')) {
            saveCustomer();
            return;
        }
        if (event.target.closest('[data-toggle-customer-status]')) {
            customer = normalizeCustomer({ ...customer, status: customer.status === 'Active' ? 'Inactive' : 'Active' });
            setCustomers(getCustomers().map((item) => item.id === customer.id ? customer : item));
            render();
            return;
        }
        if (event.target.closest('[data-confirm-delete-customer]')) {
            setCustomers(getCustomers().filter((item) => item.id !== customer.id));
            window.location.href = root.dataset.customersUrl;
        }
    });

    render();
}

function initCategoryList() {
    const root = document.querySelector('#category-list-app');
    if (!root) return;

    const tbody = document.querySelector('#categories-table-body');
    const countLabel = document.querySelector('#categories-count-label');
    let search = '';
    let editingId = null;
    let selectedStatus = 'Active';

    const setStatusButtons = (status) => {
        selectedStatus = status;
        root.querySelectorAll('[data-category-status]').forEach((button) => {
            const active = button.dataset.categoryStatus === selectedStatus;
            button.className = `h-9 w-[86px] ${active ? 'bg-[#091E42] text-white' : 'text-[#8B8B8B]'}`;
        });
    };

    const fillForm = (category = null) => {
        editingId = category?.id || null;
        root.querySelector('[data-category-input="name"]').value = category?.name || '';
        root.querySelector('[data-delete-category]').hidden = !category;
        setStatusButtons(category?.status || 'Active');
    };

    const render = () => {
        const query = search.toLowerCase();
        const categories = getCategories().filter((category) => !query || category.name.toLowerCase().includes(query));
        tbody.innerHTML = categories.slice(0, 10).map((category) => `<tr class="h-[54px] cursor-pointer border-b border-[#DDE5F0] hover:bg-[#F8FAFC]" data-category-row="${html(category.id)}">
            <td class="px-4">${html(category.name)}</td>
            <td><span class="inline-flex items-center gap-2"><i class="size-2 rounded-full" style="background:${category.status === 'Active' ? '#009D19' : '#EA3737'}"></i>${html(category.status)}</span></td>
        </tr>`).join('');
        countLabel.textContent = categories.length ? `1 - ${Math.min(10, categories.length)} of ${categories.length}` : '0 - 0 of 0';
    };

    document.addEventListener('click', (event) => {
        if (!root.contains(event.target)) return;
        const open = event.target.closest('[data-open-modal]');
        if (open) {
            fillForm();
            openModal(open.dataset.openModal);
            return;
        }
        const row = event.target.closest('[data-category-row]');
        if (row) {
            fillForm(getCategories().find((category) => category.id === row.dataset.categoryRow));
            openModal('category-form');
            return;
        }
        const status = event.target.closest('[data-category-status]');
        if (status) {
            setStatusButtons(status.dataset.categoryStatus);
            return;
        }
        if (event.target.closest('[data-save-category]')) {
            const name = root.querySelector('[data-category-input="name"]').value.trim();
            if (!name) return;
            const categories = getCategories();
            const previous = categories.find((category) => category.id === editingId);
            const category = normalizeCategory({ ...previous, id: previous?.id || `${slugify(name)}-${Date.now()}`, name, status: selectedStatus });
            setCategories(previous ? categories.map((item) => item.id === previous.id ? category : item) : [category, ...categories]);
            closeModals();
            render();
            return;
        }
        if (event.target.closest('[data-delete-category]') && editingId) {
            setCategories(getCategories().filter((category) => category.id !== editingId));
            closeModals();
            render();
            return;
        }
        if (event.target.closest('[data-close-modal]')) closeModals();
    });

    document.querySelector('#category-search')?.addEventListener('input', (event) => {
        search = event.target.value;
        render();
    });

    render();
}

function initProductList() {
    const root = document.querySelector('#product-list-app');
    if (!root) return;

    const tbody = document.querySelector('#products-table-body');
    const countLabel = document.querySelector('#products-count-label');
    let search = '';

    const render = () => {
        const query = search.toLowerCase();
        const products = getProducts().filter((product) => {
            return !query || [product.name, product.sku, product.category, product.status].some((value) => String(value || '').toLowerCase().includes(query));
        });
        tbody.innerHTML = products.slice(0, 10).map((product) => `<tr class="h-[54px] cursor-pointer border-b border-[#DDE5F0] hover:bg-[#F8FAFC]" data-product-row="${html(product.id)}">
            <td class="px-4"><div class="flex items-center gap-3">${renderThumb(product)}<span class="max-w-[245px] truncate">${html(product.name)}</span></div></td>
            <td class="whitespace-nowrap">${html(product.sku)}</td>
            <td class="whitespace-nowrap">${html(product.category)}</td>
            <td class="whitespace-nowrap">${html(product.stock)}</td>
            <td class="whitespace-nowrap">${money(product.price)}</td>
            <td class="whitespace-nowrap"><span class="inline-flex items-center gap-2"><i class="size-2 rounded-full" style="background:${product.status === 'Active' ? '#009D19' : '#EA3737'}"></i>${html(product.status)}</span></td>
        </tr>`).join('');
        countLabel.textContent = products.length ? `1 - ${Math.min(10, products.length)} of ${products.length}` : '0 - 0 of 0';
    };

    document.addEventListener('click', (event) => {
        if (!root.contains(event.target)) return;
        const row = event.target.closest('[data-product-row]');
        if (row) window.location.href = root.dataset.showUrl.replace('__PRODUCT__', row.dataset.productRow);
    });

    document.querySelector('#product-search')?.addEventListener('input', (event) => {
        search = event.target.value;
        render();
    });

    render();
}

function initProductForm() {
    const root = document.querySelector('#product-form-app');
    if (!root) return;

    const mode = root.dataset.mode;
    let product = mode === 'edit' ? getProducts().find((item) => item.id === root.dataset.productId) : null;
    let selectedStatus = product?.status || 'Active';

    const fields = () => [...root.querySelectorAll('[data-product-input]')];

    const setStatusButtons = (status) => {
        selectedStatus = status;
        root.querySelectorAll('[data-product-status]').forEach((button) => {
            const active = button.dataset.productStatus === selectedStatus;
            button.className = `h-9 w-[86px] ${active ? 'bg-[#091E42] text-white' : 'text-[#8B8B8B]'}`;
        });
    };

    const renderCategoryOptions = () => {
        const select = root.querySelector('[data-product-input="category"]');
        if (!select) return;
        select.innerHTML = `<option value="">Select or create a category</option>${getCategories().map((category) => `<option value="${html(category.name)}">${html(category.name)}</option>`).join('')}`;
    };

    const fill = () => {
        const notFound = document.querySelector('#product-not-found');
        const content = document.querySelector('#product-details-content');
        if (mode === 'edit' && !product) {
            if (notFound) notFound.hidden = false;
            if (content) content.hidden = true;
            return;
        }
        renderCategoryOptions();
        fields().forEach((field) => {
            const key = field.dataset.productInput;
            field.value = product ? (key === 'price' || key === 'cost' ? (product[key] ? money(product[key]) : '') : (product[key] ?? '')) : '';
        });
        document.querySelector('#product-media-preview')?.replaceChildren();
        const preview = document.querySelector('#product-media-preview');
        if (preview && product) preview.innerHTML = `<div class="scale-[1.6]">${renderThumb(product)}</div>`;
        setStatusButtons(product?.status || 'Active');
    };

    const collect = () => {
        const data = {};
        fields().forEach((field) => data[field.dataset.productInput] = field.value.trim());
        const name = data.name || 'Product Name';
        return normalizeProduct({
            ...product,
            ...data,
            id: product?.id || `${slugify(name)}-${Date.now()}`,
            price: parseMoney(data.price),
            cost: parseMoney(data.cost),
            stock: Number(data.stock || 0),
            lowStock: Number(data.lowStock || 0),
            status: selectedStatus,
            tag: product?.tag || String(name).slice(0, 3).toUpperCase(),
        });
    };

    document.addEventListener('click', (event) => {
        if (!root.contains(event.target)) return;
        const status = event.target.closest('[data-product-status]');
        if (status) {
            setStatusButtons(status.dataset.productStatus);
            return;
        }
        const open = event.target.closest('[data-open-modal]');
        if (open) {
            openModal(open.dataset.openModal);
            return;
        }
        if (event.target.closest('[data-close-modal]')) {
            closeModals();
            return;
        }
        if (event.target.closest('[data-add-stock]')) {
            const quantity = Number(root.querySelector('[data-stock-quantity]')?.value || 0);
            if (quantity > 0) {
                product = normalizeProduct({ ...product, stock: Number(product.stock || 0) + quantity });
                root.querySelector('[data-product-input="stock"]').value = product.stock;
                root.querySelector('[data-stock-quantity]').value = '';
            }
            closeModals();
            return;
        }
        if (event.target.closest('[data-save-product]')) {
            product = collect();
            const products = getProducts();
            const exists = products.some((item) => item.id === product.id);
            setProducts(exists ? products.map((item) => item.id === product.id ? product : item) : [product, ...products]);
            window.location.href = mode === 'create' ? `${root.dataset.productsUrl}/${product.id}` : root.dataset.productsUrl;
        }
    });

    fill();
}

const downloadCsv = (filename, rows) => {
    const csv = rows.map((row) => row.map((cell) => `"${String(cell ?? '').replace(/"/g, '""')}"`).join(',')).join('\n');
    const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
    const link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = filename;
    link.click();
    URL.revokeObjectURL(link.href);
};

function initSalesReport() {
    const root = document.querySelector('#sales-report-app');
    if (!root) return;

    const tbody = document.querySelector('#sales-report-body');
    const countLabel = document.querySelector('#sales-count-label');
    let rows = [];

    const orderCost = (order) => (order.products || []).reduce((sum, item) => {
        const product = productById(item.id);
        return sum + (product ? Number(product.cost || 0) * Number(item.qty || 0) : 0);
    }, 0) || Number(order.total || 10000) / 2;

    const buildRows = () => getOrders().map((order) => {
        const total = Number(order.total ?? totals(order).total);
        const cost = orderCost(order);
        return {
            invoice: String(order.number || '00000010').padStart(10, '0'),
            date: displayDate(order.date || '12/20/2025'),
            customer: order.customer?.name || '-',
            payment: paymentLabels[order.payment?.type] || 'Cash',
            amount: total || 10000,
            cost,
            net: (total || 10000) - cost,
            status: order.status || 'Paid',
        };
    });

    const renderCustomers = () => {
        const select = root.querySelector('[data-sales-filter="customer"]');
        const names = [...new Set(getOrders().map((order) => order.customer?.name).filter(Boolean))];
        select.innerHTML = `<option>ALL</option>${names.map((name) => `<option>${html(name)}</option>`).join('')}`;
    };

    const render = () => {
        const customer = root.querySelector('[data-sales-filter="customer"]').value;
        const status = root.querySelector('[data-sales-filter="status"]').value;
        rows = buildRows().filter((row) => {
            return (customer === 'ALL' || row.customer === customer) && (status === 'ALL' || row.status === status);
        });
        if (!rows.length) rows = Array.from({ length: 10 }, (_, index) => ({
            invoice: '000000010',
            date: 'Dec 20, 2025',
            payment: 'Cash',
            amount: 10000,
            cost: 5000,
            net: 5000,
            status: index === 0 ? 'Unpaid' : (index === 1 ? 'Partial' : 'Paid'),
        }));
        tbody.innerHTML = rows.slice(0, 10).map((row) => `<tr class="h-[60px] border-b border-[#DDE5F0]">
            <td class="whitespace-nowrap px-4">${html(row.invoice)}</td>
            <td class="whitespace-nowrap">${html(row.date)}</td>
            <td class="whitespace-nowrap">${html(row.payment)}</td>
            <td class="whitespace-nowrap">${peso(row.amount)}</td>
            <td class="whitespace-nowrap">${peso(row.cost)}</td>
            <td class="whitespace-nowrap">${peso(row.net)}</td>
            <td class="whitespace-nowrap"><span class="inline-flex items-center gap-2"><i class="size-2 rounded-full" style="background:${statusColors[row.status] || '#009D19'}"></i>${html(row.status)}</span></td>
        </tr>`).join('');
        countLabel.textContent = rows.length ? `1 - ${Math.min(10, rows.length)} of ${rows.length}` : '0 - 0 of 0';
    };

    document.addEventListener('click', (event) => {
        if (!root.contains(event.target)) return;
        if (event.target.closest('[data-date-toggle]')) {
            root.querySelector('#sales-date-panel')?.toggleAttribute('hidden');
            return;
        }
        const preset = event.target.closest('[data-date-preset]');
        if (preset) {
            root.querySelector('#sales-date-label').textContent = preset.dataset.datePreset;
            return;
        }
        if (event.target.closest('[data-date-apply]')) {
            root.querySelector('#sales-date-panel').hidden = true;
            return;
        }
        if (event.target.closest('[data-apply-sales-filter]')) render();
        if (event.target.closest('[data-report-print]')) window.print();
        if (event.target.closest('[data-report-export="sales"]')) {
            downloadCsv('sales-report.csv', [['Sales Invoice', 'Order Date', 'Payment type', 'Sales Amount', 'Cost', 'Net Sales', 'Status'], ...rows.map((row) => [row.invoice, row.date, row.payment, row.amount, row.cost, row.net, row.status])]);
        }
    });

    renderCustomers();
    render();
}

function initInventoryReport() {
    const root = document.querySelector('#inventory-report-app');
    if (!root) return;

    const tbody = document.querySelector('#inventory-report-body');
    const countLabel = document.querySelector('#inventory-count-label');
    let rows = [];

    const renderCategories = () => {
        const select = root.querySelector('[data-inventory-filter="category"]');
        select.innerHTML = `<option>ALL</option>${getCategories().map((category) => `<option>${html(category.name)}</option>`).join('')}`;
    };

    const render = () => {
        const category = root.querySelector('[data-inventory-filter="category"]').value;
        const status = root.querySelector('[data-inventory-filter="status"]').value;
        rows = getProducts().filter((product) => {
            return (category === 'ALL' || product.category === category) && (status === 'ALL' || product.status === status);
        });
        const active = rows.filter((product) => product.status === 'Active').length;
        const out = rows.filter((product) => product.stock <= 0).length;
        const low = rows.filter((product) => product.stock > 0 && product.stock <= product.lowStock).length;
        const cost = rows.reduce((sum, product) => sum + product.cost * product.stock, 0);
        const forecast = rows.reduce((sum, product) => sum + product.price * product.stock, 0);

        root.querySelector('#inventory-active-count').textContent = active.toLocaleString('en-US');
        root.querySelector('#inventory-out-count').textContent = out.toLocaleString('en-US');
        root.querySelector('#inventory-low-count').textContent = low.toLocaleString('en-US');
        root.querySelector('#inventory-cost-total').textContent = money(cost);
        root.querySelector('#inventory-sales-total').textContent = money(forecast);

        tbody.innerHTML = rows.slice(0, 10).map((product) => `<tr class="h-[50px] border-b border-[#DDE5F0]">
            <td class="px-4"><span class="block max-w-[640px] truncate">${html(product.name)}</span></td>
            <td class="whitespace-nowrap">${html(product.category)}</td>
            <td class="whitespace-nowrap">${Number(product.stock).toLocaleString('en-US')}</td>
            <td class="whitespace-nowrap">${peso(product.cost * product.stock)}</td>
            <td class="whitespace-nowrap">${peso(product.price * product.stock)}</td>
            <td class="whitespace-nowrap"><span class="inline-flex items-center gap-2"><i class="size-2 rounded-full" style="background:${product.status === 'Active' ? '#009D19' : '#EA3737'}"></i>${html(product.status)}</span></td>
        </tr>`).join('');
        countLabel.textContent = rows.length ? `1 - ${Math.min(10, rows.length)} of ${rows.length}` : '0 - 0 of 0';
    };

    document.addEventListener('click', (event) => {
        if (!root.contains(event.target)) return;
        if (event.target.closest('[data-apply-inventory-filter]')) render();
        if (event.target.closest('[data-report-print]')) window.print();
        if (event.target.closest('[data-report-export="inventory"]')) {
            downloadCsv('inventory-report.csv', [['Product Name', 'Category', 'Stock On Hand', 'Inventory Cost', 'Forecasted Sales', 'Status'], ...rows.map((product) => [product.name, product.category, product.stock, product.cost * product.stock, product.price * product.stock, product.status])]);
        }
    });

    renderCategories();
    render();
}

ensureStores();
initCreatePage();
initOrderList();
initShowPage();
initCustomerList();
initCustomerShow();
initCategoryList();
initProductList();
initProductForm();
initSalesReport();
initInventoryReport();
