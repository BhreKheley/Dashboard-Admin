<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tiket>
 */
class TiketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'film_id' => mt_rand(1, 5),
            'kursi'=>mt_rand(1, 10),
            'jam_tayang'=>fake()->time(),
            'tanggal' => fake()->date()
        ];
    }
}
