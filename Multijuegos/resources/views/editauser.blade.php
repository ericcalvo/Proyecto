<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="route(guarda_cambios)" method="post">
    @csrf
        Editar Usuari <br>
        Nom: <input type="text" name="nom" id="" placeholder="{{Auth::user()->name}}"> <br>
        Correu: <input type="email" name="email" id="" placeholder="{{Auth::user()->email}}"><br>
        Contrasenya: <input type="password" name="passwd" id=""><br>
        Repeteix Contrasenya: <input type="password" name="passwd2" id=""><br>
        <input type="submit" value="Canvia">
    </form>
</body>
</html>