<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form action="{{route ('books.update' , $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Book Title</label>
        <input type="text" id="title" name="title" value="{{$book->title}}" required>
        <br><br>
        <label for="author">Author</label>
        <input type="text" id="author" name="author" value="{{$book->author}}" required>
        <br><br>
        <label for="year">Year</label>
        <input type="number" id="number" name="number" value="{{$book->number}}" required>
        <br><br>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="40" rows="4">{{$book->description}}</textarea>
        <br><br>


        <button type="submit">Update</button>

        
    </form>
    
</body>
</html>