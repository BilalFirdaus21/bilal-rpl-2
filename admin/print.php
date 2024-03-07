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
        <h2 id="title-txt">Laporan</h2>
        <h3 id="sub-txt">Generate Laporan</h3>
        <table id="report">
            <tr>
                <th>REPORT</th>
                <th>ACTION</th>
            </tr>
            <tr>
                <td>Data Buku</td>
                <td><a id="action" href="data-buku-report.php">Generate</a></td>
            </tr>
            <tr>
                <td>Data Pengguna</td>
                <td><a id="action" href="user-report.php">Generate</a></td>
            </tr>
            <tr>
                <td>Data Kategori</td>
                <td><a id="action" href="kategori-report.php">Generate</a></td>
            </tr>
        </table>
    </div>
</body>

</html>