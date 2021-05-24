<x-app-layout>
    <div class="py-12">
        <div id="indexCats" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3>Categorias</h3></br>
            <a href="{{url('addcat')}}">Crear cateogria</a>
            <table>
                <tr>
                    <th class="name">Nombre</th>
                    <th class="img">Imagen/logo</th>
                    <th class="edit">Editar</th>
                    <th class="delete">Borrar</th>
                </tr>

                @foreach($cats as $cat)
                    <tr>
                        <td>{{ $cat->name }}</td>        
                        <td><img id="imgC" src="https://dawjavi.insjoaquimmir.cat/abernadas/UF12/Proyecto/Multijuegos/storage/app/{{$cat->image}}" alt="no va"></td>
                        <td><a href="{{ url('showcat/'.$cat->id) }}">Editar</a></td>
                        <td><a href="{{ url('deletecat/'.$cat->id) }}">Borrar</a></td>
                    </tr>
                @endforeach
            </table></br></br>
            <p>Acuerdate que borrar una categoria también eliminará los juegos relacionados con ella</p>
        </div>
    </div>
    <x-application-footer/>
</x-app-layout>

<style>
    #indexCats{
        padding-bottom: 239px;
    }
    table{
        width: 100%;
    }
    th.name{
        width: 13%;
    }
    th.img{
        width: 74%;
        margin-right: 10px;
    }
    h3{
        text-align: center;
    }
    #imgC{
        height: 50px;
        width: auto;
    }
</style>