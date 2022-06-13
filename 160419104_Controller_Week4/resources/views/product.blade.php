<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    
                </div>

                <div class="links">
                    
                </div>
            </div>
        </div> -->
        <div>
            @if ($folder == "med")
                <div class="content">
                    <div class="title m-b-md">
                        Medicine
                    </div>
                </div>
                <div class="flex-center">
                    <img src="{{ asset('img/med/antasida.jpg')}}"/>
                    <a href="http://localhost:8000/catalog/medicines/antasida" style="">Antasida</a>
                    <br>
                    <br>
                    <img src="{{ asset('img/med/lincophar.jpg')}}"/>
                    <a href="http://localhost:8000/catalog/medicines/lincophar" style="">Lincophar</a>
                    <br>
                    <br>
                    <img src="{{ asset('img/med/paracetamol.jpg')}}"/>
                    <a href="http://localhost:8000/catalog/medicines/paracetamol" style="">Paracetamol</a>
                </div>

            @elseif ($folder == "med_equip")
                <div class="content">
                    <div class="title m-b-md">
                        Medicine
                    </div>
                </div>
                <div class="flex-center">
                    <img src="{{ asset('img/med_equip/tensimeter.jpg')}}"/>
                    <a href="http://localhost:8000/catalog/medical_equipments/tensimeter" style="">Tensimeter</a>
                    <br>
                    <br>
                    <img src="{{ asset('img/med_equip/thermometer.jpg')}}"/>
                    <a href="http://localhost:8000/catalog/medical_equipments/'thermometer'" style="">Thermometer</a>
                </div>
            @endif
        </div>
    </body>
</html>
