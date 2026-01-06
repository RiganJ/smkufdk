<?php

namespace App\Http\Controllers;

use App\Models\PpdbPendaftar;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    // Tampilkan form
    public function index()
    {
        return view('smk.daftar');
    }

    // Proses submit
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'no_kontak' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'asal_sekolah' => 'required',
            'nama_orang_tua' => 'required',
            'no_hp_ortu' => 'required',
            'kompetensi_keahlian' => 'required',

            // wajib
            'pas_foto' => 'required|image|max:102400',
            'bukti_pembayaran' => 'required|image|max:102400',

            // opsional
            'bukti_prestasi' => 'nullable|mimes:jpg,png,jpeg,pdf|max:204800',
            'jenis_beasiswa' => 'nullable|string',
            'jenis_prestasi' => 'nullable|string',

            // berkas pendukung beasiswa (opsional)
            'berkas_pendukung' => 'nullable|mimes:jpg,png,jpeg,pdf|max:204800',

            // RAPORT KELAS 3 (opsional)
            'raport_kelas_3' => 'nullable|mimes:jpg,png,jpeg,pdf|max:204800',
        ]);

        // Wajib
        $pasFoto = $request->file('pas_foto')->store('ppdb/foto', 'public');
        $buktiBayar = $request->file('bukti_pembayaran')->store('ppdb/bukti', 'public');

        // Opsional: upload bukti prestasi
        $buktiPrestasi = null;
        if ($request->hasFile('bukti_prestasi')) {
            $buktiPrestasi = $request->file('bukti_prestasi')->store('ppdb/prestasi', 'public');
        }

        // Opsional: upload BERKAS PENDUKUNG BEASISWA
        $berkasBeasiswa = null;
        if ($request->hasFile('berkas_pendukung')) {
            $berkasBeasiswa = $request->file('berkas_pendukung')->store('ppdb/beasiswa', 'public');
        }

        // Opsional: upload raport kelas 3
        $raportKelas3 = null;
        if ($request->hasFile('raport_kelas_3')) {
            $raportKelas3 = $request->file('raport_kelas_3')->store('ppdb/raport', 'public');
        }

        // Insert data ke database
        PpdbPendaftar::create([
            'nama_lengkap' => $request->nama_lengkap,
            'no_kontak' => $request->no_kontak,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'asal_sekolah' => $request->asal_sekolah,
            'nama_orang_tua' => $request->nama_orang_tua,
            'no_hp_ortu' => $request->no_hp_ortu,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,

            // tambahan
            'jenis_prestasi' => $request->jenis_prestasi,
            'bukti_prestasi' => $buktiPrestasi,

            // beasiswa
            'jenis_beasiswa' => $request->jenis_beasiswa,
            'berkas_pendukung' => $berkasBeasiswa,

            // raport
            'raport_kelas_3' => $raportKelas3,

            // wajib
            'pas_foto' => $pasFoto,
            'bukti_pembayaran' => $buktiBayar,
        ]);

        return redirect()->back()->with('success', 'Pendaftaran berhasil dikirim!');
    }

    public function cekPengumuman(Request $request)
    {
        $hasil = PpdbPendaftar::where('no_pendaftaran', $request->no_pendaftaran)->first();
        return view('smk.pengumuman', compact('hasil'));
    }

    public function pengumuman()
    {
        $pendaftar = PpdbPendaftar::orderBy('created_at', 'DESC')->get();
        return view('smk.pengumuman', compact('pendaftar'));
    }
}
