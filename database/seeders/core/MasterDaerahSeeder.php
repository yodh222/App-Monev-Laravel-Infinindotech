<?php

namespace Database\Seeders\core;

use App\Models\MasterDaerah;
use Illuminate\Database\Seeder;

class MasterDaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterDaerah::factory()->count(10)->create();
    }
}