@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center min-h-screen pt-16 md:pt-24 p-2 sm:p-4 md:p-6">
        <div class="bg-white p-4 rounded-md shadow-md w-full max-w-5xl mx-auto sm:px-4 lg:px-6">
            <h1 class="flex justify-center font-bold mb-4 mt-2 text-xl md:text-4xl">
                Update Data Berita
            </h1>
            <form method="POST" action="{{ route('admin.updateberita', $berita->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <!-- Judul Berita -->
                <div class="mb-4">
                    <label for="name" class="mb-2 block text-sm md:text-lg font-medium text-[#07074D]">
                        Judul Berita
                    </label>
                    <input type="text" id="name" name="nama" value="{{ old('nama', $berita->nama) }}" placeholder="Masukkan Judul Berita"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-4 text-sm font-medium text-[#6B7280] outline-none focus:border-indigo-600 focus:shadow-md" />
                    @error('nama')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Keterangan Berita -->
                <div class="mb-4">
                    <label for="keterangan" class="mb-2 block text-sm md:text-lg font-medium text-[#07074D]">
                        Keterangan Berita
                    </label>
                    <textarea id="keterangan" name="keterangan" placeholder="Masukkan Keterangan Berita"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-4 text-sm font-medium text-[#6B7280] outline-none focus:border-indigo-600 focus:shadow-md" rows="3">{{ old('keterangan', $berita->keterangan) }}</textarea>
                    @error('keterangan')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Upload Gambar -->
                <div class="mb-4">
                    <label for="image" class="mb-2 block text-sm md:text-lg font-medium text-[#07074D]">
                        Masukan Gambar Berita (Opsional)
                    </label>
                    @if($berita->image)
                        <img src="{{ asset($berita->image) }}" alt="Gambar Berita Lama" class="mb-4 max-w-xs rounded-md shadow-md">
                    @endif
                    <input type="file" id="image" class="file-input file-input-bordered w-full max-w-xs" accept="image/png, image/jpeg" name="image" />
                    @error('image')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Update -->
                <div>
                    <button
                        class="hover:shadow-form w-full rounded-md bg-indigo-600 hover:bg-indigo-700 py-2 px-6 text-center text-sm md:text-lg font-semibold text-white outline-none">
                        Update Berita
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endsection
