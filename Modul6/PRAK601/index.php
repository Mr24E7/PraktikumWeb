<?php
	session_name("verify");
	session_start();
	if(isset($_GET['keluar'])){
        unset($_SESSION["verify"]);
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>Modul 6</title>
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	 <style>
   body {
    background-image: url("cb.jpg");
	background-repeat: no-repeat;
    background-size:cover
   }
   .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
 </style>
 <script>
    $(document).ready(function(){
      $(".preloader").fadeOut();
    })
    </script>
</head>
<body>
<div class="preloader">
      <div class="loading">
        <img src="poi.gif" width="80">
        <p>Harap Tunggu</p>
      </div>
    </div>
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
					<li class="nav-item">
					
					<?php
				
					if (empty($_SESSION['login_user'])){
					echo "<a href='formlogin.php'>Login</a><br>";
					}
					else{
					echo "Selamat Datang " . $_SESSION['nama_member'] . "<br>";
					echo "<a href='index.php?keluar=1' onclick='return confirm(\'LogOut?\')>Logout</a>";
					} 
					?>
					</li>
	
                </ul>
            </div>
        </div>
    </nav>
   
</body>
</html>

