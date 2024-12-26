<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <x-admin.nav href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-admin.nav>
                                <x-admin.nav 
                                    href="/users" 
                                    :active="request()->is('users') || request()->is('users/*') || request()->is('user/*')"
                                >
                                    Users
                                </x-admin.nav>
                                <x-admin.nav href="/courses" :active="request()->is('courses')">Courses</x-admin.nav>
                                <x-admin.nav href="/payments" :active="request()->is('payments')">Payments</x-admin.nav>
                                <x-admin.nav href="/configurations" :active="request()->is('configurations')">Configurations</x-admin.nav>
                                <x-admin.nav href="/reports" :active="request()->is('reports')">Reports</x-admin.nav>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6 space-x-4">
                            <span class="text-white text-sm">Admin User</span>
                            <button type="button" class="relative ml-auto shrink-0 rounded-full p-1 text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                Log Out
                            </button>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <x-admin.nav href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-admin.nav>
                    <x-admin.nav href="/users" :active="request()->is('users')">Users</x-admin.nav>
                    <x-admin.nav href="/courses" :active="request()->is('courses')">Courses</x-admin.nav>
                    <x-admin.nav href="/payments" :active="request()->is('payments')">Payments</x-admin.nav>
                    <x-admin.nav href="/configurations" :active="request()->is('configurations')">Configurations</x-admin.nav>
                    <x-admin.nav href="/reports" :active="request()->is('reports')">Reports</x-admin.nav>
                </div>
                <div class="border-t border-gray-700 pb-3 pt-4">
                    <div class="flex items-center justify-between px-6">
                        <span class="text-white text-sm">Admin User</span>
                        <button type="button" class="relative ml-auto shrink-0 rounded-full p-1 text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            Log Out
                        </button>
                    </div>
                </div>
            </div>
        </nav>

       
        <main>
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $page_heading }}</h1>
                </div>
            </header>

            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-4">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>