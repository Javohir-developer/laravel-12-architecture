<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Movie</title>
</head>
<body>
<h1>Create a New Movie</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="{{ route('movies.store') }}" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" required>

    <label>Description:</label>
    <textarea name="description"></textarea>

    <label>Release Year:</label>
    <input type="number" name="release_year" min="1900" max="{{ date('Y') }}" required>

    <label>Rating:</label>
    <input type="number" name="rating" step="0.1" min="0" max="10" required>

    <button type="submit">Save</button>
</form>
</body>
</html>
