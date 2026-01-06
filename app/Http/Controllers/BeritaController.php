<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    // ================== HALAMAN PUBLIK ==================
    public function index(Request $request)
    {
        $search = $request->search;

        $berita = Berita::when($search, function ($query) use ($search) {
            $query->where('judul', 'like', "%$search%")
                  ->orWhere('isi', 'like', "%$search%");
        })->latest()->paginate(6);

        $guru = Guru::take(5)->get();

        return view('smk.berita', compact('berita', 'guru'));
    }

    public function show($slug)
    {
        $detail = Berita::where('slug', $slug)->firstOrFail();
        $guru = Guru::take(5)->get();
        $berita_lain = Berita::where('slug', '!=', $slug)->latest()->take(3)->get();

        return view('smk.show-berita', compact('detail', 'berita_lain', 'guru'));
    }

    // ================== ADMIN ==================
    public function adminIndex()
    {
        $berita = Berita::latest()->get();
        return view('admin.berita', compact('berita'));
    }

    // ================== STORE ==================
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'thumbnail' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $thumb = null;

        if ($request->hasFile('thumbnail')) {
            $filename = Str::uuid() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('img'), $filename);
            $thumb = 'img/' . $filename;
        }

        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'kategori' => $request->kategori,
            'thumbnail' => $thumb,
            'isi' => $request->isi,
        ]);

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil ditambahkan!');
    }

    // ================== UPDATE ==================
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'thumbnail' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $thumb = $berita->thumbnail;

        if ($request->hasFile('thumbnail')) {

            // hapus file lama
            if ($berita->thumbnail && file_exists(public_path($berita->thumbnail))) {
                unlink(public_path($berita->thumbnail));
            }

            $filename = Str::uuid() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('img'), $filename);
            $thumb = 'img/' . $filename;
        }

        $berita->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'kategori' => $request->kategori,
            'thumbnail' => $thumb,
            'isi' => $request->isi,
        ]);

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil diperbarui!');
    }

    // ================== DELETE ==================
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->thumbnail && file_exists(public_path($berita->thumbnail))) {
            unlink(public_path($berita->thumbnail));
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil dihapus!');
    }
}
