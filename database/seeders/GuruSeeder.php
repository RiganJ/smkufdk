<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        Guru::create([
            'nama_guru' => 'Rina Wijayanti',
            'nip' => '19870521 200901 2 001',
            'mapel' => 'Matematika',
            'telepon' => '081234567890',
        ]);

        Guru::create([
            'nama_guru' => 'Budi Santoso',
            'nip' => '19820317 200501 1 002',
            'mapel' => 'Bahasa Inggris',
            'telepon' => '082134567890',
        ]);
    }
}
