<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        $this->call(GenreSeeder::class);
        \App\Models\Movie::factory(10)->create();
        \App\Models\Favorite::factory(10)->create();
        \App\Models\Subscriber::factory(5)->create();
    }
}
