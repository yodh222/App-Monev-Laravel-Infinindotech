<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\core\RealisasiSeeder;
use Database\Seeders\core\MasterPaketSeeder;
use Database\Seeders\core\PerencanaanSeeder;
use Database\Seeders\core\MasterDaerahSeeder;
use Database\Seeders\core\RolePermissionSeeder;
use Database\Seeders\core\MasterSubKegiatanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolePermissionSeeder::class,
            MasterDaerahSeeder::class,
            MasterSubKegiatanSeeder::class,
            MasterPaketSeeder::class,
            PerencanaanSeeder::class,
            RealisasiSeeder::class,
        ]);
    }
}