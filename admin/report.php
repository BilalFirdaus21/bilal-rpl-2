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
        <h3 id="sub-txt">Cara Generate Laporan</h3>
        <fieldset class="report-txt">
            <ol>
                <li>Klik Tombol <a href="print.php">Cetak</a>.</li>
                <li>Lalu akan di arahkan ke halaman cetak.</li>
                <li>Pilih laporan yang akan di cetak.</li>
                <li>Klik kanan pada halaman lalu pilih opsi cetak atau tekan <span>CTRL+P</span>.</li>
                <li>Halaman akan di Generate untuk di cetak dalam format PDF.</li>
            </ol>
        </fieldset>
    </div>
</body>

</html>