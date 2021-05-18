<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div id="multijuegos">
                    <h1>Multijuegos</h1>
                    @for ($i = 0; $i < 1; $i++)
                        <div class="content">
                            <div class="row offset-md-3">
                                <table>
                                    <tr>
                                    @foreach ($juegos as $juego)
                                            <th>
                                                <a href="{{ url('juego/'.$juego -> name) }}">
                                                    <img id="imgJ" src="https://dawjavi.insjoaquimmir.cat/abernadas/UF12/Proyecto/Multijuegos/storage/app/{{$juego->image}}"/>
                                                </a></br>
                                                <li id="listJ" href="{{ url('multijuegos/'.$juego->name) }}"> {{ $juego -> name }}</li></br>
                                            </th>
                                    @endforeach
                                    </tr>
                                </table>
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
        margin-right: 100px;
    }
    .imagenesJuegos {
        height: 160px;
        width: 160px;
        margin-bottom: 20px;
        margin-left: 100px;
    }
</style>