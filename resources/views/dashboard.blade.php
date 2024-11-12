<x-app-layout>
    <div class="py-10 pt-24 px-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-4">
                    <h1 class="text-4xl font-semibold text-black">Dashboard</h1>
                    <span id="time" class="text-sm font-mono text-gray-500"></span>
                </div>
                <span id="date" class="text-sm font-mono text-gray-500"></span>
            </div>

            <div class="bg-white overflow-hidden shadow-lg rounded-md">
                <div class="p-6 font-semibold text-gray-800">
                    {{ __("Selamat Datang,") }} <span class="font-bold text-indigo-700">{{ Auth::user()->name }}!</span> {{ __("Terima kasih Anda telah masuk sebagai Admin. Kelola sistem ini dengan baik.") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-2 px-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 relative">
                    <div class="text-xl font-semibold text-gray-900">
                        {{ __("Struktur Perangkat Desa") }}
                    </div>
                    <div class="text-gray-700 mt-4">
                        <p>Struktur perangkat desa meliputi nama lengkap serta jabatan.</p>
                    </div>
                    <div class="pb-16"></div>
                    <div class="absolute bottom-6 right-6">
                        <a href="#" class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-md shadow-md hover:bg-indigo-700 hover:shadow-lg transition duration-300 ease-in-out">
                            Lihat Detail
                        </a>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 relative">
                    <div class="text-xl font-semibold text-gray-900">
                        {{ __("Kelola Berita") }}
                    </div>
                    <div class="mt-4 text-gray-600">
                        Kelola berita terbaru Anda dan tambahkan konten yang lebih menarik untuk pengguna.
                    </div>
                    <div class="pb-16"></div>
                    <div class="absolute bottom-6 right-6">
                        <a href="/kelolaberita" class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-md shadow-md hover:bg-indigo-700 hover:shadow-lg transition duration-300 ease-in-out">
                            Lihat Detail
                        </a>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 relative">
                    <div class="text-xl font-semibold text-gray-900">
                        {{ __("Calendar") }}
                    </div>
                    <div class="mt-4 text-gray-600">
                        Lihat dan kelola acara di kalender Anda dengan lebih mudah.
                    </div>
                    <div class="pb-16"></div>
                    <div class="absolute bottom-6 right-6">
                        <a href="#" class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-md shadow-md hover:bg-indigo-700 hover:shadow-lg transition duration-300 ease-in-out">
                            Lihat Detail
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="flex flex-col pt-24 items-center">
        <h1 class="text-3xl md:text-5xl font-bold pb-10">Struktur Perangkat Desa</h1>
    
        <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 text-center w-72 ">
            <h3 class="text-lg font-semibold">KEPALA DESA</h3>
            <p>Pak Rakum</p>
            <p class="text-sm text-gray-500">NIP. 19800626 199912 1 001</p>
        </div>
    
        <div class="h-8 w-1 bg-black"></div>
    
        <div class="flex flex-col sm:flex-row justify-center space-y-8 sm:space-y-0 sm:space-x-8">
    
            <div class="flex flex-col items-center">
                <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 text-center w-64">
                    <h3 class="text-md font-semibold">SEKRETARIS DESA</h3>
                    <p>Pak Humam Abdi</p>
                    <p class="text-sm text-gray-500">NIP. 19800626 199912 1 001</p>
                </div>
                <div class="h-8 w-1 bg-black"></div>
            </div>
    

            <div class="flex flex-col items-center">
                <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 text-center w-64">
                    <h3 class="text-md font-semibold">SEKRETARIS DESA</h3>
                    <p>Pak Humam Abdi</p>
                    <p class="text-sm text-gray-500">NIP. 19800626 199912 1 001</p>
                </div>
                <div class="h-8 w-1 bg-black"></div>
            </div>
    

            <div class="flex flex-col items-center">
                <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 text-center w-64">
                    <h3 class="text-md font-semibold">SEKRETARIS DESA</h3>
                    <p>Pak Humam Abdi</p>
                    <p class="text-sm text-gray-500">NIP. 19800626 199912 1 001</p>
                </div>
                <div class="h-8 w-1 bg-black"></div>
            </div>
        </div>
    
        <div class="flex flex-col items-center my-8">
            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 text-center w-64">
                <h3 class="text-md font-semibold">SEKRETARIS DESA</h3>
                <p>Pak Humam</p>
                <p class="text-sm text-gray-500">NIP. 19800626 199912 1 001</p>
            </div>
            <div class="h-8 w-1 bg-black"></div>
        </div>
    </div>

        <script>
            function updateDateTime() {
                const date = new Date();
                const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
                const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                
                const dayName = days[date.getDay()];
                const monthName = months[date.getMonth()];
                const day = date.getDate();
                const year = date.getFullYear();
                const hours = String(date.getHours()).padStart(2, '0');
                const minutes = String(date.getMinutes()).padStart(2, '0');
                const seconds = String(date.getSeconds()).padStart(2, '0');
    
                document.getElementById("time").innerText = `${hours}:${minutes}:${seconds}`;
                document.getElementById("date").innerText = `${dayName}, ${day} ${monthName} ${year}`;
            }
    
            setInterval(updateDateTime, 1000);
        </script>
    
</x-app-layout>
