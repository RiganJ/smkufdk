<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\SiswaExport;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('admin.siswa', compact('siswa'));
    }

    public function show($id)
    {
        $s = Siswa::findOrFail($id);
        return view('admin.siswa_detail', compact('s'));
    }

    public function edit($id)
    {
        $s = Siswa::findOrFail($id);
        return view('admin.siswa_edit', compact('s'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nisn' => 'required',
        'nama' => 'required',
        'jk' => 'required',
        'kompetensi_keahlian' => 'required',
    ]);

    $s = Siswa::findOrFail($id);
    $s->update($request->only([
        'nisn',
        'induk',
        'nama',
        'jk',
        'kompetensi_keahlian',
        'asal_sekolah',
        'no_hp',
        'alamat'
    ]));

    return redirect()->route('siswa.index')
        ->with('success', 'Data siswa berhasil diperbarui');
}


   public function destroy($id)
{
    $siswa = Siswa::findOrFail($id);
    $siswa->delete();

    return redirect()->route('siswa.index')
        ->with('success', 'Data siswa berhasil dihapus');
}

     public function create()
    {
        return view('admin.siswa.create');
    }
    public function store(Request $request)
{
    $request->validate([
        'nisn' => 'required|unique:siswas,nisn',
        'nama' => 'required',
        'jk' => 'required',
        'kompetensi_keahlian' => 'required',
    ]);

    Siswa::create([
        'nisn' => $request->nisn,
        'induk' => $request->induk,
        'nama' => $request->nama,
        'jk' => $request->jk,
        'kompetensi_keahlian' => $request->kompetensi_keahlian,
        'asal_sekolah' => $request->asal_sekolah,
        'no_hp' => $request->no_hp,
        'alamat' => $request->alamat,
    ]);

    return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan!');
}


    public function import(Request $request)
    {
        $request->validate(['file' => 'required|mimes:xlsx,xls']);
        Excel::import(new SiswaImport, $request->file('file'));
        return back()->with('success', 'Data siswa berhasil diimport');
    }

    // Export Excel
    public function exportExcel()
    {
        return Excel::download(new SiswaExport, 'data_siswa.xlsx');
    }

    // Export PDF
    public function exportPDF()
    {
        $siswa = Siswa::all();
        $pdf = Pdf::loadView('admin.pdf', compact('siswa'));
        return $pdf->download('data_siswa.pdf');
    }
   }
