<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="divJuego" class="p-6 bg-white border-b border-gray-200">
                <iframe scrolling="no" src="../../storage/app/{{$game}}" >Juega Ahora</></iframe>
                {{ $juego_nom }} </br></br>
                {{ $juego_desc }} </br>
            </div>
        </div>
    </div>
    <x-application-footer-down/>
</x-app-layout>

<style>
    #divJuego{
        text-align: left;
        margin-left: 10%;
        padding-bottom: 60px;
        margin-right: 14%;
        margin-top: -20px;
    }
    iframe {
        width: 100%;
        height: 780px;
    }
</style>