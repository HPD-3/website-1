<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark' => ($appearance ?? 'system') == 'dark'])>
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
    <body class="font-sans antialiased">
        <!-- Navbar -->
             <nav class="navbar">
                <div class="navbar-left">
                <img src="{{ asset('images/skanic.png') }}" alt="Logo">
                <div class="school-name">SMKN 1 CIOMAS</div>
                </div>
                <div class="navbar-right">
                <a href="#" class="active">BERANDA</a>
                <a href="#">PROFIL</a>
                <a href="#">E-PERPUS</a>
                <a href="#">Program Keahlian</a>
                <a href="#">Berita & Artikel</a>
                </div>
            </nav>

    <div class="wrapper">
        <!-- Konten utama halaman -->
        <div class="content">
            <h1>Selamat Datang di SMKN 1 Ciomas</h1>
            <p>Isi konten halaman di sini...</p>
        </div>

            <!-- Footer -->
                    <footer>
                        <div class="footer-container">

                            <!-- Hubungi Kami -->
                        <div class="footer-section">
                                <h3>Hubungi Kami</h3>
                                <p>
                                    SMK Negeri 1 Ciomas<br>
                                    Jl. Raya Laladon, Kec Ciomas<br>
                                    Kab. Bogor, Jawa Barat<br>
                                    Phone: +62251 7520933<br>
                                    Email: smkn1_ciomas@yahoo.co.id
                                </p>
                                <div class="social">
                                    <a href="#">&#xf09a;</a> <!-- FB icon -->
                                    <a href="#">&#xf099;</a> <!-- Twitter icon -->
                                </div>
                            </div>

                            <!-- Program Keahlian -->
                            <div class="footer-section">
                                <h3>Program Keahlian</h3>
                                <ul>
                                    <li>Animasi</li>
                                    <li>Pengembangan Perangkat Lunak dan Gim / Rekayasa Perangkat Lunak</li>
                                    <li>Broadcasting & Perfilman / Produksi & Siaran Program Televisi</li>
                                    <li>Teknik Otomotif / Teknik Kendaraan Ringan</li>
                                    <li>Teknik Pengelasan & Fabrikasi Logam / Teknik Pengelasan</li>
                                </ul>
                            </div>

                            <!-- External Link -->
                            <div class="footer-section">
                                <h3>External Link</h3>
                                <ul>
                                    <li><a href="#">SIMPKB</a></li>
                                    <li><a href="#">Disdik Jabar</a></li>
                                </ul>
                            </div>

                            <!-- Peta Lokasi -->
                            <div class="footer-section">
                                <h3>Peta Lokasi</h3>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.000000!2d106.708000!3d-6.580000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzQnMjYuMCJTIDEwNsKwNDInMTEuMCJF!5e0!3m2!1sen!2sid!4v1234567890" width="100%" height="150" allowfullscreen="" loading="lazy"></iframe>
                                <a href="#" class="map-button">Petunjuk Menuju Lokasi</a>
                            </div>

                             <p class="copyright">Copyright © 2022 SMKN 1 Ciomas</p>
                             </div>
        </footer>
    </div>
    </body>
</html>
