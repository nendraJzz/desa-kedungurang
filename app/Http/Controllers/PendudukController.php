<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    
    public function store(Request $request)
    {
    
        // Validasi input
        $validated = $request->validate([
            'jumlah_kepala_keluarga' => 'required|numeric|min:1',
            'jumlah_pria' => 'required|numeric|min:0',
            'jumlah_wanita' => 'required|numeric|min:0',
        ]);
     
        // Simpan data ke database
        Penduduk::create([
            'jumlah_kepala_keluarga' => $validated['jumlah_kepala_keluarga'],
            'jumlah_pria' => $validated['jumlah_pria'],
            'jumlah_wanita' => $validated['jumlah_wanita'],
        ]);
     
        // Redirect atau respon sesuai kebutuhan
        return redirect()->route('admin.statistikpenduduk');
    }
    
    
}
