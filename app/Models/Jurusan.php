<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan'; // ⬅️ WAJIB

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'kompetensi',
        'fasilitas',
        'peluang_karir'
    ];

    protected $casts = [
        'kompetensi' => 'array',
        'fasilitas' => 'array',
        'peluang_karir' => 'array',
    ];
}
