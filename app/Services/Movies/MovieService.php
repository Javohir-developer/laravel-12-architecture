<?php
namespace App\Services\Movies;

use App\Models\Movies\Movie;
use App\Repositories\Movies\MovieRepository;

class MovieService
{

    protected $movieRepository;

    public function __construct(MovieRepository $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function getAllMovies()
    {
        return $this->movieRepository->getAll();
    }

    public function createMovie(array $data)
    {
        // Logika qo‘shish mumkin (masalan, shartlar, validatsiya, eventlar)
        return $this->movieRepository->create($data);
    }

    public function updateMovie($id, array $data)
    {
        // Logika qo‘shish mumkin (masalan, shartlar, validatsiya, eventlar)
        return $this->movieRepository->update($id, $data);
    }

    public function getMovieById($id)
    {
        return $this->movieRepository->getById($id);
    }
}
