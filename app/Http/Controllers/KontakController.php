<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Tampilkan halaman kontak
     */

    public function index()
    {
        return view('smk.kontak', [
            'title' => '
            Kontak Kami',
        ]);
    }

    /**
     * Proses kirim pesan kontak
     */
    public function kirim(Request $request)
    {
        $request->validate([
            'nama'   => 'required|string|max:100',
            'email'  => 'required|email',
            'hp'     => 'nullable|string|max:20',
            'pesan'  => 'required|string|max:500',
        ]);

        /**
         * NANTI BISA:
         * - simpan ke database
         * - kirim email
         * - kirim ke WhatsApp API
         */

        return redirect()
            ->route('kontak')
            ->with('success', 'Pesan berhasil dikirim. Terima kasih telah menghubungi kami.');
    }
}
