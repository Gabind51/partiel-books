<!DOCTYPE html>
<html>
<head>
    <title>Create Book</title>
</head>
<body>
    <h1>Create New Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br>

        <label for="year">Year:</label>
        <input type="number" id="year" name="year" required><br>

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre"><br>

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('books.index') }}">Back to List</a>
</body>
</html>
