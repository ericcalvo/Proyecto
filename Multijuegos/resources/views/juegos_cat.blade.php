<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div id="JuegosCategorias" class="p-6 bg-white border-b border-gray-200">
                    <ol>
                        @foreach ($juegos as $juego)
                            @if($juego->category == $cat_id)
                                <img id="imgG" src="https://dawjavi.insjoaquimmir.cat/abernadas/UF12/Proyecto/Multijuegos/storage/app/{{$juego->image}}"/>
                                <li> <a id="listG" href="{{ url('juego/'.$juego -> name) }}"> {{ $juego -> name }} </a></li></br>
                            @endif
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <x-application-footer2/>
</x-app-layout>
<style>
    #JuegosCategorias{
        height: 442px;
    }
    #listG{
        color: black;
    }
    #imgG{
        height: 38px;
        width: 40px;
        float: left;
    }
</style>