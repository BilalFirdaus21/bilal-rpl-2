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
        <h2 id="title-txt">Kategori</h2>
        <h3 id="sub-txt">Kategori Buku</h3>

        <form action="" method="post" enctype="multipart/form-data">
            <table id="form">
                <tr>
                    <td>Kategori Baru</td>
                    <td><input type="text" name="kategori"></td>
                    <td><button type="submit" name="tambah">+ Tambah Kategori</button></td>
                </tr>
            </table>

            <table id="data">
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Jumlah Buku</th>
                    <th>#</th>
                </tr>
                <?php
                    $no = 1;
                    $query = mysqli_query($conn, "SELECT*FROM kategori");
                    while($kat = mysqli_fetch_array($query)){
                        echo"
                <tr>
                    <td>$no</td>
                    <td>$kat[kategori]</td>
                    <td>10 Buku</td>
                    <td><button type='submit' name='delete' title='delete'></button></td>
                    <a href='?delete=$kat[id_kategori]'>delete</a>
                </tr>";
                $no++;
                    }
                ?>
            </table>
        </form>

    </div>
</body>

</html>

<?php
    if(isset($_POST['tambah'])){
        $kategori = $_POST['kategori'];
        mysqli_query($conn, "INSERT INTO kategori (kategori) VALUES ('$kategori')");

        echo"<script>alert('Berhasil tambah Kategori</script>";
    }

    if(isset($_GET['delete'])){
        mysqli_query($conn, "DELETE FROM kategori WHERE id_kategori = '$_GET[delete]'");
    }
?>


