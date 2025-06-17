<?php

namespace Database\Seeders\core;

use App\Models\MasterPaket;
use Illuminate\Database\Seeder;

class MasterPaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterPaket::factory()->count(10)->create();
    }
}