<?php

namespace Database\Seeders\core;

use App\Models\Perencanaan;
use Illuminate\Database\Seeder;

class PerencanaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Perencanaan::factory()->count(10)->create();
    }
}