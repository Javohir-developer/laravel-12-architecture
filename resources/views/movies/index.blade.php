<!-- resources/views/movies/index.blade.php -->

{{--@extends('layouts.app')--}}

@section('content')
    <div class="container">
        <h1 class="mb-4">Movies List</h1>

        @if ($movies->isEmpty())
            <p>No movies found.</p>
        @else
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Release Year</th>
                    <th>Rating</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->description }}</td>
                        <td>{{ $movie->release_year }}</td>
                        <td>{{ $movie->rating }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
