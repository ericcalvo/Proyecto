<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo/>
            </a>
            <x-slogan class="eslogan" />
        </x-slot>
        <form method="POST" action="{{url('sendbug')}}">
            @csrf
            <select class="juegoN" name="juego" id="">
                @foreach($juegos as $juego)
                    <option value="{{$juego->id}}">{{$juego->name}}</option>
                @endforeach
            </select>
            <textarea name="report" id="" cols="30" rows="10"></textarea><br>
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <div class="flex justify-center mt-3">
                <x-button class="ml-3">
                    {{ __('Reportar Bug') }}
                </x-button>
            </div>
        </form>
        <x-application-copyright/>
    </x-auth-card>
</x-guest-layout>

<style>
    #gameReport{
        width: 400px;
    }
    #comentReport{
        width: 400px;
        height: 140px;
    }
    .juegoN{
        margin-bottom: 10px;
    }
</style>