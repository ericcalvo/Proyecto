<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('editgame/'.$juego->id)}}" method="post">
        @csrf
        <label>Editar {{$juego->name}}</label></br>
        <input type="text" name="name" id="" placeholder="{{$juego->name}}"></br></br>
        <label for="categoria">¿Cuál es su categoria?</label></br>
        <select name="categoria" id="">
        @foreach($category as $cat)
            @if($juego->category == $cat->id)
                <option value="{{$cat->id}}" selected="selected">{{$cat->name}}</option>
            @else
                <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endif
        @endforeach
        </select></br></br>
        <label> Descr: </label> <br><textarea name="desc" id="" cols="30" rows="5" placeholder="{{$juego->description}}"></textarea></br></br>
        <select name="premium" id="">
            @if($juego->premium === 1)
                <option value="1" selected="selected">Sí</option>
                <option value="0">No</option>
            @else
                <option value="1">Sí</option>
                <option value="0" selected="selected">No</option>
            @endif
        
        </select><br>
        
        <label> Quieres cambiar la imagen? </label> <input type="file" name="image" id="" class="form-control-file"></br></br>
        <button id="button" type="submit">Guardar Cambios</button>
    
    </form>
</body>
</html>