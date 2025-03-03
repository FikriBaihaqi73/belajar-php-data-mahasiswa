<?php
// $mahasiswa = [
//     ["Fikri Baihaqi", "19032006", "Teknik sihir lanjutan", "fikrimuhammad38993@gmail.com"],
//     ["Maou Fikri", "010100006", "Teknik sihir kutukan", "fikrimuhammad38993@gmail.com"],
//     ["Hero Fikri", "01010006", "Teknik sihir suci", "fikrimuhammad38993@gmail.com"]
// ];

// array assoviative
// difinisi-nya sama dengan array numerik
// key-nya adalah string yang kita buat sendiri"
$mahasiswa = [
    [
    "nama" => "yuusha Fikri", 
    "nomor" => "19032006", 
    "jurusan" => "Teknik sihir lanjutan", 
    "email" => "fikrimuhammad38993@gmail.com",
    "gambar" => "pohon1.png"
    ],
    [
     "nama" => "Maou Fikri", 
     "nomor" => "19032006", 
     "jurusan" => "Teknik sihir kutukan", 
     "email" => "fikrimuhammad38993@gmail.com",
     "gambar" => "pohon2.jpg"
    ],   
];
?>
<!doctype html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
            <img src="img/<?= $mhs["gambar"];?> ">
            </li>
            <li>Nama :<?= $mhs["nama"]; ?></li>
            <li>nomor :<?= $mhs["nomor"]; ?></li>
            <li>jurusan :<?= $mhs["jurusan"];?></li>
            <li>email :<?= $mhs ["email"]; ?></li>
        </ul>
    <?php endforeach ; ?>




    </body>
</html>
