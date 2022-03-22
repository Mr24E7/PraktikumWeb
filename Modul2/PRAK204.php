<!DOCTYPE html>
<html>
<head>
    <title>Modul 2</title>
</head>
<body>
    <h2>Soal 4</h2>
	
    <form action="" method="post">
	Nilai : <br>
    <input type="text" name="nilai"><br>
    <input type="submit" value="Konversi">
    </form>
</body>
</html>

<?php
	error_reporting(0);
    $nilai=$_POST['nilai'];
    if ($nilai >= 1 and $nilai <= 9){
        echo "<h1><b>Hasil : Satuan</b></h1><br>";
    } else if ($nilai >= 10 and $nilai <= 19){
        echo "<h1><b>Hasil : Belasan</b></h1><br>";
    } else if ($nilai >= 20 and $nilai <= 99){
        echo "<h1><b>Hasil : Puluhan</b></h1><br>";;
    } else if ($nilai >= 100 and $nilai <= 1000){
        echo "<h1><b>Hasil : Ratusan</b></h1><br>";
    } else if ($nilai >= 1000 and $nilai <= 9999){
        echo "<h1><b>Hasil : Ribuan</b></h1><br>";
    } else {
        echo "Nilai yang dimasukkan Melebihi Batas";
    }
?>