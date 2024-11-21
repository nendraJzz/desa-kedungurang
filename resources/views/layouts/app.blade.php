<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Desa Kedungurang - Admin</title>

    <link rel="icon" type="image/x-icon" href="/img/logo-banyumas.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="bg-gradient-to-b from-indigo-800 to-indigo-900 text-white w-64 fixed top-0 left-0 h-full shadow-lg z-40 md:translate-x-0 -translate-x-full transition-transform">
            <div class="flex items-center justify-between px-4 py-4 border-b border-indigo-700">
                <h2 class="text-xl font-semibold">Admin Panel</h2>
                <button id="closeSidebar" class="block md:hidden">✕</button>
            </div>
            <nav class="mt-4">
                <ul class="space-y-2">
                    <li>
                        <a href="/dashboard" class="flex items-center px-4 py-2 hover:bg-indigo-700 rounded-md">
                            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M3 10l9-7 9 7v10a2 2 0 01-2 2H5a2 2 0 01-2-2V10z"></path>
                                <path d="M9 21V9h6v12"></path>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="/struktur" class="flex items-center px-4 py-2 hover:bg-indigo-700 rounded-md">
                            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M5.121 17.804A8.962 8.962 0 0112 15a8.962 8.962 0 016.879 2.804M16 3.5a4 4 0 01-8 0"></path>
                                <circle cx="12" cy="9" r="4"></circle>
                            </svg>
                            Struktur Perangkat Desa
                        </a>
                    </li>
                    <li>
                        <a href="/kelolaberita" class="flex items-center px-4 py-2 hover:bg-indigo-700 rounded-md">
                            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M19 11l-7-7m0 0L5 11m7-7v18"></path>
                            </svg>
                            Kelola Berita
                        </a>
                    </li>
                    <li>
                        <a href="/statistik" class="flex items-center px-4 py-2 hover:bg-indigo-700 rounded-md">
                            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                            Statistik Penduduk
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col md:ml-64">
            <header class="bg-white fixed w-full shadow px-4 py-4 flex items-center justify-between">
                <button id="openSidebar" class="md:hidden text-indigo-600">☰</button>
                <div class="flex items-center space-x-2">
                    <span class="text-black">Selamat datang, <span class="font-semibold text-indigo-700">{{ Auth::user()->name }}</span></span>
                    <div class="relative">
                        <button id="profileMenuButton" class="flex items-center focus:outline-none">
                            <x-dropwon />
                        </button>
                        <div id="profileMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                            <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profil</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block px-4 py-2 w-full text-left text-gray-700 hover:bg-gray-100">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const openSidebar = document.getElementById('openSidebar');
        const closeSidebar = document.getElementById('closeSidebar');
        const profileMenuButton = document.getElementById('profileMenuButton');
        const profileMenu = document.getElementById('profileMenu');

        openSidebar.addEventListener('click', () => sidebar.classList.remove('-translate-x-full'));
        closeSidebar.addEventListener('click', () => sidebar.classList.add('-translate-x-full'));

        profileMenuButton.addEventListener('click', (e) => {
            e.stopPropagation();
            profileMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', () => profileMenu.classList.add('hidden'));
    </script>
</body>
</html>
