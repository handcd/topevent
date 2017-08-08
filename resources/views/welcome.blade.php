<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Whatever It Takes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                /*background-color: #bdc3c7;*/
                color: #2c3e50;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                border:2px solid transparent;
                color: #2c3e50;
                padding: 10px 35px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover {
                /*background-color: #7f8c8d !important;*/
                border-style: solid;
                border-width: 2px;
                border-radius: 8px !important;
                border-color: #2c3e50;
                /*padding-top: 10px;
                padding-bottom: 10px;*/
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            @media only screen and (max-width: 500px) {
                
                .title {
                    font-size: 50px;
                }

                .links > a {
                    margin-left: 5vw;
                }
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/dashboard') }}">Inicio</a>
                    @else
                        <a href="{{ url('/login') }}">Iniciar Sesión</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Whatever It Takes
                </div>

                <div class="links">
                    <a href="#">Documentación</a>
                    <a href="{{ url('configurador') }}">Configurador</a>
                    <a href="#">Soporte Técnico</a>
                </div>
            </div>
        </div>
    </body>
</html>
