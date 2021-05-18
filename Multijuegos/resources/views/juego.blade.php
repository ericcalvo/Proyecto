<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div id="divJuego" class="p-6 bg-white border-b border-gray-300">
                <label id="juegoNombre">{{ $juego_nom }}</label>
                <iframe id="juego" scrolling="no" src="../../storage/app/{{$game}}"></iframe></br>
                
                <label id="descripcionJuego">{{ $juego_desc }}</label>
            </div>
        </div>
    </div>
    <x-application-footer-down/>
</x-app-layout>

<style>
    #juegoNombre{
        font-size: 22px;
        margin-bottom: 28px;
        display: block;
        text-align: center;
        font-weight: bold;
        font-family: Helvetica;
    }
    #divJuego{
        text-align: left;
        margin-top: -20px;
    }
    #juego {
        width: 90%;
        height: 780px;
        display: block;
        margin: auto;
    }
    #descripcionJuego{
        font-size: 17px;
        margin-left: 50px;
        padding-bottom: 20px;
    }
</style>

<script>
    let documento = document.getElementById("documentoo");
    let juego = document.getElementById("juego");

    juego.addEventListener("mouseenter", function( event ) {
        documento.style.overflow = "hidden";

    });

    juego.addEventListener("mouseout", function( event ) {
        documento.style.overflow = "auto";
    });
</script>