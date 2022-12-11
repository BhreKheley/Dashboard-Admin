<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'film_id' => mt_rand(1, 5),
            'judul' => fake()->sentence(1),
            'studio' => mt_rand(1, 6),
            'harga' => fake()->randomFloat(25000, 30000, 35000),
        ];
    }
}
