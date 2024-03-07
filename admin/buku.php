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
        <h3 id="sub-txt">Form Tambah Buku</h3>

        <form action="" method="post" enctype="multipart/form-data">
            <table id="form">
                <tr>
                    <td id="label">Judul Buku</td>
                    <td><input type="text" name="judul" required></td>
                </tr>
                <tr>
                    <td id="label">Kategori Buku</td>
                    <td><select name="kategori">
                        <option>Majalah</option>
                        <option>Komik</option>
                    </select></td>
                </tr>
                <tr>
                    <td id="label">Penulis Buku</td>
                    <td><input type="text" name="penulis" required></td>
                </tr>
                <tr>
                    <td id="label">Penerbit</td>
                    <td><input type="text" name="penerbit" required></td>
                </tr>
                <tr>
                    <td id="label">Tahun Terbit</td>
                    <td><input type="text" name="tahun_terbit" required></td>
                </tr>
                <tr>
                    <td id="label">Sinopsis</td>
                    <td><textarea name="sinopsis"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="tambah" value="Tambah Buku">
                        <a name="tambah" href="data-buku.php">Lihat Buku</a>
                    </td>
                </tr>
            </table>
        </form>

    </div>
</body>

</html>

<?php
if(isset($_POST['tambah'])){
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $deskripsi = $_POST['sinopsis'];

    mysqli_query($conn, "INSERT INTO buku (judul, kategori, penulis, penerbit, tahun_terbit, sinopsis)
    VALUES('$judul', '$kategori', '$penulis', '$penerbit', '$tahun_terbit', '$deskripsi')");

    header("location:data-buku.php");
}
?>