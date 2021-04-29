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
            @if($juego->category == $cat_id)
                
                <li> <a href="{{ url('juego/'.$juego -> name) }}"> {{ $juego -> name }} </a></li>

            @endif
        @endforeach
    </ol>
</body>
</html>