<?php
session_start();
require('./Model.php');
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
if (isset($_GET['id_buku'])) {
    hapusbuku($_GET['id_buku']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="index.php">MODUL 5 | MUHAMMAD RIDHA</a>
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
    <table border="1" class="table table-bordered table-hover">
        <tr>
            <th>Judul Buku</th>
            <th>Penulis Buku</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Status</th>
        </tr>
        <?= tampildata("buku") ?>
    </table>
	    <a href="FormBuku.php" class="btn btn-primary" role="button">Tambah Data</a>
		</div>
</body>
</html>