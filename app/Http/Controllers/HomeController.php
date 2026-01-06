<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Berita;

class HomeController extends Controller
{
    public function index()
    {
                $guru = Guru::take(5)->get();
        $berita = Berita::latest()->take(3)->get();

        return view('smk.index', compact('guru', 'berita'));
    }

    public function profilGuru()
    {
        $guru = Guru::all();
        return view('smk.profil-guru', compact('guru'));
    }
}
