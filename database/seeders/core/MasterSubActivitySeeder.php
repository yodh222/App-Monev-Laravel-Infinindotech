<?php

namespace Database\Seeders\Core;

use Illuminate\Database\Seeder;
use App\Models\MasterSubActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MasterSubActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterSubActivity::factory()->count(10)->create();
    }
}
