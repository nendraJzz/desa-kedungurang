@extends('layouts.app')

@section('content')
    <div class="py-10 pt-16 px-5">
        <div class="max-w-7xl mx-auto ">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 space-y-2 sm:space-y-0">
                <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-4">
                    <h1 class="text-3xl sm:text-4xl font-semibold text-black">Dashboard</h1>
                    <span id="time" class="text-sm font-mono text-gray-500"></span>
                </div>
                <span id="date" class="text-sm font-mono text-gray-500 sm:mt-0"></span>
            </div>

            <div class="bg-white overflow-hidden shadow-lg rounded-md">
                <div class="p-6 font-semibold text-gray-800">
                    {{ __("Selamat Datang,") }} 
                    <span class="font-bold text-indigo-700">{{ Auth::user()->name }}!</span> 
                    {{ __("Terima kasih Anda telah masuk sebagai Admin. Kelola sistem ini dengan baik.") }}
                </div>
            </div>
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
    
        updateDateTime();
        
        setInterval(updateDateTime, 1000);
    </script>
@endsection
