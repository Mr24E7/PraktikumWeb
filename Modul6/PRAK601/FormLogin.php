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
	<link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>Modul 5</title>
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	 <style>
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
	
	<?php
		include("model.php");
	?>
	<center>
	<a href="index.php">Back</a>
    <form name="login" action="login.php" method="POST">
		<table>
			<tr><td colspan="2"><h1>Login</h1></td></tr>
			<tr>
				<td><label>ID Member	: </label></td>
				<td><input type="number" name="id" value="<?=isset($_POST['id']) ? $_POST['id'] : ''?>" required/></td>
			</tr>
			<tr>
				<td><label>Password	: </label></td>
				<td><input type="password" name="pass" required/></td>
			</tr>	
			<tr>
				<td><input name='login' type='submit' value='Login'></td>
			</tr>
		</table>
	</form>
	</center>
	<!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>