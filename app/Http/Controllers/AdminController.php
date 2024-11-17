<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function statistik () {
        return view('admin.statistikpenduduk');
    }

    public function struktur() {
        // Ambil data statistik penduduk
        $jumlah_kepala_keluarga = Penduduk::sum('jumlah_kepala_keluarga'); // Total jumlah kepala keluarga
        $jumlah_pria = Penduduk::sum('jumlah_pria'); // Total jumlah pria
        $jumlah_wanita = Penduduk::sum('jumlah_wanita'); // Total jumlah wanita
    
        // Kirimkan data tersebut ke view
        return view('admin.strukturperangkatdesa', compact('jumlah_kepala_keluarga', 'jumlah_pria', 'jumlah_wanita'));
    }
    
}
