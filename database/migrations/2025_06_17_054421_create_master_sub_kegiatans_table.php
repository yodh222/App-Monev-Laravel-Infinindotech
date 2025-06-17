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
        Schema::create('master_sub_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('master_daerah_id')->constrained('master_daerah')->cascadeOnDelete();
            $table->string('nama_sub_kegiatan');
            $table->string('kode_sub_kegiatan');
            $table->decimal('pagu', 20, 2);
            $table->year('tahun_anggaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_sub_kegiatan');
    }
};