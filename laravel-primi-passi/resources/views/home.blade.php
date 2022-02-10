<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <header>
        <a href="{{ route('history') }}">History</a>
        <a href="{{ route('albums') }}">Albums</a>
        <a href="{{ route('blog') }}">Blog</a>
        <a href="{{ route('concert') }}">Concert</a>
    </header>
    <h1>Hello world</h1>
    <h2>Famous Songs: {{ $name }}</h2>
    <ul>
        @foreach ($song as $song)
            <li>{{$song}}</li>
        @endforeach
    </ul>
</body>
</html>