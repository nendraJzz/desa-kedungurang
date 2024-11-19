<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function show($id) {
        return view("bacaberita", ['data' => Berita::find($id)]);
    }

    public function kelolaberita () {
        $posts = Berita::all();
        return view('admin.kelolaberita', compact('posts'));
    }

    public function edit($id)
    {
    $berita = Berita::findOrFail($id);

    return view('admin.editberita', compact('berita'));
    }


    public function addberita(Request $request) {
        $request->validate([
            'nama' => ['required'],
            'keterangan' => ['required'],
            'image' => ['required'],
        ]);
    
        $imagePath = $this->storeImage($request->file('image'));
    
        Berita::create([
            'user_id' => Auth::id(),
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'image' => $imagePath
        ]);
    
        return redirect()->route('admin.kelolaberita')->with('success', 'Berita berhasil ditambahkan!');
    }
    
    public function storeImage ($file): string {
        $fileName = rand() . $file->getClientOriginalName();
        $file->move('uploads', $fileName);
        return "/uploads/" . $fileName;
    }

    public function delete($id)
    {
        $data = Berita::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.kelolaberita')->with('success', 'Berita berhasil dihapus!');
    }
    
    public function updateberita(Request $request, $id)
    {
        $request->validate([
            'nama' => ['required'],
            'keterangan' => ['required'],
            'image' => ['nullable', 'image'], // Gambar tidak wajib diunggah
        ]);
    
        $berita = Berita::findOrFail($id);
    
        // Update data
        $berita->nama = $request->nama;
        $berita->keterangan = $request->keterangan;
    
        // Cek jika ada gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($berita->image && file_exists(public_path($berita->image))) {
                unlink(public_path($berita->image));
            }
    
            // Simpan gambar baru
            $imagePath = $this->storeImage($request->file('image'));
            $berita->image = $imagePath;
        }
    
        // Simpan perubahan
        $berita->save();
    
        return redirect()->route('admin.kelolaberita')->with('success', 'Berita berhasil diperbarui!');
    }
    

}
