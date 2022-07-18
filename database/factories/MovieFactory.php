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
            'thumbnail' => 'https://cdn.shopify.com/s/files/1/0057/3728/3618/products/black-adam_t9tj2u28_480x.progressive.jpg?v=1657031326',
            // 'thumbnail' => $this->faker->imageUrl($width = 200, $height = 200),
            'video' => $this->faker->imageUrl($width = 200, $height = 200),
        ];
    }
}
