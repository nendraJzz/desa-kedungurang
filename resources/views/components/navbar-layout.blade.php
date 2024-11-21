<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Desa Kedungurang Kecamatan Gumelar</title>
  <link rel="icon" type="image/x-icon" href="/img/logo-banyumas.png">
</head>
<body class="font-sans">
  <div class="relative min-h-screen">
    <!-- Navbar -->
    <nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent">
      <div class="container mx-auto">
          <div class="navbar">
              <!-- Navbar Start -->
              <div class="navbar-start flex items-center">
                  <div class="dropdown">
                      <label tabindex="0" class="btn btn-ghost lg:hidden">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                          </svg>
                      </label>
                      <!-- Mobile Menu -->
                      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 w-52 p-2 shadow bg-base-100 rounded-box z-[1]">
                          <li><a href="/visidanmisidesa" class="text-black">Visi & Misi</a></li>
                          <li><a href="/sejarahdesa" class="text-black">Sejarah Desa</a></li>
                          <li><a href="/wilayahdesa" class="text-black">Wilayah Desa</a></li>
                          <li><a href="/beritadesa" class="text-black">Berita Desa</a></li>
                      </ul>
                  </div>
                  <div class="flex items-center space-x-2 lg:space-x-4">
                      <img src="/img/logo-banyumas.png" alt="Logo Desa Kedungurang" class="h-10">
                      <div class="flex flex-col">
                          <span class="text-white text-lg lg:text-xl font-semibold">Desa Kedungurang</span>
                          <span class="hidden sm:block text-white text-sm font-light">Pemerintah Kabupaten Banyumas</span>
                      </div>
                  </div>
              </div>
  
              <!-- Navbar Center -->
              <div class="navbar-center hidden lg:flex">
                  <ul class="menu menu-horizontal text-white text-md px-1">
                      <li><a href="/visidanmisidesa" class="text-white">Visi & Misi</a></li>
                      <li><a href="/sejarahdesa" class="text-white">Sejarah Desa</a></li>
                      <li><a href="/wilayahdesa" class="text-white">Wilayah Desa</a></li>
                      <li><a href="/beritadesa" class="text-white">Berita Desa</a></li>
                  </ul>
              </div>
  
              <!-- Navbar End -->
              <div class="navbar-end px-3 sm:px-5">
                  <button class="btn bg-white text-black">Contact</button>
              </div>
          </div>
      </div>
  </nav>
  

    {{ $slot }}

    <footer class="bg-gray-100 pt-2">
      <div class="relative mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 lg:pt-10">
        <div class="lg:flex lg:items-end lg:justify-between">
          <div>
            <div class="flex items-center justify-center text-black lg:justify-start space-x-2">
              <img src="/img/logo-banyumas.png" class="w-10 h-10" alt="">
              <p class="text-lg font-semibold">Desa Kedungurang</p>
            </div>
    
            <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-500 lg:text-left">
              Website Resmi Desa Kedungurang Kecamatan Gumelar, Pemerintah Kabupaten Banyumas.
            </p>
          </div>
    
          <ul class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:mt-0 lg:justify-end lg:gap-12">
            <li>
              <a class="text-gray-700 transition hover:text-gray-700/75" target="_blank" href="https://lpse.banyumaskab.go.id/eproc4"> LPSE Kab. Banyumas </a>
            </li>
    
            <li>
              <a class="text-gray-700 transition hover:text-gray-700/75" target="_blank"  href="https://siap.banyumaskab.go.id/"> SIAP(Aspirasi & Pengaduan) </a>
            </li>

            <li>
              <a class="text-gray-700 transition hover:text-gray-700/75" target="_blank"  href="https://perizinan.banyumaskab.go.id/"> Sipanjimas </a>
            </li>

          </ul>
        </div>
    
        <p class="mt-12 text-center text-sm text-gray-500 lg:text-right">
          Copyright &copy; 2024. Desa Kedungurang.
        </p>
      </div>
    </footer>
    
  </div>
   
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