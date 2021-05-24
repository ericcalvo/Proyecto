<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div id="categorias" class="p-6 bg-white border-b border-gray-300">
                    <ol>
                        @foreach ($cats as $cat)
                            <img id="imgC" class="float-left" src="https://dawjavi.insjoaquimmir.cat/abernadas/UF12/Proyecto/Multijuegos/storage/app/{{$cat->image}}"/>
                            <li><a id="listC" href="{{ url('categoria/'.$cat->name) }}"> {{ $cat -> name }}</a></li></br>
                        @endforeach
                    </ol>
                </div>
                {{ $cats->links() }}
            </div>
        </div>
    </div>
    <x-application-footer />
</x-app-layout>

<style>
    #categorias{
        height: 442px;
    }
    #listC{
        color: black;
        margin-left: 10px;
    }
    #imgC{
        height: 30px;
        width: 32px;
    }
</style>