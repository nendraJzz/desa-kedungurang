@extends('layouts.app')

@section('content')
    @if(session('success'))
    <div id="success-alert" class="fixed inset-0 flex justify-center items-center z-50 opacity-0 scale-90 transition-all duration-500 ease-out">
        <div class="bg-indigo-600 text-white px-6 py-4 rounded-md shadow-lg transform opacity-0 scale-90 w-full max-w-sm sm:max-w-md mx-auto transition-all duration-500 ease-out" role="alert">
            <strong class="font-bold">Berhasil!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    </div>
    @endif


    <div class="flex items-center justify-center py-8 sm:py-12">
        <div class="bg-white p-6 rounded-md shadow-lg w-full max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="flex justify-center font-bold mb-6 text-2xl md:text-4xl">Tambahkan Berita Terkini</h1>
            <form method="POST" action="/addberita" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Judul Berita
                    </label>
                    <input type="text" id="name" name="nama" placeholder="Masukkan Judul Berita"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-indigo-600  focus:shadow-md" />
                </div>
    
                <div class="mb-5">
                    <label for="keterangan" class="mb-3 block text-base font-medium text-[#07074D]">
                        Keterangan Berita
                    </label>
                    <textarea id="keterangan" name="keterangan" placeholder="Masukkan Keterangan Berita"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-indigo-600 focus:shadow-md" rows="4"></textarea>
                </div>
    
                <div class="mb-5">
                    <label for="image" class="mb-3 block text-base font-medium text-[#07074D]">
                        Masukkan Gambar Berita
                    </label>
                    <input type="file" id="image" class="file-input file-input-bordered w-full max-w-xs" accept="image/png,image/jpeg" name="image" />
                </div>
    
                <div>
                    <button class="hover:shadow-form w-full rounded-md bg-indigo-600 hover:bg-indigo-700 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Tambah Berita
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="flex items-center justify-center pt-8 sm:pt-20">
        <div class="bg-white p-6 rounded-md shadow-lg w-full max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="flex justify-center font-bold mb-6 text-2xl md:text-4xl">List Semua Berita</h1>
            <div class="overflow-x-auto">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th>Gambar Berita</th>
                            <th>Judul Berita</th>
                            <th>Ket. Berita</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle h-12 w-12">
                                            <img src="{{ $post->image }}" alt="Avatar Tailwind CSS Component" />
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $post->nama }}</td>
                            <td>{{ $post->keterangan }}</td>
                            <td>
                                <div class="flex flex-col sm:flex-row sm:space-x-2 space-y-2 sm:space-y-0">
                                    <a href="{{ route('admin.editberita', $post->id) }}" class="btn bg-yellow-500 hover:bg-yellow-600 text-white btn-xs w-full sm:w-auto">Edit</a>
                                    <a href="delete/{{ $post->id }}" class="btn bg-red-500 hover:bg-red-600 text-white btn-xs w-full sm:w-auto">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const alert = document.getElementById('success-alert');
            if (alert) {
                const alertBox = alert.querySelector('div');
                alert.classList.remove('opacity-0', 'scale-90');
                alert.classList.add('opacity-100', 'scale-100');
                alertBox.classList.remove('opacity-0', 'scale-90');
                alertBox.classList.add('opacity-100', 'scale-100');
                
                setTimeout(() => {
                    alert.classList.add('opacity-0', 'scale-90');
                    alert.classList.remove('opacity-100', 'scale-100');
                    alertBox.classList.add('opacity-0', 'scale-90');
                    alertBox.classList.remove('opacity-100', 'scale-100');
                }, 5000); 
            }
        });
    </script>
@endsection
