<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('master_sub_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('master_region_id')->constrained('master_regions')->cascadeOnDelete();
            $table->string('sub_activity_name');
            $table->string('sub_activity_code');
            $table->decimal('pagu', 20, 2);
            $table->year('fiscal_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_sub_activities');
    }
};
