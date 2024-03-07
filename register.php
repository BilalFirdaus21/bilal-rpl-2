<?php
include "koneksi.php";

if (isset($_POST["daftar"])) {
  $_sql= mysqli_query($conn, "INSERT INTO user set
  nama = '$_POST[nama]',
  username = '$_POST[username]',
  password = md5('$_POST[password]'),
  email = '$_POST[email]',
  alamat = '$_POST[alamat]',
  no_telepon = '$_POST[no_telepon]',
  level = '$_POST[level]'");
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Perpustakaan Digital</title>
</head>

<body class="login-register">
    <form action="" method="post">
        <fieldset>
            <h1>Daftar</h1>
            <h2>Perpustakaan Digital</h2>

            <input type="text" name="nama" placeholder="Daftarkan Nama Anda" required>
            
            <input type="text" name="username" placeholder="Daftarkan Username Anda" required>
            <input type="password" name="password" placeholder="Daftarkan Password Anda" required>
            
            <input type="email" name="email" placeholder="Daftarkan Email Anda" required>
            <input type="text" name="alamat" placeholder="Daftarkan Alamat Anda" required>

            <input type="text" name="no_telepon" placeholder="Daftarkan Nomor Telepon Anda" required>

            <span id="level">Pilih Pengguna</span>
                <select name="level">
                    <option>admin</option>
                    <option>peminjam</option>
                </select>

            <button type="submit" name="daftar">REGISTER</button>

            <span>Sudah memiliki akun? <a href="login.php">Masuk</a></span>
            
        </fieldset>
    </form>
</body>

</html>