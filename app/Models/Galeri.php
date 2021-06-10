<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Galeri extends Model
{
    use HasFactory;
    protected $table = 'galeri';
    protected $fillable = ['tgl_galeri', 'judul_galeri', 'gambar_galeri',];
}
