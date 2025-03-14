<?php
namespace Tests\Feature\Movies;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Movies\Movie;

//Agar factory bilan test yozilsa
//class MovieTest extends TestCase
//{
//    use RefreshDatabase;
//
//    public function test_it_can_create_a_movie()
//    {
//        $movie = Movie::factory()->create([
//            'title' => 'Inception',
//            'description' => 'A mind-bending thriller',
//            'release_year' => 2010,
//            'rating' => 8.8
//        ]);
//
//        $this->assertDatabaseHas('movies', [
//            'title' => 'Inception',
//            'release_year' => 2010
//        ]);
//    }
//
//    public function test_it_can_fetch_all_movies()
//    {
//        Movie::factory()->count(3)->create();
//
//        $movies = Movie::all();
//
//        $this->assertCount(3, $movies);
//    }
//}

//Agar factory ishlatmasdan test yozilsa
class MovieTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_create_a_movie()
    {
        // Movie modeliga qo'lda ma'lumot qo'shamiz
        $movie = Movie::create([
            'title' => 'Inception',
            'description' => 'A mind-bending thriller',
            'release_year' => 2010,
            'rating' => 8.8
        ]);

        // Ma'lumot bazaga saqlanganligini tekshiramiz
        $this->assertDatabaseHas('movies', [
            'title' => 'Inception',
            'release_year' => 2010
        ]);

        // Model obyektini tekshirish
        $this->assertEquals('Inception', $movie->title);
        $this->assertEquals(2010, $movie->release_year);
    }

    public function test_it_can_fetch_all_movies()
    {
        // 3 ta movie qo'lda yaratamiz
        Movie::create([
            'title' => 'Movie 1',
            'description' => 'Description 1',
            'release_year' => 2001,
            'rating' => 7.5
        ]);

        Movie::create([
            'title' => 'Movie 2',
            'description' => 'Description 2',
            'release_year' => 2005,
            'rating' => 8.0
        ]);

        Movie::create([
            'title' => 'Movie 3',
            'description' => 'Description 3',
            'release_year' => 2012,
            'rating' => 8.5
        ]);

        // Hammasini olish
        $movies = Movie::all();

        // Test
        $this->assertCount(3, $movies);
    }
}
