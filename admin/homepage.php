<?php
    include "../koneksi.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Perpustakaan Digital - Admin</title>
</head>

<body class="admin-petugas">
    <div class="sidebar">
        <h2>Perpustakaan Digital</h2>
        <h4>as Admin</h4>

        <a href="homepage.php">Beranda</a>
        <a href="buku.php">Data Buku</a>
        <a href="kategori.php">Kategori</a>
        <a href="report.php">Laporan</a>
        <a id="logout" href="../logout.php">Logout</a>
    </div>

    <div class="display">
        <h2 id="title-txt">Beranda</h2>
        <div class="report-container">
            <div class="mini-box">
                <h3>Jumlah Buku</h3>
                <h4>12 Buku</h4>
            </div>
            <div class="mini-box">
                <h3>Jumlah Kategori</h3>
                <h4>12 Kategori</h4>
            </div>
            <div class="mini-box">
                <h3>Jumlah Pengguna</h3>
                <h4>12 Pengguna</h4>
            </div>
            <div class="mini-box">
                <h3>Jumlah Ulasan</h3>
                <h4>12 Ulasan</h4>
            </div>
        </div>
        <table id="user">
        <?php
$sql = mysqli_query($conn, "SELECT*FROM user");
while ($result = mysqli_fetch_array($sql)) {
    ?>
            <tr>
                <th colspan="2">Data User</th>
            </tr>
            <tr>
                <td><b>Username</b></td>
                <td>
                    <?php echo $result ['username'];?> 
                </td>
            </tr>
            <tr>
                <td><b>Email</b></td>
                <td>
                <?php echo $result ['email'];?>
                </td>
            </tr>
            <tr>
                <td><b>Tanggal Login</b></td>
                <td>
                    <?= date('D / 03 / Y') ?>
                </td>
            </tr>
            <tr>
                <td><b>Role</b></td>
                <td>
                <?php echo $result ['level'];?>
                </td>
            </tr>
        </table>
        <?php } ?>
    </div>
</body>

</html>