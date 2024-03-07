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
        <h3 id="sub-txt">Detail Buku Digital Library</h3>

        <fieldset class="detail">
            <div class="info">
                <table>
                    <tr>
                        <td id="label">Judul Buku</td>
                        <td>: bilal</td>
                    </tr>
                    <tr>
                        <td id="label">Kategori Buku</td>
                        <td>: komik</td>
                    </tr>
                    <tr>
                        <td id="label">Penulis Buku</td>
                        <td>: bilal</td>
                    </tr>
                    <tr>
                        <td id="label">Penerbit Buku</td>
                        <td>: bilal</td>
                    </tr>
                    <tr>
                        <td id="label">Tahun Terbit</td>
                        <td>: 2006</td>
                    </tr>
                    <tr>
                </table>
                <table>
                    <tr>
                        <td id="label">Sinopsis</td>
                    </tr>
                    <tr>
                        <td>
                            bilal anak ayahnya dan anak ibunya
                        </td>
                    </tr>
                </table>
            </div>
        </fieldset>
        <br>
        <span id="txt-info">*Halaman ini hanya menampilkan data buku saja, silahkan kembali untuk meminjam buku ini.</span>
        <a id="back-txt" href="data-buku.php">Kembali</a>

    </div>
</body>

</html>