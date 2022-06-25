<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
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
            'user_id' => '1',
            'genre_id' => $this->faker->unique(),
            'name' => $this->faker->firstName(),
            'description' => $this->faker->sentence(5),
            'released_date' => $this->faker->date(),
            'director' => $this->faker->unique()->name(),
            'writer' => $this->faker->unique()->name(),
            'thumbnail' => $this->faker->imageUrl($width = 200, $height = 200),
            'video' => $this->faker->imageUrl($width = 200, $height = 200),
        ];
    }
}
