<?php
namespace App\Http\Controllers;

use App\Models\Guru;
class ProfileController extends Controller
{
public function guru()
{
    $guru = Guru::orderBy('nama_guru', 'asc')->get();

    return view('smk.guru', compact('guru'));
}
}