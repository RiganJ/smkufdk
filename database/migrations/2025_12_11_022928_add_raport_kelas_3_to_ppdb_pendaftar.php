<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ppdb_pendaftar', function (Blueprint $table) {
            $table->string('raport_kelas_3')->nullable()->after('bukti_pembayaran');
        });
    }

    public function down(): void
    {
        Schema::table('ppdb_pendaftar', function (Blueprint $table) {
            $table->dropColumn('raport_kelas_3');
        });
    }
};
