<?php

namespace Database\Seeders\Movies;

use App\Models\Movies\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'title' => 'Inception',
            'description' => 'A mind-bending thriller',
            'release_year' => 2010,
            'rating' => 8.8
        ]);

        Movie::create([
            'title' => 'The Matrix',
            'description' => 'A sci-fi classic',
            'release_year' => 1999,
            'rating' => 8.7
        ]);

        Movie::create([
            'title' => 'Interstellar',
            'description' => 'A journey beyond the stars',
            'release_year' => 2014,
            'rating' => 8.6
        ]);
    }
}
