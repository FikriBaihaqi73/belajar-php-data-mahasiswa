<?php
// pengulangan pada array
// for / foreach
$angka = [19, 3, 2006, 73, 4, 5, 7, 12, 90, 89, 200];

?>
<!doctype html>
    <html>
        <head>
            <title>latihan array</title>
            <style>
                .kotak {
                    width: 50px;
                    height: 50px;
                    background-color: salmon;
                    text-align: center;
                    line-height: 50px;
                    margin: 3px;
                    float: left;
                }
                .clear {clear:both;}
            </style>
        </head>
        <body>

            <?php for( $i = 0; $i < count($angka); $i++) {?>
            <div class="kotak"><?= $angka[$i]; ?></div>
            <?php } ?>

            <div class="clear"></div>

        <?php foreach( $angka as $a ) { ?>
            <div class="kotak"><?= $a; ?></div>
        <?php }?>

        <div class="clear"></div>

        <?php foreach( $angka as $a) :?>
            <div class="kotak"><?= $a; ?></div>
        <?php endforeach; ?>


        </body>
    </html>
