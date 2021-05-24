<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3>Editar Categoria</h3></br>
            <form id="form" action="{{url('editcat/'.$cat->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                Nombre: <input type="text" name="name" id="" placeholder="{{$cat->name}}"></br></br>
                Imagen: <input type="file" name="image" id=""></br></br>
                <button id="button" type="submit" value="Guardar Cambios">Guardar Cambios</button>
            </form>
        </div>
    </div>
    <x-application-footer2/>
</x-app-layout>

<style>
    #form{
        text-align: left;
        margin-left: 33%;
        margin-top: 16px;
        height: 400px;
    }
    #button{
        border: solid;
        padding: 10px;
        margin-left: 72px;
        border-width: 2px;
    }
    h3{
        text-align: center;
    }
</style>