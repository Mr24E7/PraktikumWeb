<html>
	<head>
		<title>
		Soal 1
		</title>
		<style>
			.container {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
			}
			.col-25 {
			float: left;
			width: 25%;
			margin-top: 6px;
			}
			.col-75 {
			float: left;
			width: 75%;
			margin-top: 6px;
			}
			.row:after {
			content: "";
			display: table;
			clear: both;
			}
			table {border-collapse: collapse}
			td {
				border: 1px solid; 
				text-align: center; 
				width: 30px; 
				height: 30px
			}
		</style>
	</head>
	<body>
	<h1> Soal 1 </h1>
	<div class="container">
		<form action="" method="POST">
		<div class="row">
		<div class="col-25">
			Panjang :</div>
			<div class="col-75"><input type="number" name="panjang" value="<?=isset($_POST["panjang"]) ? $_POST["panjang"] : ''?>"> </div>
			</div><br>
		<div class="row">
		<div class="col-25">			
			Lebar : </div>
			<div class="col-75"><input type="number" name="lebar" value="<?=isset($_POST["lebar"]) ? $_POST["lebar"] : ''?>"></div>
			</div><br>
		<div class="row">
        <div class="col-25">
			Nilai : </div>
			<div class="col-75"><input type="text" name="nilai" value="<?=isset($_POST["nilai"]) ? $_POST["nilai"] : ''?>"> </div>
			</div><br>
			<button type="submit" name="cetak">Cetak</button>
			</form>
			</div>
			<center>
			<?php
				if(isset($_POST["cetak"])){
					echo "<br>";
					if(isset($_POST["panjang"])){
						$x = $_POST["panjang"];}
					if(isset($_POST["lebar"])){
						$y = $_POST["lebar"];}
					$matriksize = $x * $y;
					if(isset($_POST["nilai"])){
						$nilai = explode(" ", $_POST["nilai"]);
						$temp = count($nilai);
						while($temp < $matriksize){
							array_push($nilai, " ");
							$temp ++;}
						$jumlah = count($nilai);}
					echo "<br>";
					if($matriksize == $jumlah){
						$i = 0;
						$urutan = 0;
						while($i < $y){
							$j = 0;
							while($j < $x){
								$tampil[$j][$i] = $nilai[$urutan];
								$urutan ++;
								$j ++;
								}
							$i ++;
						}
						$i = 0;
						echo "<table>";
						while($i < $y){
							$j = 0;
							echo "<tr>";
							while($j < $x){
								$aa = $tampil[$j][$i];
								echo "<td> $aa </td>";
								$j ++;
							}
							echo "</tr>";
							$i ++;}
						echo "</table>";}
					else
					{echo "Panjang nilai tidak sesuai dengan ukuran matriks";}
				}
			?>
			</center>
	</body>
</html>