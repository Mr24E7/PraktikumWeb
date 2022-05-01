<html>
	<head>
		<title>
		Soal 3
		</title>
		<style>
			table {border-collapse: collapse}
			td {
				border: 1px solid; 
				min-width: 80px; 
				height: 40px;
				padding: 5px
			}
			.sloof {
				background-color: #D3D3D3;
				font-family: Lato;
				font-weight: bold;
			}
			.merah {background-color: red}
			.hijau {background-color: green}
		</style>
	</head>
	<body>
		<h1> Soal 3 </h1>
			<?php
				$array = [
					[
						"no" => 1, 
						"nama" => "Ridho", 
						"mata" => ["Pemrograman I", "Praktikum Pemrograman I", "Pengantar Lingkungan Basah", "Arstektur Komputer"],
						"sks" => [2, 1, 2, 3]
					],
					[
						"no" => 2,
						"nama" => "Ratna", 
						"mata" => ["Basis Data I", "Praktikum Basis I", "Kalkulus"],
						"sks" => [2, 1, 3]
					],
					[
						"no" => 3, 
						"nama" => "Tono", 
						"mata" => ["Rekayasa Perangkat Lunak", "Analisis dan Perancangan Sistem", "Komputasi Awan", "Kecerdasan Buatan"],
						"sks" => [3, 3, 3, 3]
					]
				];
				$i = 0;
				echo "<table>";
				echo "<tr class=\"sloof\">";
				echo "<td>No</td><td>Nama</td><td>Mata Kuliah Diambil</td><td>SKS</td><td>Total SKS</td><td>Keterangan</td>";
				echo "</tr>";
				while($i < 3){
					$j = 0;
					foreach ($array[$i]["mata"] as $matkul){
						echo "<tr>";
						if($j == 0){
							echo "<td>".$array[$i]["no"]."</td>";	
							echo "<td>".$array[$i]["nama"]."</td>";
						}
						else{
							echo "<td></td><td></td>";
						}
						echo "<td>".$matkul."</td>";
						echo "<td>".$array[$i]["sks"][$j]."</td>";
						$totalsks = 0;
						foreach($array[$i]["sks"] as $sks){
							$totalsks = $totalsks + $sks;
						}
						if($j == 0){
							echo "<td>".$totalsks."</td>";
							if($totalsks < 7){
								echo "<td class=\"merah\">Revisi KRS</td>";
							}
							else{
								echo "<td class=\"hijau\">Tidak Revisi</td>";
							}
						}
						else{
							echo "<td><td></td></td>";
						}
						$j ++;
						echo "</tr>";
					} 
					$i ++;
				}
				echo "</table>";
			?>
		</form>
	</body>
</html>