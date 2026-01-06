<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ppdb_pendaftar', function (Blueprint $table) {
            $table->id();

            $table->string('nama_lengkap');
            $table->string('no_kontak');
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('asal_sekolah');
            $table->string('nama_orang_tua');
            $table->string('no_hp_ortu');
            $table->string('kompetensi_keahlian');

            // Prestasi
            $table->string('jenis_prestasi')->nullable();
            $table->string('bukti_prestasi')->nullable(); // <--- FILE UPLOAD PRESTASI

            // Beasiswa
            $table->string('jenis_beasiswa')->nullable(); // <--- SAMA TIPENYA KAYA JENIS PRESTASI

            // File upload default
            $table->string('pas_foto');
            $table->string('bukti_pembayaran');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ppdb_pendaftar');
    }
};
