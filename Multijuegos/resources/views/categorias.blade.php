<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        @foreach (category::all() as $categoria)
            <li> <a href="{{ route('/cat/ $categoria -> id ') }}">{{ $categoria -> name}}</a></li>
        @endforeach
    </ol>
</body>
</html>