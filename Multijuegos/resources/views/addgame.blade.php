<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h3>Añadir Juego</h3></br>
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif            
            <form id="addGame" action="{{url('savegame')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <label>¿Cómo se llama el juego?</label></br>
                    <input type="text" name="name" id=""></br></br>
                    <label for="categoria">¿Cuál es su categoria?</label></br>
                    <select name="categoria" id="">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    </select></br></br>
                    <label> Haz una pequeña descripción:</label> </br><textarea name="desc" id="" cols="30" rows="5" placeholder="Maximo 255 caracteres"></textarea></br></br>
                    <label> El juego sera Premium?</label></br>
                    <select name="premium" id="">
                    <option value="0" selected="selected">No</option>
                    <option value="1">Si</option>
                    </select> </br></br>
                    <label> Sube una imagen para usar como icono: </label>
                    <input type="file" name="image" id="" class="form-control-file"></br></br>
                    <label> Zip del juego: </label>
                    <input type="file" name="game" id="" class="form-control-file"></br></br>
                    <button id="button" type="submit">Crear Juego</button>
            </form>
        </div>
    </div>
</x-app-layout>
<x-application-footer/>

<style>
    #addGame{
        text-align: left;
        margin-left: 34%;
        padding-bottom: 40px;
    }
    h3{
        text-align: center;
    }
    #button{
        border: solid;
        padding: 10px;
        margin-left: 72px;
        border-width: 2px;
    }
</style>