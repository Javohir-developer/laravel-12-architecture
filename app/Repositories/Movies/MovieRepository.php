<?php
namespace App\Repositories\Movies;

use App\Models\Movies\Movie;

class MovieRepository
{
    public function getAll()
    {
        return Movie::all();
    }

    public function create(array $data)
    {
        return Movie::create($data);
    }

    public function update($id, array $data)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($data);
        return $movie;
    }

    public function delete($id)
    {
        return Movie::destroy($id);
    }

    public function getById($id)
    {
        return Movie::findOrFail($id);
    }
}
