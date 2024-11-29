<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = \App\Models\Event::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'price' => $this->faker->numberBetween(100000, 1000000),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl,
        ];
    }
}
