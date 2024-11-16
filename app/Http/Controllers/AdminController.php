<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function statistik () {
        return view('admin.statistikpenduduk');
    }

    public function struktur () {
        return view('admin.strukturperangkatdesa');
    }
}
