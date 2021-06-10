<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Wisata extends Model
{
    use HasFactory;
    protected $table = 'wisata';
    protected $fillable = ['judul_wisata', 'tgl_wisata', 'info_wisata', 'alamat_wisata', 'jenis_wisata'];
}
