<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileDesaController extends Controller
{
    public function visidanmisidesa () {
        return view('profiledesa.visidanmisidesa');
    }
    public function sejarahdesa () {
        return view('profiledesa.sejarahdesa');
    }
}
