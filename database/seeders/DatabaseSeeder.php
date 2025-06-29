<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\Core\PlanningSeeder;
use Database\Seeders\Core\RealizationSeeder;
use Database\Seeders\Core\MasterRegionSeeder;
use Database\Seeders\Core\MasterPackageSeeder;
use Database\Seeders\Core\RolePermissionSeeder;
use Database\Seeders\Core\MasterSubActivitySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolePermissionSeeder::class,
            MasterRegionSeeder::class,
            MasterSubActivitySeeder::class,
            MasterPackageSeeder::class,
            PlanningSeeder::class,
            RealizationSeeder::class,
        ]);
    }
}
