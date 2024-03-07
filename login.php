<?php
include "koneksi.php";
if (isset($_POST['login'])) {
    
    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $sql = mysqli_query($conn, "SELECT*FROM user WHERE username='$user' AND password='$pass'");

    $num = mysqli_num_rows($sql);
    if ($num > 0) {
        $level = mysqli_fetch_assoc($sql);

        if (strtolower($level['level']) == "admin") {
            $_SESSION['username'] = $user;
            $_SESSION['level'] = "admin";    
            header("location:admin/homepage.php");

        } else if (strtolower($level['level']) == "petugas") {
            $_SESSION['username'] = $user;
            $_SESSION['level'] = "petugas";
            header("location:petugas/homepage.php");

        } else if (strtolower($level['level']) == "peminjam") {
            $_SESSION['username'] = $user;
            $_SESSION['level'] = "peminjam";
            header("location:peminjam/homepage.php");

        } else {
            echo "<script>alert('Gagal Login')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Perpustakaan Digital</title>
</head>

<body class="login-register">
    <form action="" method="post" target="_blank">
        <fieldset>
            <h1>Masuk</h1>
            <h2>Perpustakaan Digital</h2>

            <input type="text" name="username" placeholder="Masukkan Username Anda" required>
            <input type="password" name="password" placeholder="Masukkan Password Anda" required>

            <button type="submit" name="login">LOGIN</button>

            <span>Belum memiliki akun? <a href="register.php">Daftar</a></span>

        </fieldset>
    </form>
</body>

</html>
