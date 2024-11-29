<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = \App\Models\Berita::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'date' => $this->faker->date(),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl,
        ];
    }
}
