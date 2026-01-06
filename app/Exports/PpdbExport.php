<?php

namespace App\Exports;

use App\Models\PpdbPendaftar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PpdbExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return PpdbPendaftar::select(
            'nama_lengkap',
            'kompetensi_keahlian',
            'jenis_kelamin',
            'status'
        )->get();
    }

    public function headings(): array
    {
        return [
            'Nama Lengkap',
            'Kompetensi Keahlian',
            'Jenis Kelamin',
            'Status'
        ];
    }
}
