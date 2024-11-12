<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $posts = Berita::all();
        return view('index', compact('posts'));
    }
}
