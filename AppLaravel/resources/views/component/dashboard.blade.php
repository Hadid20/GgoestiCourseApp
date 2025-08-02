@php
$currentroute = Route::currentRouteName();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce User Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-100 font-sans min-h-screen">
    <div x-data="{ openSidebar: false, activeSection: 'dashboard' }" class="flex flex-col md:flex-row min-h-screen">
        <!-- Sidebar -->
        <aside
            class="bg-white shadow-lg transition-all duration-300 ease-in-out fixed md:static inset-y-0 left-0 z-50 w-20 md:w-64"
            :class="{ 'w-64': openSidebar, 'hidden md:block': !openSidebar }">
            <div class="p-4 flex items-center justify-between border-b">
                <h1 :class="{ 'opacity-100': openSidebar || window.innerWidth >= 768, 'opacity-0 hidden': !openSidebar && window.innerWidth < 768 }"
                    class="text-xl font-bold text-green-600 transition-opacity duration-300">E-Commerce</h1>
                <button @click="openSidebar = !openSidebar" class="md:hidden p-2 rounded-full hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
            <nav class="py-4">
                <ul class="space-y-2" x-data="{ route: '{{ $currentroute }}'}">

                    @yield('link-aside')
                    <hr>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" @click="activeSection = 'dashboard'; openSidebar = false"
                                class="flex items-center space-x-3 px-4 py-2 hover:bg-gray-100 rounded-lg transition-colors w-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0l-2-2m2 2V4a1 1 0 00-1-1h-3a1 1 0 00-1 1z" />
                                </svg>
                                <span
                                    :class="{ 'block opacity-100': openSidebar || window.innerWidth >= 768, 'hidden opacity-0': !openSidebar && window.innerWidth < 768 }"
                                    class="text-gray-700 transition-opacity duration-300">
                                    Logout
                                </span>
                            </button>
                        </form>
                    </li>

                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-4 md:p-6 overflow-y-auto">
            <!-- Mobile Menu Toggle -->
            <div class="md:hidden flex justify-between items-center mb-4">
                <h1 class="text-xl font-bold text-gray-800">E-Commerce</h1>
                <button @click="openSidebar = !openSidebar" class="p-2 rounded-full hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>

            <!-- Dashboard Section -->
            <div x-show="activeSection === 'dashboard'" class="space-y-6">
                <header>
                    <h1 class="text-2xl font-bold text-gray-800">Welcome Back, {{ auth()->user()->name }}</h1>
                    <p class="text-gray-600">{{ auth()->user()->role }}</p>
                </header>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-lg font-semibold text-gray-700">Total Orders</h2>
                        <p class="text-2xl font-bold text-green-600">12</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-lg font-semibold text-gray-700">Pending Orders</h2>
                        <p class="text-2xl font-bold text-yellow-600">3</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-lg font-semibold text-gray-700">Total Spent</h2>
                        <p class="text-2xl font-bold text-blue-600">$500.00</p>
                    </div>
                </div>
                <div>
                    @yield('content')
                </div>
            </div>

        </main>
    </div>
</body>

</html>