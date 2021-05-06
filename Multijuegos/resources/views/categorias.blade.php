<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ol>
                        @foreach ($cats as $cat)
                            <img id="imgC" src="{{ url($cat->cat_image) }}"/>
                            <li><a id="listC" href="{{ url('categoria/'.$cat->name) }}"> {{ $cat -> name }}</a></li></br>
                        @endforeach
                    </ol>                
                </div>
            </div>
        </div>
    </div>
    <x-application-footer />
</x-app-layout>

<style>
    #listC{
        color: black;
        margin-left: 10px;
    }
    #imgC{
        height: 30px;
        width: 32px;
        float: left;
    }
</style>