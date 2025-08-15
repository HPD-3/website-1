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



































            <!-- Footer -->
<footer style="background-color:#123A6B; color:#fff; padding:50px 20px; font-family:sans-serif;">
  <div style="display:flex; flex-wrap:wrap; justify-content:space-between; max-width:1200px; margin:0 auto;">
            <footer style="background-color:#123A6B; color:#fff; padding:50px 20px; font-family:sans-serif;">
                <div style="display:flex; flex-wrap:wrap; justify-content:space-between; max-width:1200px; margin:0 auto;">

    <!-- Hubungi Kami -->
    <div style="flex:1; min-width:200px; margin-bottom:20px;">
      <h3 style="color:#26C0C0;">Hubungi Kami</h3>
      <p>SMK Negeri 1 Ciomas<br>
      Jl. Raya Laladon, Kec Ciomas<br>
      Kab. Bogor, Jawa Barat<br>
      Phone: +62251 7520933<br>
      Email: smkn1_ciomas@yahoo.co.id</p>
      <div style="margin-top:10px;">
        <a href="#" style="color:#fff; text-decoration:none; margin-right:10px; font-size:20px;">&#xf09a;</a> <!-- FB icon -->
        <a href="#" style="color:#fff; text-decoration:none; font-size:20px;">&#xf099;</a> <!-- Twitter icon -->
      </div>
    </div>
                    <!-- Hubungi Kami -->
                    <div style="flex:1; min-width:200px; margin-bottom:20px;">
                    <h3 style="color:#26C0C0;">Hubungi Kami</h3>
                    <p>SMK Negeri 1 Ciomas<br>
                    Jl. Raya Laladon, Kec Ciomas<br>
                    Kab. Bogor, Jawa Barat<br>
                    Phone: +62251 7520933<br>
                    Email: smkn1_ciomas@yahoo.co.id</p>
                    <div style="margin-top:10px;">
                        <a href="#" style="color:#fff; text-decoration:none; margin-right:10px; font-size:20px;">&#xf09a;</a> <!-- FB icon -->
                        <a href="#" style="color:#fff; text-decoration:none; font-size:20px;">&#xf099;</a> <!-- Twitter icon -->
                    </div>
                </div>

    <!-- Program Keahlian -->
    <div style="flex:1; min-width:200px; margin-bottom:20px;">
      <h3 style="color:#26C0C0;">Program Keahlian</h3>
      <ul style="list-style:none; padding:0; line-height:1.8;">
        <li>Animasi</li>
        <li>Pengembangan Perangkat Lunak dan Gim / Rekayasa Perangkat Lunak</li>
        <li>Broadcasting & Perfilman / Produksi & Siaran Program Televisi</li>
        <li>Teknik Otomotif / Teknik Kendaraan Ringan</li>
        <li>Teknik Pengelasan & Fabrikasi Logam / Teknik Pengelasan</li>
      </ul>
    </div>
                        <!-- Program Keahlian -->
                        <div style="flex:1; min-width:200px; margin-bottom:20px;">
                        <h3 style="color:#26C0C0;">Program Keahlian</h3>
                        <ul style="list-style:none; padding:0; line-height:1.8;">
                            <li>Animasi</li>
                            <li>Pengembangan Perangkat Lunak dan Gim / Rekayasa Perangkat Lunak</li>
                            <li>Broadcasting & Perfilman / Produksi & Siaran Program Televisi</li>
                            <li>Teknik Otomotif / Teknik Kendaraan Ringan</li>
                            <li>Teknik Pengelasan & Fabrikasi Logam / Teknik Pengelasan</li>
                        </ul>
                        </div>

    <!-- External Link -->
    <div style="flex:1; min-width:150px; margin-bottom:20px;">
      <h3 style="color:#26C0C0;">External Link</h3>
      <ul style="list-style:none; padding:0; line-height:1.8;">
        <li><a href="#" style="color:#fff; text-decoration:none;">SIMPKB</a></li>
        <li><a href="#" style="color:#fff; text-decoration:none;">Disdik Jabar</a></li>
      </ul>
    </div>
                <!-- External Link -->
                <div style="flex:1; min-width:150px; margin-bottom:20px;">
                <h3 style="color:#26C0C0;">External Link</h3>
                <ul style="list-style:none; padding:0; line-height:1.8;">
                    <li><a href="#" style="color:#fff; text-decoration:none;">SIMPKB</a></li>
                    <li><a href="#" style="color:#fff; text-decoration:none;">Disdik Jabar</a></li>
                </ul>
                </div>

    <!-- Peta Lokasi -->
    <div style="flex:1; min-width:200px; margin-bottom:20px;">
      <h3 style="color:#26C0C0;">Peta Lokasi</h3>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.000000!2d106.708000!3d-6.580000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzQnMjYuMCJTIDEwNsKwNDInMTEuMCJF!5e0!3m2!1sen!2sid!4v1234567890"
        width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <a href="#" style="display:inline-block; margin-top:10px; padding:5px 10px; background-color:#123A6B; border:1px solid #FFC107; color:#FFC107; text-decoration:none; border-radius:4px;">Petunjuk Menuju Lokasi</a>
    </div>
                    <!-- Peta Lokasi -->
                    <div style="flex:1; min-width:200px; margin-bottom:20px;">
                    <h3 style="color:#26C0C0;">Peta Lokasi</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.000000!2d106.708000!3d-6.580000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzQnMjYuMCJTIDEwNsKwNDInMTEuMCJF!5e0!3m2!1sen!2sid!4v1234567890"
                        width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <a href="#" style="display:inline-block; margin-top:10px; padding:5px 10px; background-color:#123A6B; border:1px solid #FFC107; color:#FFC107; text-decoration:none; border-radius:4px;">Petunjuk Menuju Lokasi</a>
                    </div>

  </div>

  <p style="text-align:center; margin-top:30px; color:#26C0C0;">Copyright © 2022 SMKN 1 Ciomas</p>
</footer>

    </div>
            </div>

            <p style="text-align:center; margin-top:30px; color:#26C0C0;">Copyright © 2022 SMKN 1 Ciomas</p>
            </footer>
    </body>
</html>
