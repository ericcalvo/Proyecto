<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
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
    #listG{
        color: black;
        margin-left: 10px;
    }
    #imgG{
        height: 32px;
        width: 34px;
        float: left;
    }
</style>