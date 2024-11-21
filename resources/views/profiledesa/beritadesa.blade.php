<x-navbar-layout>
    <div class="relative z-10 flex items-center justify-center min-h-screen" style="background-image: url(/img/kd.jpg)">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        
        <div class="relative text-center text-white px-4">
            <h1 class="text-4xl md:text-5xl font-bold">
                Berita Desa Kedungurang <br> Kecamatan Gumelar
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
    
</x-navbar-layout>