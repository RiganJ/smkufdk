<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
     public function up(): void
    {
        Schema::create('jurusan_content', function (Blueprint $table) {
            $table->id();
            $table->string('jurusan', 50); // farmasi | caregiver | keperawatan
            $table->string('hero_judul')->nullable();
            $table->text('hero_deskripsi')->nullable();
            $table->string('hero_image')->nullable();
            $table->string('tentang_image')->nullable();
            $table->timestamps();

            $table->unique('jurusan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurusan_content');
    }
};
