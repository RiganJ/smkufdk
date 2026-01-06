<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Guru;
use App\Models\Berita;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\PpdbPendaftar;

class AdminController extends Controller
{
    // ============================
    // AUTH & ADMIN DASHBOARD
    // ============================

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function dashboard()
{
    $totalGuru     = Guru::count();
    $totalSiswa    = Siswa::count();
    $totalJurusan  = Jurusan::count();
    $totalPendaftar = PpdbPendaftar::count();

    return view('admin.dashboard', compact(
        'totalGuru',
        'totalSiswa',
        'totalJurusan',
        'totalPendaftar'
    ));
}

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }

    // ============================
    // CRUD GURU
    // ============================

    public function guru()
    {
        $guru = Guru::all();
        return view('admin.guru', compact('guru'));
    }

    public function tambahGuru(Request $request)
{
    $data = [
        'nama_guru' => $request->nama_guru,
        'nip' => $request->nip,
        'mapel' => $request->mapel,
        'telepon' => $request->telepon,
    ];

    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('guru'), $filename); // simpan langsung di public/guru
        $data['foto'] = $filename;
    }

    Guru::create($data);

    return redirect()->route('admin.guru')->with('success', 'Data guru berhasil ditambahkan!');
}



    public function editGuru(Request $request, $id)
{
    $guru = Guru::findOrFail($id);

    $data = [
        'nama_guru' => $request->nama_guru,
        'nip' => $request->nip,
        'mapel' => $request->mapel,
        'telepon' => $request->telepon,
    ];

    if ($request->hasFile('foto')) {
        // Hapus foto lama jika ada
        if ($guru->foto && file_exists(public_path('guru/'.$guru->foto))) {
            unlink(public_path('guru/'.$guru->foto));
        }

        // Simpan foto baru
        $file = $request->file('foto');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('guru'), $filename);
        $data['foto'] = $filename;
    }

    $guru->update($data);

    return redirect()->route('admin.guru')->with('success', 'Data guru berhasil diperbarui!');
}


   public function hapusGuru($id)
{
    Guru::findOrFail($id)->delete();

    return redirect()->route('admin.guru')
        ->with('success', 'Data guru berhasil dihapus!');
}


    // ============================
    // HALAMAN PUBLIK (USER)
    // ============================

    // Halaman utama (Landing Page)
   public function index()
    {
        $guru = Guru::take(11)->get();           // 5 guru terbaru
        $berita = Berita::latest()->take(3)->get(); // 3 berita terbaru
        $jumlahGuru = Guru::count();            // total guru
        $jumlahSiswa = Siswa::count();          // total siswa

        // Kirim semua variabel ke view
        return view('smk.index', compact('guru', 'berita', 'jumlahGuru', 'jumlahSiswa'));
    }

    // Halaman daftar guru publik
    public function tampilPublik()
    {
        $guru = Guru::all();
        return view('smk.profil-guru', compact('guru'));
    }
}
