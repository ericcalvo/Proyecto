<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <title>Multijuegos</title>

        <!-- Styles -->
        <style>
            /* Nav styles */
            .logo {
                height: 200px;
                margin-top: -30px;
                margin-bottom: -40px;
            }
            .nav_izquierda {
                color: white;
                margin-left: 40px;
            }
            .login_container{
                margin-top: 50px;
            }
            .navegador{
                background-color: #302E2E;
            }
            .labelMultijuegos{
                color: white;
                font-size: 17px;
                margin-left: 20px;
            }
            /* Content styles */

            /* Footer styles */
            .footer {
                background-color: #302E2E;
                margin-top: 300px;
            }
            .contactos{
                color: white;
            }
            .copyright{
                color: white;
            }
            .reportarBug{
                color: white;
            }
        </style>
        
    </head>
    <body>
        <div class="container-fluid">
            <!-- Home Nav -->
            <div class="row navegador">
                <div class="col-md-3 col-8 nav_izquierda">
                    <img class="logo" src="images/Multijuegos.png">
                    <p>Si estas aqui es para pasarlo bien</p>
                </div>
                <div class="offset-md-6 offset-col-2 login_container">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-2 py-4 sm:block">
                            @auth
                                <a href="{{ url('/multijuegos') }}" class="text-sm text-gray-700 underline labelMultijuegos">Multijuegos</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline labelMultijuegos">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline labelMultijuegos">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>

            <!-- Home Content -->
            <div>
                <h1>Multijuegos</h1>
                <div class="row">
                    <div>q</div>
                    <div>q</div>
                </div>
                <div class="row">
                    <div>q</div>
                    <div>q</div>
                </div>

            </div>

            <!-- Home Footer -->
            <div class="row footer">
                <div class="contactos">
                    <p class="tituloInfo">Informacion de Contacto</p>
                    <p>Email: multijuegosproyecto@gmail.com</p>
                    <p>Tel: 666 777 888 </p>
                </div>
                <div class="copyright">

                </div>
                <div class="reportarBug">

                </div>
            </div>
        </div>
    </body>
</html>
