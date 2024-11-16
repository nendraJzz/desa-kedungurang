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
    
        // Tambahkan flash message
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
    
    public function update(Request $request, $id)
    {
        $data = Berita::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('admin.kelolaberita');
    }

}
