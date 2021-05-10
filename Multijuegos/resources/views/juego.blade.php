<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="divJuego" class="p-6 bg-white border-b border-gray-200">
                <img src="https://dawjavi.insjoaquimmir.cat/abernadas/UF12/Proyecto/Multijuegos/storage/app/{{$juego_img}}" alt="Couldn't load image"/> </br>
                {{ $juego_nom }} </br></br>
                {{ $juego_desc }} </br>
                <a href="">Juega Ahora</a>
            </div>
        </div>
    </div>
    <x-application-footer2/>
</x-app-layout>

<style>
    #divJuego{
        text-align: left;
        margin-left: 20%;
        padding-bottom: 120px;
        margin-right: 26%;
    }
    
</style>