<html>
    <head>
        <title>latihan array</title>
        <style>
            .kotak {
                width: 30px;
                height: 30px;
                background-color: green;
                text-align: center;
                line-height:30px;
                margin: 30px;
                float: left;
                transition: 0,5s;
            }
            .kotak: hover {
                transfrom: (360deg);
                border-radius: 50%;

            }
            .clear {
                clear: both;
            }
        </style>
    </head>
    <body>

 <?php
$angka = [
        [1,2,3],
        [4,5,6,],
        [7,8,9]
    ];
 ?>
    <?php foreach($angka as $a) : ?>
        <?php foreach ($a as $b) :?>
        <div class="kotak"><?= $b; ?></div>
        <?php endforeach ; ?>
        <div class = "clear"></div>
    <?php endforeach ; ?>


    </body>
</html>