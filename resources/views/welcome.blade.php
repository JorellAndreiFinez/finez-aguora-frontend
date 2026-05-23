<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Aguora Login</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/aguora-logo.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#F7F8FA] font-sans text-[#303030] antialiased">
    <main
        class="flex min-h-screen w-full items-center justify-center overflow-x-hidden px-5 py-10 sm:px-8 lg:items-start lg:pt-[126px]">
        <section
            class="grid min-w-0 w-full max-w-[calc(100vw-40px)] overflow-hidden rounded-[14px] border border-[#D9E1EC] bg-white p-2 shadow-[0_18px_55px_rgba(9,30,66,0.04)] lg:min-h-[752px] lg:max-w-[1184px] lg:grid-cols-[1fr_1.18fr]">
            <div class="flex min-h-[610px] min-w-0 flex-col px-6 py-8 sm:px-14 lg:px-[58px]">
                <a href="{{ url('/') }}" aria-label="Aguora home" class="block w-fit">
                    <img src="{{ asset('assets/aguora-logo.png') }}" alt="Aguora"
                        class="h-auto w-[50px] object-contain">
                </a>

                <div
                    class="mx-auto flex min-w-0 w-full max-w-[calc(100vw-88px)] flex-1 flex-col justify-center pb-9 sm:max-w-[394px]">
                    <div class="mb-9 text-center">
                        <h1 class="text-[25px] font-extrabold leading-tight text-[#303030]">Sign in to Aguora</h1>
                        <p class="mt-2 text-[14px] font-medium leading-5 text-[#B7B7B7]">Welcome back! Enter your
                            credentials below</p>
                    </div>

                    <form method="GET" action="{{ route('dashboard') }}" class="min-w-0 space-y-[25px]">
                        <div>
                            <label for="username"
                                class="mb-2.5 block text-[14px] font-bold text-[#303030]">Username</label>
                            <div class="relative">
                                <span
                                    class="pointer-events-none absolute left-3.5 top-1/2 flex size-5 -translate-y-1/2 items-center justify-center text-[#989DA3]">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" class="size-5" fill="none"
                                        stroke="currentColor" stroke-width="2">
                                        <path d="M20 21a8 8 0 0 0-16 0" />
                                        <circle cx="12" cy="7" r="4" />
                                    </svg>
                                </span>
                                <input id="username" name="username" type="text" autocomplete="username"
                                    placeholder="Enter your username"
                                    class="h-[43px] min-w-0 w-full rounded-[5px] border border-[#D7DCE2] bg-white pl-10 pr-4 text-[14px] font-medium text-[#303030] outline-none transition placeholder:text-[#92979D] focus:border-[#091E42] focus:ring-4 focus:ring-[#091E42]/10">
                            </div>
                        </div>

                        <div>
                            <label for="password"
                                class="mb-2.5 block text-[14px] font-bold text-[#303030]">Password</label>
                            <div class="relative">
                                <span
                                    class="pointer-events-none absolute left-3.5 top-1/2 flex size-5 -translate-y-1/2 items-center justify-center text-[#989DA3]">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" class="size-5" fill="none"
                                        stroke="currentColor" stroke-width="2">
                                        <rect width="16" height="11" x="4" y="11" rx="2" />
                                        <path d="M8 11V7a4 4 0 0 1 8 0v4" />
                                    </svg>
                                </span>
                                <input id="password" name="password" type="password" autocomplete="current-password"
                                    placeholder="Enter password"
                                    class="h-[43px] min-w-0 w-full rounded-[5px] border border-[#D7DCE2] bg-white pl-10 pr-4 text-[14px] font-medium text-[#303030] outline-none transition placeholder:text-[#92979D] focus:border-[#091E42] focus:ring-4 focus:ring-[#091E42]/10">
                            </div>
                        </div>

                        <button type="submit"
                            class="mt-9 flex h-[48px] w-full items-center justify-center rounded-[5px] bg-[#091E42] text-[16px] font-extrabold text-white transition hover:bg-[#0C2B5B] focus:outline-none focus:ring-4 focus:ring-[#091E42]/20">
                            Sign in
                        </button>
                    </form>
                </div>
            </div>

            <div class="hidden min-h-[712px] items-center justify-center rounded-[13px] bg-[#000842] px-10 lg:flex">
                <img src="{{ asset('assets/login-illustration.png') }}" alt=""
                    class="w-full max-w-135 object-contain">
            </div>
        </section>
    </main>
</body>

</html>
