<x-portada-layout>
    @extends('layouts.portada')
    @pruebanav
    @section('pruebanav')
        @parent

        <p>This is appended to the master sidebar.</p>
    @endsection
    <x-slot name="pruebanav">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Multijuegos') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome {{Auth::user()->name}} | You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-portada-layout>