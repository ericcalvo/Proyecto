<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3>Crear nova categoria</h3> </br>
            <form id="addCat" action="{{url('savecat')}}" method="post" enctype="multipart/form-data">
            @csrf
                Nom: <input type="text" name="name" id=""></br></br>
                Imagen: <input type="file" name="image" id=""> </br></br>
                <button id="button" type="submit" value="Crear">Crear</button>
            </form>
        </div>
    </div>
    <x-application-footer/>
</x-app-layout>

<style>
    #addCat{
        text-align: left;
        margin-left: 34%;
        padding-bottom: 209px;
    }
    #button{
        border: solid;
        padding: 10px;
        margin-left: 72px;
        border-width: 2px;
    }
    h3{
        text-align: center;
    }
</style>