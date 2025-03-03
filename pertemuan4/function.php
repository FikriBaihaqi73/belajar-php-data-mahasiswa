<?php
    function salam($nama = "admin") {
        $hour = date("H");

        if($hour >=00 && $hour <=12) {
            $waktu ="pagi";
        }
        elseif($hour >=12 && $hour <=15){
            $waktu ="siang";
        }
        elseif($hour >=15 && $hour <20){
            $waktu ="sore";
        }
        else{
            $waktu ="malam";
        }

        return "selamat $waktu, $nama";
    }

    ?>

    <!doctype html>
    <html>
        <head>
            <title>latihan function</title>
        </head>
        <body>
            <h1><?= salam("Fikri");?></h1>
        </body>
    </html>
