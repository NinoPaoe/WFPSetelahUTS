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
        @if($id == "med1")
    <?php
        $url = asset('img/med/antasida.jpg');
        $nama = "Antasida";
        $keterangan = "Dalam dunia medis, obat paracetamol atau acetaminophen sebenarnya memiliki manfaat utama, yaitu untuk meredakan rasa nyeri dan menurunkan demam. Namun, selain itu, obat yang dijual bebas ini juga bisa digunakan untuk mengatasi berbagai macam keluhan kesehatan lainnya."
    ?>
    @elseif($id == "med2")
    <?php
        $url = asset('img/med/lincophar.jpg');
        $nama = "Lincophar";
        $keterangan = "Obat Ponstan adalah obat produksi Pfizer yang memiliki kandungan Asam Mefenamat dan memiliki manfaat untuk menghilangkan rasa nyeri ringan sampai sedang."
    ?>
    @elseif($id == "med3")
    <?php
        $url = asset('img/med/paracetamol.jpg');
        $nama = "Paracetamol";
        $keterangan = "Fungsi yang utama dari obat ini yaitu untuk mengurangi rasa nyeri yang diakibatkan oleh penyakit arthritis dan juga asam urat"
    ?>
    @elseif($id == "equip1")
    <?php
        $url = asset('img/med_equip/tensimeter.jpg');
        $nama = "Tensimeter";
        $keterangan = "Alat untuk mengukur tekanan darah";
    ?>
    @elseif($id == "equip2")
    <?php
        $url = asset('img/med_equip/thermometer.jpg');
        $nama = "Thermometer";
        $keterangan = "Alat untuk mengukur suhu tubuh";
    ?>
    @endif
        <div class="flex-center position-ref full-height">

            <div class="content">
                <img src="<?php echo $url ?>">
                <p class="title">{{ $nama }}</p>
                <p>{{ $keterangan }}</p>
            </div>
        </div>
    </body>
</html>
