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
    $gambar = htmlspecialchars ($data["gambar"]);

     // Query untuk insert data tanpa kolom 'id'
    $query = "INSERT INTO mahasiswa (nama, nomor, email, jurusan, gambar)
     VALUES ('$nama', '$nomor', '$email', '$jurusan', '$gambar')";

   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);


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
       $gambar = htmlspecialchars ($data["gambar"]);
   
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





?>