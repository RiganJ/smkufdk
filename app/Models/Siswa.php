<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
    'nisn',
    'induk',
    'nama',
    'jk',
    'kompetensi_keahlian',
    'asal_sekolah',
    'no_hp',
    'alamat',
];
}
