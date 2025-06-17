<?php

namespace Database\Factories;

use App\Models\MasterDaerah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterSubKegiatan>
 */
class MasterSubKegiatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_sub_kegiatan' => $this->faker->unique()->numerify('SKG###'),
            'nama_sub_kegiatan' => $this->faker->sentence(3),
            'master_daerah_id' => MasterDaerah::inRandomOrder()->value('id'),
            'pagu' => $this->faker->randomFloat(2, 0, 1000000),
            'tahun_anggaran' => $this->faker->year(),
        ];
    }
}