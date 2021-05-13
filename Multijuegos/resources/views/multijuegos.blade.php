<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div id="multijuegos" class="p-6 bg-white border-b border-gray-300">
                    <h1>Multijuegos</h1>
                    @foreach ($juegos as $juego)
                        <div class="content">
                            <div class="row offset-md-3">
                                <a href="{{ url('juego/'.$juego -> name) }}">
                                    <img id="imgJ" src="https://dawjavi.insjoaquimmir.cat/abernadas/UF12/Proyecto/Multijuegos/storage/app/{{$juego->image}}"/>
                                </a></br>
                                <li id="listJ" href="{{ url('multijuegos/'.$juego->name) }}"> {{ $juego -> name }}</li></br>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-application-footer/>
</x-app-layout>

<style>
    h1{
        text-align: center;
        margin-bottom: 25px;
    }
    #multijuegos{
        height: 442px;
    }
    #listJ{
        color: black;
        margin-left: 10px;
        list-style-type: none;
    }
    #imgJ{
        height: 160px;
        width: 160px;
    }
    .imagenesJuegos {
        height: 160px;
        width: 160px;
        margin-bottom: 20px;
        margin-left: 100px;
    }
</style>