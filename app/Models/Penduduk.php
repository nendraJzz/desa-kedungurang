<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = ['jumlah_kepala_keluarga', 'jumlah_pria', 'jumlah_wanita'];

}
