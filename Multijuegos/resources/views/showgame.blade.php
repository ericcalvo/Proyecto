<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form id="form" action="{{url('editgame/'.$juego->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <h3 id="nombreJuego">Editar {{$juego->name}}</h3></br>
                <label>Nombre:</label></br>
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
                <label> Descripcion: </label> </br><textarea name="desc" id="" cols="30" rows="5" placeholder="{{$juego->description}}"></textarea></br></br>
                <select name="premium" id="">
                    @if($juego->premium === 1)
                        <option value="1" selected="selected">Sí</option>
                        <option value="0">No</option>
                    @else
                        <option value="1">Sí</option>
                        <option value="0" selected="selected">No</option>
                    @endif
                
                </select></br>
                
                <label> Quieres cambiar la imagen? </label> <input type="file" name="image" id="" class="form-control-file"></br></br>
                <button id="button" type="submit">Guardar Cambios</button>
            </form>
        </div>
    </div>
    <x-application-footer-down/>
</x-app-layout>

<style>
    #nombreJuego{
        margin-left: 30px;
    }
    #form{
        text-align: left;
        margin-left: 34%;
    }
    #button{
        border: solid;
        padding: 10px;
        margin-left: 72px;
        border-width: 2px;
    }
</style>