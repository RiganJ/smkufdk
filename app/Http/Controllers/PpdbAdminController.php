<?php

namespace App\Http\Controllers;

use App\Models\PpdbPendaftar;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class PpdbAdminController extends Controller
{
    // Tampilkan semua pendaftar
    public function index()
    {
        $pendaftar = PpdbPendaftar::orderBy('created_at', 'DESC')->get();
        return view('admin.ppdb', compact('pendaftar'));
    }

    // Detail
    public function detail($id)
    {
        $data = PpdbPendaftar::findOrFail($id);
        return view('admin.detail', compact('data'));
    }

    // Update status (Terima / Tolak)
    public function updateStatus(Request $request, $id)
    {
        $data = PpdbPendaftar::findOrFail($id);
        $data->status = $request->status;
        $data->save();

        return back()->with('success', 'Status berhasil diperbarui!');
    }

    // Export Excel
    public function exportExcel()
    {
        return Excel::download(new \App\Exports\PpdbExport, 'data_ppdb.xlsx');
    }

    // Export PDF
    public function exportPDF()
    {
        $pendaftar = PpdbPendaftar::all();
        $pdf = Pdf::loadView('admin.export_pdf', compact('pendaftar'));
        return $pdf->download('data_ppdb.pdf');
    }

    // Edit
    public function edit($id)
    {
        $data = PpdbPendaftar::findOrFail($id);
        return view('admin.ppdb.edit', compact('data'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $data = PpdbPendaftar::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('ppdb.admin.index')->with('success', 'Data berhasil diperbarui!');
    }

    // Delete
    public function destroy($id)
    {
        PpdbPendaftar::findOrFail($id)->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }
public function pengumuman()
{
    $pendaftar = PpdbPendaftar::orderBy('created_at', 'DESC')->get();
    return view('smk.pengumuman', compact('pendaftar'));
}


}
