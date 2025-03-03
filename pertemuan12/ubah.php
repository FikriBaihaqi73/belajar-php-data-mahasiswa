<?php
require 'functions.php';



// ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan idnya
$mhs = query( "SELECT * FROM mahasiswa where id = $id")[0];


// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah
    if ( ubah($_POST) > 0 ) {
        echo "
            <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo " 
         <script>
        alert('data gagal diubah');
        document.location.href = 'index.php';
        </script>";
    }
}
?>
<!doctype html>
<html>
    <head>
        <title>Update Data Mahasiswa</title>
    </head>
    <body>
        <h1>Update Data Mahasiswa</h1>

        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <ul>
                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?> ">
                </li>
                <li>
                    <label for="nomor">Nomor :</label>
                    <input type="text" name="nomor" id="nomor" required value="<?= $mhs["nomor"]; ?>">
                </li>
                <li>
                    <label for="email">Email :</label>
                    <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
                </li>
                <li>
                    <label for="jurusan">Jurusan :</label>
                    <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
                </li>
                <li>
                    <label for="gambar">Gambar :</label>
                    <input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"]; ?>">
                </li>
                <li>
                    <button type="submit" name="submit">Update Data</button>
                </li>
            </ul>
        </form>
    </body>
</html>
