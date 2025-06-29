<?php

namespace Database\Seeders\Core;

use App\Models\Planning;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Planning::factory()->count(10)->create();
    }
}
