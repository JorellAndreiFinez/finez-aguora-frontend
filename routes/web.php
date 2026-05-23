<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('welcome');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/customers', function () {
    return view('customers.index');
})->name('customers.index');

Route::get('/customers/{customer}', function ($customer) {
    return view('customers.show');
})->name('customers.show');

Route::get('/products', function () {
    return view('products.index');
})->name('products.index');

Route::get('/products/create', function () {
    return view('products.create');
})->name('products.create');

Route::get('/products/{product}', function ($product) {
    return view('products.show');
})->name('products.show');

Route::get('/categories', function () {
    return view('categories.index');
})->name('categories.index');

Route::get('/reports/sales', function () {
    return view('reports.sales');
})->name('reports.sales');

Route::get('/reports/inventory', function () {
    return view('reports.inventory');
})->name('reports.inventory');

Route::get('/orders', function () {
    return view('orders.index');
})->name('orders.index');

Route::get('/orders/create', function () {
    return view('orders.create');
})->name('orders.create');

Route::get('/orders/{order}', function ($order) {
    return view('orders.show');
})->name('orders.show');
