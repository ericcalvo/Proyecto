<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
            <x-slogan class="eslogan" />
        </x-slot>
        <form method="POST" action="">
            @csrf
            <div>
                <x-label for="game" :value="__('Game')" /></br>

                <input id="gameReport" type="text"/>
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" /></br>

                <input id="comentReport" type="text" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Reportar Bug') }}
                </x-button>
            </div>
            <x-application-copyright/>
        </form>
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
</style>