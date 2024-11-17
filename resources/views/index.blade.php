<x-navbar-layout>
  <div class="relative z-10 flex items-center justify-center min-h-screen" style="background-image: url(/img/kd.jpg)">
    <div class="absolute inset-0 bg-black opacity-70"></div>
    
    <div class="relative text-center text-white px-4">
        <h1 class="text-4xl md:text-5xl font-bold">
            Selamat Datang di Desa Kedungurang <br> Kecamatan Gumelar
        </h1>
        <p class="text-lg md:text-2xl font-semibold mt-4">
            Pemerintah Kabupaten Banyumas
        </p>
    </div>
</div>

    
    <div class="relative z-10 bg-white">
      <div class="container mx-auto p-4 md:p-8">

        <h1 class="font-bold text-3xl md:text-4xl pb-2 pt-5 text-black">Berita Desa</h1>
        <p class="text-lg text-gray-500 pb-4">Menyajikan informasi terbaru tentang peristiwa, berita terkini dari Desa Kedungurang</p>
        <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
          

          {{-- CRUD --}}
          @foreach ($posts as $post)
          <a href="/berita/{{ $post->id }}" class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg">
            <img
              alt=""
              src="{{ $post->image }}"
              class="h-56 w-full object-cover sm:h-48 md:h-56 lg:h-64"
            />

            <div class="bg-white p-4 sm:p-6">
              <time datetime="2022-10-10" class="block text-xs text-gray-500">{{ Carbon\Carbon::parse($post->created_at)->format('jS M Y'); }}</time>

              <h3 class="mt-0.5 text-lg text-gray-900 text-left">{{ $post->nama }}</h3>

              <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                {{ $post->keterangan }}
              </p>
              <div class="flex items-center pt-2 space-x-2">
                <x-svg-profile class="w-6 h-6" />
                <p class="text-sm/relaxed text-gray-800">{{ \App\Models\User::find($post->user_id)->name }}</p>
              </div>  
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>
    </div>
  </div>

  {{--  --}}
  <div class="bg-gray-50 py-16 pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-black md:text-4xl">
                Statistik Data Penduduk Desa Kedungurang
            </h2>
            <p class="mt-3 text-xl text-gray-500 sm:mt-4">
              Jumlah penduduk Desa Kedungurang sampai pada tahun 2023 sebanyak 6.838 jiwa, dengan rincian sebagai berikut
          </p>
        </div>
    </div>
    <div class="mt-10 pb-1">
      <div class="relative">
          <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
          <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="max-w-4xl mx-auto">
                  <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                      <!-- Jumlah Kepala Keluarga -->
                      <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                          <dt class="order-2 mt-2 text-lg leading-6 font-medium text-black">
                              Jumlah Kepala Keluarga (KK)
                          </dt>
                          <dd class="order-1 text-4xl font-bold text-black">
                              {{ $jumlah_kepala_keluarga ?? 0 }} KK
                          </dd>
                      </div>
                      <!-- Jumlah Pria -->
                      <div class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                          <dt class="order-2 mt-2 text-lg leading-6 font-medium text-black">
                              Pria
                          </dt>
                          <dd class="order-1 text-4xl font-bold text-black">
                              {{ $jumlah_pria ?? 0 }} Jiwa
                          </dd>
                      </div>
                      <!-- Jumlah Wanita -->
                      <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                          <dt class="order-2 mt-2 text-lg leading-6 font-medium text-black">
                              Wanita
                          </dt>
                          <dd class="order-1 text-4xl font-bold text-black">
                              {{ $jumlah_wanita ?? 0 }} Jiwa
                          </dd>
                      </div>
                  </dl>
              </div>
          </div>
      </div>
  </div>
  

<div class="flex flex-col items-center pb-16 md:pt-12 justify-center min-h-screen px-4">
  <h2 class="text-3xl font-bold text-black md:text-4xl text-center mb-5">
    Peta Lokasi Desa Kedungurang
  </h2>
  
  <div class="w-full max-w-3xl">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31654.156707089856!2d109.00433121494325!3d-7.379700017661495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6562967c9f1ca5%3A0x5027a76e3550100!2sKedungurang%2C%20Kec.%20Gumelar%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1731635920247!5m2!1sid!2sid" 
      width="100%" 
      height="450" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

</x-navbar-layout>