<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
    <h1>Add New Book</h1>
    <form action="{{route ('books.store') }}" method="POST">
        @csrf
        <label for="title">Book Title</label>
        <input type="text" id="title" name="title" required>
        <br><br>
        <label for="author">Author</label>
        <input type="text" id="author" name="author" required>
        <br><br>
        <label for="year">Year</label>
        <input type="number" id="number" name="number" required>
        <br><br>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="40" rows="4"></textarea>
        <br><br>


        <button type="submit">SAVE</button>

        
    </form>
</body>
</html>