<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="admin" class="p-6">
                <h1 id="titulo">Administrador</h1></br>

                <a class="offset-md-5 administrar" href="{{url('indexgames')}}">Administrar juegos</a></br></br>
                <a class="offset-md-5 administrar" href="{{url('indexcats')}}">Administrar categorias</a>
            </div>
        </div>
    </div>
    <x-application-footer/>
</x-app-layout>

<style>
    #admin{
        height: 442px;
    }
    #titulo{
        text-align: center;
        margin-bottom: 25px;
    }
    .administrar{
        color: black;
    }
    .administrar:hover{
        color: gray;
        text-decoration: none;
    }
</style>