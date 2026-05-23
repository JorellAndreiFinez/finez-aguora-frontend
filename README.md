# Aguora Frontend Developer Assessment

This is a Laravel Blade frontend implementation for the Aguora technical assessment. The UI follows the provided Figma/screenshots and uses Manrope with the primary color `#091E42`.

## Tech Stack

- Laravel Blade
- Vite
- Tailwind CSS
- Vanilla JavaScript
- Browser `localStorage` for frontend-only persistence

No database is required for the demo data. Orders, customers, products, categories, and reports are stored and updated in `localStorage`.

## Setup

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
npm run build
php artisan serve
```

For development with live asset updates:

```bash
npm run dev
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```

## Demo Flow

Start from the login page:

```text
/login
```

Clicking Sign in goes to:

```text
/dashboard
```

Main implemented pages:

```text
/dashboard
/orders
/orders/create
/orders/{orderNumber}
/customers
/customers/{customerId}
/products
/products/create
/products/{productId}
/categories
/reports/sales
/reports/inventory
```

## Implemented Features

- Login UI
- Dashboard UI with sales and inventory widgets
- Order list, create order, and view order pages
- Dynamic order creation with products, discounts, shipping, customer selection, and payment
- Customer list and customer details
- Add, edit, delete, and activate/inactivate customers
- Product list, add product, product details, and add stock
- Category list with add, edit, delete, and status controls
- Sales report with filters, print, export CSV, and date range UI
- Inventory report with filters, summary cards, print, and export CSV
- Responsive table wrappers to prevent column overlap on smaller widths
- Blade icon components instead of hardcoded text symbols for UI controls

## LocalStorage Notes

The app seeds demo data automatically on first load. New or edited frontend data is saved in the browser under these keys:

```text
aguora.orders.v1
aguora.draftOrder.v1
aguora.customers.v1
aguora.products.v1
aguora.categories.v1
```

To reset the demo state, clear site data/localStorage in the browser and refresh the page.

## Build Verification

The project was verified with:

```bash
npm run build
```

The following routes were smoke-tested locally and returned `200`:

```text
/orders
/orders/create
/customers
/products
/products/create
/categories
/reports/sales
/reports/inventory
```
