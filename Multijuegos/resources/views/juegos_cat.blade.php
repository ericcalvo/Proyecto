<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        @foreach ($juegos as $juego)
            @if($juegos->category === $id)
                <li> <a href="{{ route('/juego/$juego -> name ') }}">{{ $juego -> name}}</a></li>
        @endforeach
    </ol>
</body>
</html>