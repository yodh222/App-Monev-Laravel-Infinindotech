<?php

namespace Database\Seeders\Core;

use App\Models\Realization;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RealizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Realization::factory()->count(10)->create();
    }
}
