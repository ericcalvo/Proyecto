<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Styles -->
        <style>
            @media (max-width: 768px) {
                .reportarBug{
                    display: none;
                }
                .copyright{
                    display: none;
                }
            }
            /* Footer styles */
            .footer {
                background-color: #302E2E;
                font-family: Alegreya Sans;
                height: 130px;
            }
            .contactos {
                color: #A9A9A9;
                margin-top: 10px;
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
            <!-- Home Footer -->
            <div class="row footer">
                <div class="col-md-5 contactos">
                    <p class="tituloInfo">Informacion de Contacto</p>
                    <p>Email: multijuegosproyecto@gmail.com</p>
                    <p>Tel: 666 777 888 </p>
                </div>
                <div class="col-md-4 copyright">
                    <img src=""/>
                    <p>2020 - 2021 | All Rights Reserveds</p>
                </div>
                <div class="col-md-2 reportarBug">
                    <a href="{{ url('reportarBug') }}">
                        <img class="bug" src="images/bug.png"/>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
