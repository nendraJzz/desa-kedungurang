<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $posts = Berita::all();

        // Statistik penduduk
        $jumlah_kepala_keluarga = Penduduk::sum('jumlah_kepala_keluarga'); // Total kepala keluarga
        $jumlah_pria = Penduduk::sum('jumlah_pria'); // Total jumlah pria
        $jumlah_wanita = Penduduk::sum('jumlah_wanita'); // Total jumlah wanita
    
        // Kirim semua data ke view
        return view('index', [
            'posts' => $posts,
            'jumlah_kepala_keluarga' => $jumlah_kepala_keluarga,
            'jumlah_pria' => $jumlah_pria,
            'jumlah_wanita' => $jumlah_wanita,
        ]);
    }
    

}
