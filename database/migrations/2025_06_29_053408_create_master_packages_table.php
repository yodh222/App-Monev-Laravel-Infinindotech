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
        Schema::create('master_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('master_sub_activity_id')->constrained('master_sub_activities')->cascadeOnDelete();
            $table->string('package_name');
            $table->string('package_code');
            $table->decimal('pagu', 20, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_packages');
    }
};
