<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
        @foreach ($errors as $error)
            <p>$error</p>
        @endforeach
    @endif

    <form action="{{ url( 'updateuser' ) }}" method="post">
    @csrf
        Editar Usuari <br>
        Nom: <input type="text" name="name" id="" placeholder="{{Auth::user()->name}}"> <br>
        Correu: <input type="email" name="email" id="" placeholder="{{Auth::user()->email}}"><br>
        Contrasenya: <input type="password" name="passwd" id=""><br>
        Repeteix Contrasenya: <input type="password" name="passwd2" id=""><br>
        <input type="file" name="profileimage" id=""><br>
        <input type="hidden" value='{{ Auth::user()->id }}'>
        <input type="submit" value="Canvia">
    </form>
</body>
</html>