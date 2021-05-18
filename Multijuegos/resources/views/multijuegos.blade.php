<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div id="multijuegos">
                <h1>Multijuegos</h1>
                @for ($i = 0; $i < 1; $i++)
                    <div class="content">
                        <div class="row offset-md-0 col-12">
                            @foreach ($juegos as $juego)
                                <div id="contImg" class="col-md-3 col-12">
                                    <a href="{{ url('juego/'.$juego -> name) }}">
                                        <img id="imgJ" src="https://dawjavi.insjoaquimmir.cat/abernadas/UF12/Proyecto/Multijuegos/storage/app/{{$juego->image}}"/>
                                    </a></br>
                                    <li id="listJ" href="{{ url('multijuegos/'.$juego->name) }}"> {{ $juego -> name }}</li></br>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endfor
                {{ $juegos->links() }}
            </div>
        </div>
    </div>
    <x-application-footer/>
</x-app-layout>

<style>
    @media (max-width: 768px) {
        #contImg{
            padding-left: 150px;
        }
        #multijuegos{
            margin-bottom: 700px;
        }
    }
    h1{
        text-align: center;
        margin-bottom: 30px;
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
        margin-right: 100px;
        margin-top: 10px;
    }
    #contImg{
        margin-bottom: 20px;
    }
    
</style>