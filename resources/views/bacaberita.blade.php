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

  
  <div class="relative z-10 bg-white pt-10 pb-10">
    <div class="container mx-auto p-4 md:p-8">
        <div class="relative z-10 bg-white shadow-2xl rounded-xl">
            <div class="container mx-auto p-4 md:p-8">
                <div class="mb-8">
                    <img src="{{ $data->image }}" alt="Gambar Berita" class="w-full h-auto rounded-lg shadow-md">
                </div>
                <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $data->nama }}</h1>      
                <p class="text-sm text-gray-600 mb-6">{{ Carbon\Carbon::parse($data->created_at)->format('jS M Y'); }} | {{ \App\Models\User::find($data->user_id)->name }}</p>
                <div class="prose max-w-none">
                    {{ $data->keterangan }}
                </div>
            </div>
        </div>
    </div>
  </div>
  
  
</x-navbar-layout>