<?php

namespace Database\Seeders\core;

use App\Models\MasterSubKegiatan;
use Illuminate\Database\Seeder;

class MasterSubKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterSubKegiatan::factory()->count(10)->create();
    }
}