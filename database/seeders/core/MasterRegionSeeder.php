<?php

namespace Database\Seeders\Core;

use App\Models\MasterRegion;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MasterRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterRegion::factory()->count(10)->create();
    }
}