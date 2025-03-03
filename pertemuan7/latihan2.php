<?php
// cek apakah tidak ada di $_GET
if( !isset ($_GET["nama"]) || 
    !isset($_GET["nomor"])||
    !isset($_GET["jurusan"])||
    !isset($_GET["email"])||
    !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!doctype html>
<html>
    <head>
        <title> detail mahasiswa</title>
    </head>
    <body>
        
<ul>
            <li> <img src ="img/<?= $_GET["gambar"];?>"> </li>
            <li><?= $_GET["nama"]; ?></li>
            <li><?= $_GET["nomor"];?></li>
            <li><?= $_GET["jurusan"];?></li>
            <li><?= $_GET["email"];?></li>

</ul>

<a href="latihan1.php">kembali</a>
    </body>
</html>