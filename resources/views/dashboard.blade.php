<x-layouts.app title="Dashboard">
    <div class="space-y-6">
        <h1 class="text-[26px] font-extrabold">Dashboard</h1>

        <div class="grid grid-cols-4 gap-6">
            @foreach ([['Total Sales', '250,000.00', 'M4 17l4-4 4 4 6-9'], ['Total Cost', '50,000.00', 'M12 2 3 7l9 5 9-5-9-5Zm-9 7 9 5 9-5M3 13l9 5 9-5M3 17l9 5 9-5'], ['Total Net Sales', '200,000.00', 'M4 7h16M4 17h16M7 12h10M8 3h8v18H8z'], ['Number of Orders', '893', 'M6 6h15l-2 8H8L6 6Zm0 0 -1-3H2M9 20a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm9 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z']] as $card)
                <div class="ui-card flex h-[112px] items-center justify-between px-3.5">
                    <div>
                        <p class="text-[16px] font-semibold">{{ $card[0] }}</p>
                        <p class="mt-2 text-[28px] font-extrabold tracking-wide">{{ $card[1] }}</p>
                    </div>
                    <span class="grid size-[52px] place-items-center rounded-full bg-[#091E42] text-white">
                        <svg class="size-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="{{ $card[2] }}" />
                        </svg>
                    </span>
                </div>
            @endforeach
        </div>

        <div class="grid grid-cols-[1fr_404px] gap-6">
            <div class="ui-card h-[466px] p-4">
                <h2 class="font-extrabold">Daily Sales</h2>
                <svg viewBox="0 0 1040 370" class="mt-5 h-[380px] w-full">
                    @foreach ([60, 110, 160, 210, 260, 310] as $y)
                        <line x1="96" x2="1018" y1="{{ $y }}" y2="{{ $y }}"
                            stroke="#E7EDF6" />
                    @endforeach
                    @foreach ([80000, 70000, 60000, 50000, 40000, 30000, 20000] as $i => $label)
                        <text x="34" y="{{ 64 + $i * 51 }}" fill="#8CA0BD"
                            font-size="14">{{ number_format($label) }}</text>
                    @endforeach
                    <path
                        d="M102 314 C160 310 210 316 270 314 S360 314 420 313 C450 312 452 302 454 270 C456 232 472 230 492 228 C516 220 522 172 552 112 C585 48 645 115 682 190 C710 246 750 245 788 185 C835 94 858 60 890 72 C920 86 918 172 945 245 C960 287 972 312 1008 314"
                        fill="none" stroke="#0068FF" stroke-width="2.5" />
                    @for ($i = 1; $i <= 31; $i++)
                        <text x="{{ 98 + ($i - 1) * 29.5 }}" y="346" fill="#8CA0BD"
                            font-size="12">{{ $i }}</text>
                    @endfor
                </svg>
            </div>

            <div class="space-y-5">
                <div class="ui-card p-3">
                    <h2 class="font-semibold">Payments</h2>
                    <div class="mt-6 flex h-[22px] overflow-hidden rounded-[5px]">
                        <div class="w-[53%] bg-[#00A51B]"></div>
                        <div class="w-[21%] bg-[#1688F7]"></div>
                        <div class="w-[15%] bg-[#FF812E]"></div>
                        <div class="w-[11%] bg-[#EA3737]"></div>
                    </div>
                    <div class="mt-3 flex gap-4 text-[12px]">
                        @foreach ([['#00A51B', 'Paid'], ['#1688F7', 'Partial'], ['#FF812E', 'Unpaid'], ['#EA3737', 'Overdue']] as $legend)
                            <span class="flex items-center gap-1"><i class="size-2 rounded-full"
                                    style="background: {{ $legend[0] }}"></i>{{ $legend[1] }}</span>
                        @endforeach
                    </div>
                </div>

                <div class="ui-card h-[324px] p-4">
                    <h2 class="font-extrabold">Payment Type</h2>
                    <div class="mt-5 grid place-items-center">
                        <svg viewBox="0 0 210 210" class="size-[210px]">
                            <circle cx="105" cy="105" r="72" fill="none" stroke="#3E86F8"
                                stroke-width="48" stroke-dasharray="250 452" transform="rotate(-90 105 105)" />
                            <circle cx="105" cy="105" r="72" fill="none" stroke="#1E915D"
                                stroke-width="48" stroke-dasharray="170 452" stroke-dashoffset="-258"
                                transform="rotate(-90 105 105)" />
                            <circle cx="105" cy="105" r="72" fill="none" stroke="#30363D"
                                stroke-width="48" stroke-dasharray="38 452" stroke-dashoffset="-435"
                                transform="rotate(-90 105 105)" />
                        </svg>
                    </div>
                    <div class="flex justify-center gap-7 text-[12px]"><span class="flex items-center gap-1"><i
                                class="size-2 rounded-full bg-[#0068FF]"></i>Cash</span><span
                            class="flex items-center gap-1"><i class="size-2 rounded-full bg-[#1E915D]"></i>Bank
                            Transfer</span><span class="flex items-center gap-1"><i
                                class="size-2 rounded-full bg-[#30363D]"></i>Check</span></div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-[1fr_404px] gap-6">
            <div class="ui-card p-4">
                <h2 class="font-extrabold">Top Categories</h2>
                <div class="mt-4 border border-[#DDE5F0] p-5">
                    <div class="grid h-[210px] grid-cols-10 items-end gap-10 border-b border-[#E7EDF6] px-14">
                        @foreach ([168, 150, 132, 118, 118, 94, 74, 62, 38, 30] as $height)
                            <div class="rounded-t-[5px] bg-[#0068FF]" style="height: {{ $height }}px"></div>
                        @endforeach
                    </div>
                    <div class="grid grid-cols-10 gap-6 px-14 pt-2 text-center text-[12px] leading-4 text-[#8CA0BD]">
                        @for ($i = 0; $i < 10; $i++)
                            <span>Category<br>Name</span>
                        @endfor
                    </div>
                </div>
            </div>

            <div class="ui-card p-3">
                <div class="flex items-center justify-between">
                    <h2 class="font-extrabold">Low Stock Product</h2><select class="ui-input w-[42px] px-1">
                        <option>5</option>
                    </select>
                </div>
                <div class="mt-3 space-y-4">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="flex items-center gap-4"><span
                                class="grid size-8 place-items-center rounded border border-[#DDE5F0] text-[#8CA0BD]"><svg
                                    class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path d="M4 5h16v14H4z" />
                                    <path d="m8 13 2-2 4 4 2-2 2 2" />
                                </svg></span><span class="flex-1 text-[14px] font-semibold">Product Name</span><span
                                class="font-semibold">10</span></div>
                    @endfor
                </div>
            </div>
        </div>

        <div class="ui-card overflow-hidden">
            <div class="flex h-12 items-center justify-between border-b border-[#DDE5F0] px-3">
                <h2 class="font-extrabold">Top Selling Product</h2><select class="ui-input w-[42px] px-1">
                    <option>5</option>
                </select>
            </div>
            <table class="w-full text-left text-[13px]">
                <thead class="h-9 bg-[#F8FAFC] text-[11px]">
                    <tr>
                        <th class="px-3">Product Name</th>
                        <th>Quantity Sold</th>
                        <th>Price</th>
                        <th>Total Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        <tr class="h-41 border-t border-[#DDE5F0]">
                            <td class="px-3"><span class="inline-flex items-center gap-3"><span
                                        class="grid size-7 place-items-center rounded border border-[#DDE5F0] text-[#8CA0BD]"><svg
                                            class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <path d="M4 5h16v14H4z" />
                                            <path d="m8 13 2-2 4 4 2-2 2 2" />
                                        </svg></span>Product Name</span></td>
                            <td>1,000</td>
                            <td>₱ 100.00</td>
                            <td>₱ 10,000.00</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
