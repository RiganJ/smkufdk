<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;  
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Halaman Jurusan Farmasi
     */
    public function farmasi()
    {
        $testimoni = Testimoni::where('jurusan', 'FARMASI')
                        ->latest()
                        ->take(5)   // Ambil 5 data terbaru
                        ->get();

        return view('smk.farmasi', [
            'title' => 'Jurusan Farmasi',
            'testimoni' => $testimoni
        ]);
    }

    public function keperawatan()
    {
        $testimoni = Testimoni::where('jurusan', 'KEPERAWATAN')
                        ->latest()
                        ->take(5)
                        ->get();

        return view('smk.keperawatan', [
            'title' => 'Jurusan Keperawatan',
            'testimoni' => $testimoni
        ]);
    }

    public function caregiver()
    {
        $testimoni = Testimoni::where('jurusan', 'CAREGIVER')
                        ->latest()
                        ->take(5)
                        ->get();

        return view('smk.caregiver', [
            'title' => 'Jurusan Caregiver',
            'testimoni' => $testimoni
        ]);
    }
}
