<?php

namespace Database\Factories;

use App\Models\MasterPaket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perencanaan>
 */
class PerencanaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'master_paket_id' => MasterPaket::inRandomOrder()->value('id'),
            'bulan' => $this->faker->randomElement(range(1, 12)),
            'perencanaan_fisik' => $this->faker->randomFloat(2, 0, 100),
            'perencanaan_keuangan' => $this->faker->randomFloat(2, 0, 1000000),
        ];
    }
}