<?php

namespace Database\Seeders\core;

use App\Models\Realisasi;
use Illuminate\Database\Seeder;

class RealisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Realisasi::factory()->count(10)->create();
    }
}