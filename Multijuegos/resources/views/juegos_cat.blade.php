<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div id="JuegosCategorias" class="p-6 bg-white border-b">
                    <ol>
                        @foreach ($juegos as $juego)
                            <img id="imgG" src="https://dawjavi.insjoaquimmir.cat/abernadas/UF12/Proyecto/Multijuegos/storage/app/{{$juego->image}}"/>
                            <li> <a id="listG" href="{{ url('juego/'.$juego -> name) }}"> {{ $juego -> name }} </a></li></br>
                        @endforeach
                    </ol>
                </div>
                {{$juegos->links()}}
            </div>
        </div>
    </div>
</x-app-layout>
<x-application-footer-down/>

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