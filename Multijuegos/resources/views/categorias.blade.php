<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach (category::all() as $categoria)
        <p> <a href="{{ route(' $categoria -> name ') }}"></a>{{ $categoria -> name}}</p>
    @endforeach
</body>
</html>