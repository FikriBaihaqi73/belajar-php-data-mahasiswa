<?php
// apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]))
    // cek username dan password
if( $_POST["username"] == "admin" && $_POST["password"] == "admin#123") 
{

    // jika benar, redirect ke halaman admin
header("location: admin.php");
exit;
} else {
    // jika salah, tampilkan pesan kesalahan
$error = true;
}
?>
<!doctype html>
<html>
    <head>
        <title> Login </title>
    </head>
    <body>

     <h1>Login Admin</h1>
<?php if( isset($error)) : ?>
     <p style="color: red; font-style=italic;">username/password salah</p>
<?php endif; ?>

    <ul>
    <form action="" method="post">
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="Password" name="password" id="password">
        </li>
        <li>
           <button type="submit" name="submit">Kirim Bang</button>
        </li>



    </form>
    </ul>



    </body>
</html>