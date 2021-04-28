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
        {{ $cat }}
        
            @if($juego->category === $cat)
                
                <li> <a href="{{ url('categoria/'.$juego -> name) }}"> {{ $juego -> name }} </a></li>

            @endif
        @endforeach
    </ol>
</body>
</html>