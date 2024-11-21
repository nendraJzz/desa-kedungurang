@extends('layouts.app')

@section('content')
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
    @endsection