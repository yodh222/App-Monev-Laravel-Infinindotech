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
        Schema::create('master_paket', function (Blueprint $table) {
            $table->id();
            $table->foreignId('master_sub_kegiatan_id')->constrained('master_sub_kegiatan')->cascadeOnDelete();
            $table->string('nama_paket');
            $table->string('kode_paket');
            $table->decimal('pagu', 20, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_paket');
    }
};