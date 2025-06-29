<?php

namespace Database\Factories;

use App\Models\MasterPackage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Realization>
 */
class RealizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'master_package_id' => MasterPackage::inRandomOrder()->value('id'),
            'month' => $this->faker->randomElement(range(1, 12)),
            'physical_realization' => $this->faker->randomFloat(2, 0, 100),
            'financial_realization' => $this->faker->randomFloat(2, 0, 1000000),
        ];
    }
}
