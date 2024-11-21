<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class ProfileDesaController extends Controller
{
    public function visidanmisidesa () {
        return view('profiledesa.visidanmisidesa');
    }
    public function sejarahdesa () {
        return view('profiledesa.sejarahdesa');
    }
    public function wilayahdesa () {
        return view('profiledesa.wilayahdesa');
    }
    public function beritadesa () {
        $posts = Berita::all();
        return view('profiledesa.beritadesa', compact('posts'));
    }
}
