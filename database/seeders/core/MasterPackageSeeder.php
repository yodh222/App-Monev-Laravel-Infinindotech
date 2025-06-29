<?php

namespace Database\Seeders\Core;

use App\Models\MasterPackage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MasterPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterPackage::factory()->count(10)->create();
    }
}
