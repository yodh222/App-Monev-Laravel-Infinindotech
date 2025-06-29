<?php

namespace Database\Factories;

use App\Models\MasterRegion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterSubActivity>
 */
class MasterSubActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sub_activity_code' => $this->faker->unique()->numerify('SAC###'),
            'sub_activity_name' => $this->faker->sentence(3),
            'master_region_id' => MasterRegion::inRandomOrder()->value('id'),
            'pagu' => $this->faker->randomFloat(2, 0, 1000000),
            'fiscal_year' => $this->faker->year(),
        ];
    }
}
