<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\PpdbAdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\Admin\JurusanAdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


Route::get('/home', function () {
    return view('smk.index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/about', function () {
    return view('smk.about');
});
Route::get('/visi-misi', function () {
    return view('smk.visi-misi');
});
Route::get('/struktur', function () {
    return view('smk.struktur');
});
Route::get('/kepala', function () {
    return view('smk.kepala');
});
Route::get('/ppdb', function () {
    return view('smk.ppdb');
});
Route::get('/daftar', [PpdbController::class, 'index'])
        ->name('smk.daftar');

    // PROSES SIMPAN PENDAFTARAN
    Route::post('/daftar', [PpdbController::class, 'store'])
        ->name('smk.daftar.store');
Route::get('/smk/farmasi', [JurusanController::class, 'farmasi'])
    ->name('smk.farmasi');
    Route::get('/smk/keperawatan', [JurusanController::class, 'keperawatan'])
    ->name('smk.keperawatan');
    Route::get('/smk/caregiver', [JurusanController::class, 'caregiver'])
    ->name('smk.keperawatan');
     Route::get('/smk/kontak', [KontakController::class, 'index'])
    ->name('smk.kontak');

Route::get('/guru-staf', [ProfileController::class, 'guru'])
    ->name('smk.guru');


Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'processLogin'])->name('admin.login.process');

Route::get('/admin/register', [AuthController::class, 'showRegister'])->name('admin.register');
Route::post('/admin/register', [AuthController::class, 'register'])->name('admin.register.process');

Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin/captcha/refresh', function () {
    session(['captcha' => substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZ23456789'), 0, 5)]);
    return back();
})->name('admin.captcha.refresh');


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');
});


// Admin - Data Guru
Route::get('/admin/guru', [AdminController::class, 'guru'])->name('admin.guru');
Route::post('/admin/guru/tambah', [AdminController::class, 'tambahGuru'])->name('admin.guru.tambah');
Route::post('/guru/edit/{id}', [AdminController::class, 'editGuru'])->name('admin.guru.edit');
Route::get('/admin/guru/hapus/{id}', [AdminController::class, 'hapusGuru'])->name('admin.guru.hapus');
Route::get('/', [AdminController::class, 'index'])->name('smk.index');
Route::get('/profil/guru', [AdminController::class, 'tampilPublik'])->name('profil.guru');
Route::get('/smk/daftar', [PpdbController::class, 'index'])->name('smk.form');
Route::post('/smk/daftar', [PpdbController::class, 'store'])->name('smk.store');
Route::get('/ppdb/pengumuman', [PpdbController::class, 'pengumuman'])->name('ppdb.pengumuman');
Route::get('/ppdb/pengumuman/cek', [PpdbController::class, 'cekPengumuman'])->name('ppdb.pengumuman.cek');
// ADMIN PPDB
Route::prefix('admin/ppdb')->group(function () {
    Route::get('/', [PpdbAdminController::class, 'index'])->name('admin.ppdb');

    Route::get('/detail/{id}', [PpdbAdminController::class, 'detail'])->name('ppdb.admin.detail');

    Route::post('/update-status/{id}', [PpdbAdminController::class, 'updateStatus'])->name('ppdb.admin.status');

    Route::get('/export/excel', [PpdbAdminController::class, 'exportExcel'])->name('ppdb.admin.export.excel');
    Route::get('/export/pdf', [PpdbAdminController::class, 'exportPDF'])->name('ppdb.admin.export.pdf');

    // CRUD
    Route::get('/edit/{id}', [PpdbAdminController::class, 'edit'])->name('ppdb.admin.edit');
    Route::post('/update/{id}', [PpdbAdminController::class, 'update'])->name('ppdb.admin.update');
    Route::delete('/delete/{id}', [PpdbAdminController::class, 'destroy'])->name('ppdb.admin.delete');
});
Route::get('/pengumuman', [SmkController::class, 'pengumuman']);


Route::prefix('admin')->group(function () {

    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');

    Route::get('/siswa/detail/{id}', [SiswaController::class, 'show'])->name('siswa.show');
    Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::put('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('/siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

    Route::post('/siswa/import', [SiswaController::class, 'import'])->name('siswa.import');
    Route::get('/siswa/export-excel', [SiswaController::class, 'exportExcel'])->name('siswa.export.excel');
    Route::get('/siswa/export-pdf', [SiswaController::class, 'exportPDF'])->name('siswa.export.pdf');
    Route::get('/siswa/json/{id}', [SiswaController::class, 'json'])
        ->name('siswa.json');
});


// ==== ROUTE PUBLIC ====
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

// ==== ROUTE ADMIN (CRUD) ====
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/berita', [BeritaController::class, 'adminIndex'])->name('berita.index');

    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
});
Route::get('/', function () {
    return view('landing');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profil-guru', [HomeController::class, 'profilGuru'])->name('guru.publik');
Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

Route::prefix('admin')->group(function () {

    // PAGE ADMIN JURUSAN
    Route::get('/jurusan', [JurusanAdminController::class, 'index'])
        ->name('admin.jurusan.index');

    // UPDATE HERO & TENTANG
    Route::post('/jurusan/update', [JurusanAdminController::class, 'update'])
        ->name('admin.jurusan.update');

    // TESTIMONI
    Route::post('/jurusan/testimoni/store', [JurusanAdminController::class, 'storeTestimoni'])
    ->name('admin.jurusan.testimoni.store');

Route::delete('/jurusan/testimoni/{id}', [JurusanAdminController::class, 'destroyTestimoni'])
    ->name('admin.jurusan.testimoni.delete');

Route::put('/jurusan/testimoni/{id}', [JurusanAdminController::class, 'updateTestimoni'])
    ->name('admin.jurusan.testimoni.update');

});

use App\Http\Controllers\AdminUserController;

Route::prefix('admin')->middleware('auth')->group(function () {

    // List semua user
    Route::get('/users', [AdminUserController::class, 'index'])
        ->name('admin.users.index');

    // Form tambah user
    Route::get('/users/create', [AdminUserController::class, 'create'])
        ->name('admin.users.create');

    // Simpan user baru
    Route::post('/users', [AdminUserController::class, 'store'])
        ->name('admin.users.store');

});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
    Route::post('/users', [AdminUserController::class, 'store'])->name('admin.users.store');
});
