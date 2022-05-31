
<?php
session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
require('./Model.php');
if (isset($_GET['id_buku'])) {
    editbuku();
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <?php echo (isset($_GET['id_peminjaman'])) ? "<title>Update Data | Peminjaman</title>" : "<title>Tambah Data | Peminjaman</title>" ?>
</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="index.php">MODUL 6 | MUHAMMAD RIDHA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Member.php">Data Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Buku.php">Data Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Peminjaman.php">Data Peminjaman</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	<div class="container">
    <form action="" method="post">
        <table class="table table-bordered table-hover">
            <tr>
                <td>
                    Tanggal Peminjaman
                </td>
                <td>
                    <input type="date" name="tgl_pinjam" class="form-control"<?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_pinjam"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Kembali
                </td>
                <td>
                    <input type="date" name="tgl_kembali" class="form-control" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['id_peminjaman'])) {
                        echo "<button type=\"submit\" name=\"update\">Update</button>";
                    } else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
                    }

                    ?>
                </td>
            </tr>
        </table>
    </form>
			</div>
    <?php
    if (isset($_POST['submit'])) {

        tambahdatapeminjaman($_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    if (isset($_POST['update'])) {
        updatepeminjaman($_GET['id_peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    ?>
</body>

</html>