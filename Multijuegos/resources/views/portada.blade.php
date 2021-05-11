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
            @media (max-width: 770px) {
                .bug {
                    display: none;
                }
                .contactos{
                    display: none;
                }
            }
            /* Nav styles */
            .logo {
                height: 180px;
                margin-top: -30px;
                margin-bottom: -40px;
            }
            .nav_izquierda  img{
                margin-left: 40px;
            }
            .nav_izquierda p{
                color: white;
                margin-left: 20px;
                font-family: Helvetica;
            }
            .login_container {
                margin-top: 40px;
            }
            .navegador{
                background-color: #302E2E;
            }
            .labelMultijuegos {
                color: #587BFD;
                font-size: 17px;
                margin-left: 70px;
                font-family: Helvetica;
            }
            /* Content styles */
            .content h1{
                text-align: center;
                margin-top: 20px;
                margin-bottom: 20px;
                font-family: Helvetica;
            }

            .imagenesJuegos {
                height: 160px;
                width: 160px;
                margin-bottom: 20px;
                margin-left: 100px;
            }

            /* Footer styles */
            .footer {
                background-color: #302E2E;
                height: 135px;
                font-family: Alegreya Sans;
            }
            .contactos {
                color: #A9A9A9;
                margin-top: 14px;
                margin-left: 20px;
            }
            .copyright {
                color: #A9A9A9;
                margin-top: 45px;
            }
            .reportarBug {
                color: #A9A9A9;
            }
            .bug{
                height: 80px;
                margin-top: 20px;
                margin-left: 80%;
            }
            
        </style>
        
    </head>
    <body>
        <div class="container-fluid">
            <!-- Home Nav -->
            <div class="row navegador">
                <div class="col-md-3 col-8 nav_izquierda">
                    <img class="logo" src="images/Multijuegos.png" alt="Logo" />
                    <p>Si estas aqui es para pasarlo bien</p>
                </div>
                <div class="offset-md-6 offset-col-2 login_container">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-2 py-4 sm:block">
                            @auth
                                <a href="{{ url('/multijuegos') }}" class="text-sm underline labelMultijuegos">Multijuegos</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm labelMultijuegos">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm underline labelMultijuegos">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>

            <!-- Home Content -->
            <div class="content">
                <h1>Multijuegos</h1>
                <div class="row offset-md-3">
                    <img class="imagenesJuegos" src="images/ajedrez.jpg" alt="Ajedrez"/>
                    <img class="imagenesJuegos" src="images/angryBirds.png" alt="Angry Birds"/>
                </div>
                <div class="row offset-md-3">
                    <img class="imagenesJuegos" src="images/comecocos.jpg" alt="ComeCocos"/>
                    <img class="imagenesJuegos" src="images/buscaminas.jpg" alt="Busca Minas"/>
                </div>
            </div>

            <!-- Home Footer -->
            <div class="row footer">
                <div class="col-md-5 contactos">
                    <p class="tituloInfo">Informacion de Contacto</p>
                    <p>Email: multijuegosproyecto@gmail.com</p>
                    <p>Tel: 666 777 888 </p>
                </div>
                <div class="col-md-4 copyright">
                    <p>2020 - 2021 | All Rights Reserveds</p>
                </div>
                <div class="col-md-2 reportarBug">
                    <a href="{{ url('reportarBug') }}">
                        <img class="bug" src="images/bug.png" alt="Bug"/>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>