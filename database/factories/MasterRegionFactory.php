<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterRegion>
 */
class MasterRegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'region_code' => $this->faker->unique()->postcode,
            'region_name' => $this->faker->city,
            'region_type' => $this->faker->randomElement(['Kabupaten', 'Kota']),
        ];
    }
}