<?php

namespace Database\Factories;

use App\Models\MasterSubActivity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterPackage>
 */
class MasterPackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'package_code' => $this->faker->unique()->numerify('PKG###'),
            'package_name' => $this->faker->sentence(2),
            'master_sub_activity_id' => MasterSubActivity::inRandomOrder()->value('id'),
            'pagu' => $this->faker->randomFloat(2, 0, 1000000),
        ];
    }
}
