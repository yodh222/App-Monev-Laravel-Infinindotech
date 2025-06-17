<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterDaerah>
 */
class MasterDaerahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_daerah' => $this->faker->unique()->postcode,
            'nama_daerah' => $this->faker->city,
            'jenis_daerah' => $this->faker->randomElement(['Kabupaten', 'Kota']),
        ];
    }
}