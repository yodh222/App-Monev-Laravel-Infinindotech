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
        Schema::create('master_daerah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_daerah');
            $table->string('kode_daerah');
            $table->enum('jenis_daerah', ['Kota', 'Kabupaten']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_daerah');
    }
};