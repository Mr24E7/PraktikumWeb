
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
    <?php echo (isset($_GET['id_member'])) ? "<title>Update Data | Member</title>" : "<title>Tambah Data | Member</title>" ?>
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
                    Nama
                </td>
                <td>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama"<?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nama"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Nomor Member
                </td>
                <td>
                    <input type="text" name="nomor_member" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control" placeholder="Masukan Nomor Member"<?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nomor_member"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>

                    <textarea name="alamat" cols="30" rows="10" class="form-control" required placeholder="Masukan Alamat"> <?php echo (isset($_GET['id_member'])) ?  $result[0]["alamat"]  : ""; ?> </textarea> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Mendaftar

                </td>
                <td>
                    <input type="datetime-local" name="tgl_daftar" class="form-control" placeholder="Masukan Tanggal Mendaftar"<?php echo (isset($_GET['id_member'])) ?  "value = " . date('Y-m-d\TH:i', strtotime($result[0]["tgl_mendaftar"])) . "" : "value = '' "; ?> required><br>

                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Terakhir Bayar
                </td>
                <td>
                    <input type="date" name="tgl_terakhir_bayar" class="form-control" placeholder="Masukan Tanggal Terakhir Bayar"<?php echo (isset($_GET['id_member'])) ?  "value = " . date('Y-m-d\TH:i', strtotime($result[0]["tgl_terakhir_bayar"])) . "" : "value = '' "; ?> required><br>

                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['id_member'])) {
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
        $tgl_daftar = date_create($_POST['tgl_daftar']);
        $tgl_daftar = date_format($tgl_daftar, "Y-m-d H:i:s");
        print_r($_POST);
        tambahdatamember($_POST['nama'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
    if (isset($_POST['update'])) {
        $tgl_daftar = date('Y-m-d H:i:s', strtotime($_POST['tgl_daftar']));
        updatemember($_GET['id_member'], $_POST['nama'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
    ?>
</body>

</html>