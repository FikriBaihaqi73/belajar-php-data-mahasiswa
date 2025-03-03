<?php
// $_GET
$mahasiswa = [
    [
    "nama" => "yuusha Fikri", 
    "nomor" => "190322006", 
    "jurusan" => "Teknik sihir lanjutan", 
    "email" => "fikrimuhammad38993@gmail.com",
    "gambar" => "pohon1.png"
    ],
    [
     "nama" => "Maou Fikri", 
     "nomor" => "190321006", 
     "jurusan" => "Teknik sihir kutukan", 
     "email" => "fikrimuhammad38994@gmail.com",
     "gambar" => "pohon2.jpg"
    ], 
];
?>
<!doctype html>
<html>
    <head>
        <title>GET</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <ul>
    <?php foreach($mahasiswa as $mhs) :?>
      <li>
       <a href="latihan2.php?
       nama=<?= $mhs["nama"]; ?>
       &nomor=<?= $mhs["nomor"];?>
       &jurusan=<?= $mhs["jurusan"];?>
       &email=<?= $mhs["email"];?>
       &gambar=<?= $mhs["gambar"];?>">
       <?= $mhs["nama"];?></a>
    </li>
    <?php endforeach ; ?>
        </ul>




    </body>








</html>
















