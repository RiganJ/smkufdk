<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru'; // bukan 'gurus'
    protected $fillable = [
        'nama_guru',
        'nip',
        'mapel',
        'telepon',
        'email',
        'foto',
    ];

    // Accessor untuk foto
    public function getFotoUrlAttribute()
    {
        if ($this->foto && file_exists(storage_path('app/public/foto_guru/'.$this->foto))) {
            return asset('storage/foto_guru/'.$this->foto);
        }
        // Fallback icon default
        return null;
    }
}