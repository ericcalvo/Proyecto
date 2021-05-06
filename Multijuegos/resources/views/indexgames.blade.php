<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3>Juegos</h3></br>
            <a href="{{url('addgame')}}">Crear Juego</a>
            <table style="width: 100%">
                <tr>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    <th>Premium</th>
                    <th>Imagen/logo</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                @foreach($juegos as $juego)
                    <tr>
                        <th class="name">{{ $juego->name }}</th>
                        <th class="category">{{ $categorias[$juego->category -1]->name }}</th>
                        <th class="desc">{{ $juego->description }}</th>
                        <th class="premium">
                            @if($juego->is_premium === 1)
                                Sí
                            @else
                                No
                            @endif
                        </th>
                        <th class="img"><img src="{{ url('/storage/'.$juego->image)}}" alt="no va"></th>
                        <th><a href="{{ url('showgame/'.$juego->id) }}">Editar</a></th>
                        <th><a href="{{ url('deletegame/'.$juego->id) }}">Borrar</a></th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <x-application-footer/>
</x-app-layout>

<style>
    table{
        width: 100%;
    }
    th.name, th.category {
        width: 11%;
    }
    th.desc{
        width: 40%;
    }
    th.premium{
        width: 12%;
    }
    th.img{
        width: 15%;
    }
    h3{
        text-align: center;
    }
</style>