<?php

namespace Database\Factories;

use App\Models\MasterSubKegiatan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterPaket>
 */
class MasterPaketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_paket' => $this->faker->unique()->numerify('PKT###'),
            'nama_paket' => $this->faker->sentence(2),
            'master_sub_kegiatan_id' => MasterSubKegiatan::inRandomOrder()->value('id'),
            'pagu' => $this->faker->randomFloat(2, 0, 1000000),
        ];
    }
}