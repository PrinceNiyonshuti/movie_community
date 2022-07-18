<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\User;
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
            'user_id' => User::all()->random()->id,
            'genre_id' => Genre::all()->random()->id,
            'name' => $this->faker->firstName(),
            'description' => $this->faker->sentence(20),
            'released_date' => $this->faker->date(),
            'director' => $this->faker->unique()->name(),
            'writer' => $this->faker->unique()->name(),
            // 'thumbnail' => $this->faker->imageUrl($width = 200, $height = 200),
            'video' => $this->faker->imageUrl($width = 200, $height = 200),
        ];
    }
}
