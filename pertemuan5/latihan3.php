<?php
$mahasiswa = [
    ["Fikri Baihaqi", "19032006", "Teknik sihir lanjutan", "fikrimuhammad38993@gmail.com"],
    ["Maou Fikri", "010100006", "Teknik sihir kutukan", "fikrimuhammad38993@gmail.com"],
    ["Hero Fikri", "01010006", "Teknik sihir suci", "fikrimuhammad38993@gmail.com"]

];
?>
<!doctype html>
    <html>
        <head>
            <title>Daftar $mahasiswa</title>
        </head>
        <body>
           <h1>Daftar mahasiswa</h1>
        <?php foreach ($mahasiswa as $mhs) :?>
           <ul>
               <li>nama : <?= $mhs[0]?></li>
               <li>nomor : <?= $mhs[1]?></li>
               <li>jurusan : <?= $mhs[2]?></li>
               <li>email : <?= $mhs[3]?></li>
           </ul>
        <?php endforeach ; ?>
        </body>
    </html>
