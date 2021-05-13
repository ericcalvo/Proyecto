<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div id="divJuego" class="p-6 bg-white border-b border-gray-300">
                <label id="juegoNombre">{{ $juego_nom }}</label>
                <iframe id="juego" scrolling="no" src="../../storage/app/{{$game}}" >Juega Ahora</></iframe></br></br>
                
                {{ $juego_desc }} </br>
            </div>
        </div>
    </div>
    <x-application-footer-down/>
</x-app-layout>

<style>
    #juegoNombre{
        font-size: 22px;
        margin-bottom: 30px;
        margin-left: 44%;
        font-weight: bold;
    }
    #divJuego{
        text-align: left;
        padding-bottom: 60px;
        margin-top: -20px;
    }
    #juego {
        width: 100%;
        height: 780px;
    }
</style>