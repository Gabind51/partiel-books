<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" required><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value="{{ old('author', $book->author) }}" required><br>

        <label for="year">Year:</label>
        <input type="number" id="year" name="year" value="{{ old('year', $book->year) }}" required><br>

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" value="{{ old('genre', $book->genre) }}"><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('books.index') }}">Back to List</a>
</body>
</html>
