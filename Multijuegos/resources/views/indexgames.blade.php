<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Descripcion</th>
            <th>Premium</th>
            <th>Imagen/logo</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($juegos as $juego)
            <tr>
                <th>{{ $juego->name }}</th>
                <th>{{ $categorias[$juego->category] }}</th>
                <th>{{ $juego->description }}</th>
                <th>
                    @if($juego->is_premium === 1)
                        Sí
                    @else
                        No
                    @endif
                </th>
                <th><img src="{{ url('/storage/')}}" alt="no va"></th>
                <th><a href="{{ url('editgame'.$juego->id) }}">Editar</a></th>
                <th><a href="{{ url('deletegame'.$juego->id) }}">Editar</a></th>
            </tr>
        @endforeach
    </table>
</body>
</html>