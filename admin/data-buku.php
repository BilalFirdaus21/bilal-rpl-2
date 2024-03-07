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
        <a id="logout" href="logout.php">Logout</a>
    </div>

    <div class="display">
        <h2 id="title-txt">Data Buku</h2>
        <h3 id="sub-txt">Data Buku Perpustakaan Digital</h3>


        <div class="wrap">
        <?php
$sql = mysqli_query($conn, "SELECT*FROM buku");
while ($result = mysqli_fetch_array($sql)) {
    ?>
   <fieldset>
        <table>
            <tr>
                <td id="label">Judul</td>
                <td> <?php echo $result ['judul'];?> </td>
            </tr>
            <tr>
                <td id='label'>Kategori</td>
                <td> <?php echo $result ['id_kategori'];?> </td>
            </tr>
            <tr>
                <td id='label'>Penulis</td>
                <td><?php echo $result ['penulis'];?></td> 
            </tr>
            <tr>
                <td id='label'>Penerbit</td>
                <td><?php echo $result ['penerbit'];?></td>
            </tr>
            <tr>
                <td id='label'>Tahun Terbit</td>
                <td><?php echo $result ['tahun_terbit'];?></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <a id='action-btn1' href='data-buku.php'>Hapus</a>
                    <a id='action-btn2' href='detail-buku.php?detail=$buku[id_buku]'>Detail</a>
                </td>
            </tr>
        </table>
    </fieldset>
<?php } ?>
        </div>


    </div>
</body>

</html>