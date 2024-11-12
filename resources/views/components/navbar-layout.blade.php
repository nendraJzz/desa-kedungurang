<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Desa Kedungurang Kecamatan Gumelar</title>
  <link rel="icon" type="image/x-icon" href="img/logo-banyumas.png">
</head>
<body class="font-sans">
  <div class="relative min-h-screen">
    <!-- Background Image dengan Overlay -->
    <div class="fixed inset-0 z-0">
      <div class="absolute inset-0 bg-black opacity-70"></div>
      <img src="/img/kd.jpg" class="w-full h-full object-cover" alt="Background Desa">
    </div>

    <!-- Navbar -->
    <div id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent">
      <div class="navbar container mx-auto">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
              </svg>
            </div>
            {{-- Mobile --}}
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 w-52 p-2 shadow bg-base-100 rounded-box z-[1]">
              <li>
                <details>
                  <summary>Profile Desa</summary>
                  <ul class="p-2 bg-base-100 rounded-box">
                    <li><a href="visidanmisidesa" class="text-black">Visi & Misi</a></li>
                    <li><a href="sejarahdesa" class="text-black">Sejarah Desa</a></li>
                    <li><a href="visidanmisidesa" class="text-black">Wilayah Desa</a></li>
                    <li><a href="visidanmisidesa" class="text-black">Urutan Kepala Desa</a></li>
                  </ul>
                </details>
              </li>
              <li>
                <details>
                  <summary>Lembaga Desa</summary>
                  <ul class="p-2 bg-base-100 rounded-box">
                    <li><a class="text-black">Pemerintah Desa</a></li>
                    <li><a class="text-black">Badan Permusyawaratan Desa</a></li>
                  </ul>
                </details>
              </li>
              <li>
                <details>
                  <summary>Potensi Desa</summary>
                  <ul class="p-2 bg-base-100 rounded-box">
                    <li><a class="text-black">Komoditi Unggulan</a></li>
                    <li><a class="text-black">Produk Desa</a></li>
                  </ul>
                </details>
              </li>
              <li>
                <details>
                  <summary>Menu Publik</summary>
                  <ul class="p-2 bg-base-100 rounded-box">
                    <li><a class="text-black">Berita</a></li>
                    <li><a class="text-black">Informasi</a></li>
                  </ul>
                </details>
              </li>
            </ul>
          </div>
          <a class="btn btn-ghost lg:hidden">
            <img src="/img/logo-banyumas.png" alt="Logo Desa Kedungurang" class="h-10">
          </a>
          <a class="hidden lg:flex items-center">
            <img src="/img/logo-banyumas.png" alt="Logo Desa Kedungurang" class="h-10 mr-2 ml-5">
            <span class="text-xl text-white font-semibold">Desa Kedungurang</span>
          </a>
          <span class="text-white lg:hidden text-lg ml-1">Desa Kedungurang</span>
        </div>
        {{-- Desktop --}}
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal text-white text-md px-1">
            <li>
              <details>
                <summary>Profile Desa</summary>
                <ul class="p-2 bg-base-100 rounded-box">
                  <li><a href="visidanmisidesa" class="text-black">Visi & Misi</a></li>
                  <li><a href="sejarahdesa" class="text-black">Sejarah Desa</a></li>
                  <li><a href="visidanmisidesa" class="text-black">Wilayah Desa</a></li>
                  <li><a href="visidanmisidesa" class="text-black">Urutan Kepala Desa</a></li>
                </ul>
              </details>
            </li>
            <li>
              <details>
                <summary>Lembaga Desa</summary>
                <ul class="p-2 bg-base-100 rounded-box">
                  <li><a class="text-black">Pemerintah Desa</a></li>
                  <li><a class="text-black">Badan Permusyawaratan Desa</a></li>
                </ul>
              </details>
            </li>
            <li>
              <details>
                <summary>Potensi Desa</summary>
                <ul class="p-2 bg-base-100 rounded-box">
                  <li><a class="text-black">Komoditi Unggulan</a></li>
                  <li><a class="text-black">Produk Desa</a></li>
                </ul>
              </details>
            </li>
            <li>
              <details>
                <summary>Menu Publik</summary>
                <ul class="p-2 bg-base-100 rounded-box">
                  <li><a class="text-black">Berita</a></li>
                  <li><a class="text-black">Informasi</a></li>
                </ul>
              </details>
            </li>
          </ul>
        </div>
        <div class="navbar-end px-3 sm:px-5">
          <button class="btn bg-white text-black">Contact</button>
        </div>
      </div>
    </div>

    {{ $slot }}

    
  <script>
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 50) {
        navbar.classList.remove('bg-transparent');
        navbar.classList.add('bg-orange-600');
      } else {
        navbar.classList.remove('bg-orange-600');
        navbar.classList.add('bg-transparent');
      }
    });
  </script>
</body>
</html>