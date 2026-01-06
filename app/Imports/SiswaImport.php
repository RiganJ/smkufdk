<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class SiswaImport implements ToModel, WithStartRow
{
    public function startRow(): int
    {
        return 2; // asumsikan header di baris 1
    }

    public function model(array $row)
    {
        // 🔴 SKIP JIKA INI HEADER
        if (
            strtoupper(trim($row[1])) === 'NAMA' ||
            strtoupper(trim($row[2])) === 'NISN'
        ) {
            return null;
        }

        // 🔴 SKIP BARIS KOSONG
        if (empty($row[2]) || empty($row[1])) {
            return null;
        }

        // 🔥 NORMALISASI JK (INI PENTING)
        $jk = strtoupper(trim($row[4]));
        if ($jk === 'L' || $jk === 'LAKI-LAKI' || $jk === 'LAKI LAKI') {
            $jk = 'Laki-laki';
        } elseif ($jk === 'P' || $jk === 'PEREMPUAN') {
            $jk = 'Perempuan';
        } else {
            return null; // jk tidak valid → skip
        }

        return new Siswa([
            'nisn' => trim($row[2]),
            'induk' => $row[3] ?? null,
            'nama' => trim($row[1]),
            'jk' => $jk,
            'kompetensi_keahlian' => $row[5] ?? null,
            'asal_sekolah' => $row[6] ?? null,
            'no_hp' => $row[7] ?? null,
            'alamat' => $row[8] ?? null,
        ]);
    }
}
