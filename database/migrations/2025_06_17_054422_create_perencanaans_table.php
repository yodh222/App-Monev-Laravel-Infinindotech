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
        Schema::create('perencanaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('master_paket_id')->constrained('master_paket')->cascadeOnDelete();
            $table->tinyInteger('bulan');
            $table->decimal('perencanaan_fisik', 5, 2);
            $table->decimal('perencanaan_keuangan', 20, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perencanaan');
    }
};