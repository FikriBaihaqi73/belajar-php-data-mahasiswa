<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "root", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) )  {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    // Ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars( $data["nama"]);
    $nomor = htmlspecialchars ($data["nomor"]);
    $email = htmlspecialchars ($data["email"]);
    $jurusan = htmlspecialchars ($data["jurusan"]);

    // upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }

     // Query untuk insert data tanpa kolom 'id'
    $query = "INSERT INTO mahasiswa (nama, nomor, email, jurusan, gambar)
     VALUES ('$nama', '$nomor', '$email', '$jurusan', '$gambar')";

   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);


}

function upload() {
    
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile= $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>
            alert('pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if( !in_array($ekstensigambar, $ekstensigambarvalid)) {
        echo "<script>
        alert('upload gambar jangan yang lain!');
    </script>";
    return false;
    }


    // cek jika ukuran gambar terlalu besar
    if( $ukuranfile > 1000000 ) {
        echo "<script>
        alert('ukuran gambar terlalu besar!');
    </script>";
    return false;
    }

    // lolos pengecekan gambar siap diupload
    // generate nama gambar yang baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;

    move_uploaded_file($tmpname, 'img/' . $namafilebaru);

    return $namafilebaru;

}


function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa where id = $id ");
    return mysqli_affected_rows($conn);
}



function ubah($data)  {
    global $conn;

    
       // Ambil data dari tiap elemen dalam form
       $id = $data["id"];
       $nama = htmlspecialchars( $data["nama"]);
       $nomor = htmlspecialchars ($data["nomor"]);
       $email = htmlspecialchars ($data["email"]);
       $jurusan = htmlspecialchars ($data["jurusan"]);
       $gambarlama = htmlspecialchars ($data["gambarlama"]);

    //    cek apakah user pilih gambar baru atau tidak
        if( $_FILES['gambar']['error'] === 4 ) {
            $gambar = $gambarlama;
        } else {
            $gambar = upload();
        }
   
        // Query untuk update data tanpa kolom 'id'
       $query = "UPDATE mahasiswa set
                nama = '$nama',
                nomor = '$nomor',
                email = '$email',
                jurusan= '$jurusan',
                gambar = '$gambar'
                WHERE id = $id
                "; 
   
      mysqli_query($conn, $query);
   
      return mysqli_affected_rows($conn);

}

function cari($keyword) {
    $query = "SELECT * FROM mahasiswa
                WHERE
                nama LIKE '%$keyword%' OR
                nomor LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";
    return query($query);


}

function registrasi($data){
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek username sudah ada apa blm
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('Username sudah dipakai silahkan ganti yang lain')
            </script>";
            return false;
    }

    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
            alert('Konfirmasi Password tidak sesuai')
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    // tambahkan user baru ke database
    mysqli_query( $conn, "INSERT INTO users(username, password) VALUES('$username', '$password')");

    return mysqli_affected_rows($conn);

}






?>