<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpdbPendaftar extends Model
{
    protected $table = 'ppdb_pendaftar';

 protected $fillable = [
    'nama_lengkap',
    'no_kontak',
    'alamat',
    'jenis_kelamin',
    'tempat_lahir',
    'tanggal_lahir',
    'asal_sekolah',
    'nama_orang_tua',
    'no_hp_ortu',
    'kompetensi_keahlian',

    // tambahan
    'jenis_prestasi',
    'bukti_prestasi',
    'jenis_beasiswa',

    'pas_foto',
    'bukti_pembayaran',
    'raport_kelas_3',
    'berkas_pendukung',
];

}
