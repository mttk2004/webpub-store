<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Book</title>
</head>
<body>
  <h1>{{ $book->title }}</h1>
  <p>{{ $book->author }}</p>
  <p>{{ $book->published_at }}</p>
  <p>{{ $book->genre }}</p>
  <p>{{ $book->description }}</p>
  <a href="{{ route('books.index') }}">Back</a>
</body>
</html>
