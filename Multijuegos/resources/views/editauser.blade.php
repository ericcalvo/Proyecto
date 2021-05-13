<x-app-layout>
    <div class="py-12 body">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif

            <form action="{{ url( 'updateuser' ) }}" method="post" id="editUser" enctype="multipart/form-data">
            @csrf
                <h3>Editar Usuario </h3> </br>
                <label>Nombre: </label></br>
                <input type="text" name="name" id="" placeholder="{{Auth::user()->name}}"> </br></br>

                <label>Correo: </label></br>
                <input type="email" name="email" id="" placeholder="{{Auth::user()->email}}"></br></br>

                <label>Contraseña:</label></br>
                <input type="password" name="password" id=""></br></br>

                <label>Repite Contraseña: </label></br>
                <input type="password" name="passwd2" id=""></br></br>

                <label>Pon aqui tu foto:</label>
                <input type="file" name="profileimage" id="" class="form-control-file"></br>

                <input type="hidden" id="" value='{{ Auth::user()->id }}'>

                <input type="submit" id="button" value="Editar Usuario"></br>
            </form>
        </div>
    </div>
    <x-application-footer class="block h-10 w-auto fill-current" />
</x-app-layout>

<style>
    #editUser{
        text-align: left;
        margin-left: 34%;
    }
    #button{
        border: solid;
        padding: 10px;
        margin-left: 60px;
        border-width: 2px;
    }
</style>