<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark'=> ($appearance ?? 'system') == 'dark'])>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @routes
    @viteReactRefresh
    @vite(['resources/js/app.tsx', "resources/js/pages/{$page['component']}.tsx"])
    @inertiaHead
</head>

<body class="font-sans antialiased bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

                <!-- Left: Logo & School Name -->
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skanic.png') }}" alt="Logo" class="h-10 w-auto">
                    <span class="text-lg font-semibold text-gray-800">SMKN 1 CIOMAS</span>
                </div>

                <!-- Right: Menu (Desktop) -->
                <div class="hidden md:flex space-x-6 items-center relative">
                    <a href="#" class="text-blue-700 font-medium border-b-2 border-blue-700 pb-1">BERANDA</a>
                    <a href="#" class="text-gray-700 hover:text-blue-700 transition">PROFIL</a>
                    <a href="#" class="text-gray-700 hover:text-blue-700 transition">E-PERPUS</a>

                    <!-- Dropdown -->
                    <div class="group relative">
                        <button class="text-gray-700 hover:text-blue-700 transition inline-flex items-center">
                            Program Keahlian
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="absolute left-0 hidden group-hover:block bg-white shadow-lg rounded-lg mt-2 w-64 z-50">
                            <ul class="py-2">
                                <li><a href="#" class="block px-4 py-2 hover:bg-blue-50">Animasi</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-blue-50">Pengembangan Perangkat Lunak dan Gim</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-blue-50">Broadcasting & Perfilman</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-blue-50">Teknik Otomotif</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-blue-50">Teknik Pengelasan</a></li>
                            </ul>
                        </div>
                    </div>

                    <a href="#" class="text-gray-700 hover:text-blue-700 transition">Berita & Artikel</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-blue-700 focus:outline-none">
                        ☰
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-2 bg-white shadow-md">
            <a href="#" class="block text-blue-700 font-medium">BERANDA</a>
            <a href="#" class="block text-gray-700 hover:text-blue-700">PROFIL</a>
            <a href="#" class="block text-gray-700 hover:text-blue-700">E-PERPUS</a>

            <!-- Dropdown in Mobile -->
            <details class="group">
                <summary class="cursor-pointer text-gray-700 hover:text-blue-700">Program Keahlian</summary>
                <ul class="ml-4 mt-1 space-y-1">
                    <li><a href="#" class="block hover:text-blue-700">Animasi</a></li>
                    <li><a href="#" class="block hover:text-blue-700">Pengembangan Perangkat Lunak dan Gim</a></li>
                    <li><a href="#" class="block hover:text-blue-700">Broadcasting & Perfilman</a></li>
                    <li><a href="#" class="block hover:text-blue-700">Teknik Otomotif</a></li>
                    <li><a href="#" class="block hover:text-blue-700">Teknik Pengelasan</a></li>
                </ul>
            </details>

            <a href="#" class="block text-gray-700 hover:text-blue-700">Berita & Artikel</a>
        </div>
    </nav>

    <script>
        // Toggle mobile menu
        document.getElementById('mobile-menu-btn').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <!-- Footer -->
    <footer class="bg-[#123A6B] text-white py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Hubungi Kami -->
            <div>
                <h3 class="text-[#26C0C0] text-lg font-semibold mb-4">Hubungi Kami</h3>
                <p>SMK Negeri 1 Ciomas<br>
                    Jl. Raya Laladon, Kec Ciomas<br>
                    Kab. Bogor, Jawa Barat<br>
                    Phone: +62251 7520933<br>
                    Email: smkn1_ciomas@yahoo.co.id</p>
                <div class="flex space-x-3 mt-4 text-2xl">
                    <a href="#" class="hover:text-[#26C0C0]">&#xf09a;</a>
                    <a href="#" class="hover:text-[#26C0C0]">&#xf099;</a>
                </div>
            </div>

            <!-- Program Keahlian -->
            <div>
                <h3 class="text-[#26C0C0] text-lg font-semibold mb-4">Program Keahlian</h3>
                <ul class="space-y-1">
                    <li>Animasi</li>
                    <li>Pengembangan Perangkat Lunak dan Gim</li>
                    <li>Broadcasting & Perfilman</li>
                    <li>Teknik Otomotif</li>
                    <li>Teknik Pengelasan</li>
                </ul>
            </div>

            <!-- External Link -->
            <div>
                <h3 class="text-[#26C0C0] text-lg font-semibold mb-4">External Link</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="hover:text-[#26C0C0]">SIMPKB</a></li>
                    <li><a href="#" class="hover:text-[#26C0C0]">Disdik Jabar</a></li>
                </ul>
            </div>

            <!-- Peta Lokasi -->
            <div>
                <h3 class="text-[#26C0C0] text-lg font-semibold mb-4">Peta Lokasi</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.000000!2d106.708000!3d-6.580000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzQnMjYuMCJTIDEwNsKwNDInMTEuMCJF!5e0!3m2!1sen!2sid!4v1234567890"
                    width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <a href="#" class="inline-block mt-3 px-4 py-2 border border-[#FFC107] text-[#FFC107] rounded hover:bg-[#FFC107] hover:text-[#123A6B] transition">Petunjuk Menuju Lokasi</a>
            </div>

        </div>
        <p class="text-center text-[#26C0C0] mt-8">Copyright © 2022 SMKN 1 Ciomas</p>
    </footer>

</body>
</html>
