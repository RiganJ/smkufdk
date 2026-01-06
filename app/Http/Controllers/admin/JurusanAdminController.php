<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\DB; 

class JurusanAdminController extends Controller
{
    public function index()
    {
        return view('admin.jurusan', [
            'testimoni' => Testimoni::latest()->get()
        ]);
    }

    public function storeTestimoni(Request $request)
{
    $filename = Str::uuid().'.'.$request->foto->extension();

    $request->foto->move(public_path('img'), $filename);

    DB::table('testimoni')->insert([
        'nama' => $request->nama,
        'jurusan' => $request->jurusan,
        'isi' => $request->isi,
        'foto' => 'img/'.$filename,
        'created_at' => now()
    ]);

    return back()->with('success', 'Testimoni berhasil ditambahkan');
}

    public function destroyTestimoni($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        Storage::disk('public')->delete($testimoni->foto);
        $testimoni->delete();

        return back()->with('success', 'Testimoni berhasil dihapus');
    }
    public function updateTestimoni(Request $request, $id)
{
    $testimoni = Testimoni::findOrFail($id);

    $data = [
        'nama' => $request->nama,
        'jurusan' => $request->jurusan,
        'isi' => $request->isi,
    ];

    // jika upload foto baru
    if ($request->hasFile('foto')) {
        // hapus foto lama
        if ($testimoni->foto && file_exists(public_path($testimoni->foto))) {
            unlink(public_path($testimoni->foto));
        }

        $filename = Str::uuid().'.'.$request->foto->extension();
        $request->foto->move(public_path('img'), $filename);
        $data['foto'] = 'img/'.$filename;
    }

    $testimoni->update($data);

    return back()->with('success', 'Testimoni berhasil diperbarui');
}

}
