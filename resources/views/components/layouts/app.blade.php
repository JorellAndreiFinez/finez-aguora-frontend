<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Aguora' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white font-sans text-[#303030] antialiased">
    <div class="flex min-h-screen bg-white">
        <aside class="fixed inset-y-0 left-0 z-30 flex w-[223px] flex-col border-r border-[#DDE5F0] bg-[#F8FAFC]">
            <div class="flex h-[64px] items-center justify-between px-3">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2.5">
                    <span class="flex size-[38px] items-center justify-center rounded-md border border-[#DDE5F0] bg-white">
                        <img src="{{ asset('assets/aguora-logo.png') }}" alt="Aguora" class="w-7">
                    </span>
                    <span class="text-[22px] font-extrabold tracking-[-0.01em]">AGUORA</span>
                </a>
                <button class="text-[#6B7A90]" type="button" aria-label="Collapse sidebar">
                    <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M14 8l-4 4 4 4"/></svg>
                </button>
            </div>

            <nav class="mt-2 space-y-1 px-3 text-[15px] font-semibold text-[#607089]">
                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'is-active' : '' }}">
                    <svg viewBox="0 0 24 24"><path d="M4 19V5m0 14h16M7 15l4-4 3 3 5-7"/></svg>
                    Dashboard
                </a>
                <a href="{{ route('orders.index') }}" class="nav-link {{ request()->routeIs('orders.*') ? 'is-active' : '' }}">
                    <svg viewBox="0 0 24 24"><path d="M4 7h16M4 12h16M4 17h16M8 7v10"/></svg>
                    Order List
                </a>
                <a href="{{ route('customers.index') }}" class="nav-link {{ request()->routeIs('customers.*') ? 'is-active' : '' }}">
                    <svg viewBox="0 0 24 24"><path d="M20 21a8 8 0 0 0-16 0"/><circle cx="12" cy="7" r="4"/></svg>
                    Customer List
                </a>
                <a href="{{ route('products.index') }}" class="nav-link {{ request()->routeIs('products.*') || request()->routeIs('categories.*') ? 'is-active' : '' }}">
                    <svg viewBox="0 0 24 24"><path d="M6 8h12l-1 12H7L6 8Z"/><path d="M9 8a3 3 0 1 1 6 0"/></svg>
                    Product
                    <x-icons.chevron-down class="ml-auto size-4" />
                </a>
                <div class="space-y-1 pl-[52px] text-[15px]">
                    <a href="{{ route('products.index') }}" class="block rounded px-3 py-2 font-semibold {{ request()->routeIs('products.*') ? 'bg-[#DCE6F8] text-[#0057E8]' : 'text-[#607089]' }}">Product List</a>
                    <a href="{{ route('categories.index') }}" class="block rounded px-3 py-2 font-semibold {{ request()->routeIs('categories.*') ? 'bg-[#DCE6F8] text-[#0057E8]' : 'text-[#607089]' }}">Categories</a>
                </div>
                <a href="{{ route('reports.sales') }}" class="nav-link {{ request()->routeIs('reports.*') ? 'is-active' : '' }}">
                    <svg viewBox="0 0 24 24"><path d="M7 3h7l4 4v14H7z"/><path d="M14 3v5h5"/></svg>
                    Reports
                    <x-icons.chevron-down class="ml-auto size-4" />
                </a>
                <div class="space-y-1 pl-[52px] text-[15px]">
                    <a href="{{ route('reports.sales') }}" class="block rounded px-3 py-2 font-semibold {{ request()->routeIs('reports.sales') ? 'bg-[#DCE6F8] text-[#0057E8]' : 'text-[#607089]' }}">Sales Report</a>
                    <a href="{{ route('reports.inventory') }}" class="block rounded px-3 py-2 font-semibold {{ request()->routeIs('reports.inventory') ? 'bg-[#DCE6F8] text-[#0057E8]' : 'text-[#607089]' }}">Inventory Report</a>
                </div>
            </nav>

            <div class="mt-auto flex items-center gap-3 px-5 pb-5">
                <div class="grid size-8 place-items-center overflow-hidden rounded-full bg-gradient-to-br from-[#D9B36C] via-[#F2D2B6] to-[#091E42] text-xs font-bold text-white">JS</div>
                <div class="min-w-0">
                    <p class="truncate text-[14px] font-bold">John Santos</p>
                    <p class="text-[12px] font-semibold text-[#303030]">Admin</p>
                </div>
                <a href="{{ route('login') }}" class="ml-auto text-[#6B7A90]" aria-label="Logout">
                    <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 17l5-5-5-5"/><path d="M15 12H3"/><path d="M21 3v18h-7"/></svg>
                </a>
            </div>
        </aside>

        <main class="ml-[223px] min-h-screen flex-1 p-2">
            <section class="min-h-[calc(100vh-16px)] rounded-[13px] border border-[#DDE5F0] bg-white px-[42px] py-7">
                {{ $slot }}
            </section>
        </main>
    </div>
</body>
</html>
