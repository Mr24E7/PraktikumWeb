<!DOCTYPE html>
<head>
    <title>Soal 1</title>
</head>
<body>
    <form action="" method="post">
        <h3>Jumlah Peserta:<h3>
        <input type="text" name="jumlah"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $peserta = $_POST['jumlah'];
        $loop = 1;
        while ($loop <= $peserta) {
            if ($loop % 2 == 0) { echo "<h2><font color='#00FF00'>Peserta ke-$loop</font></h2>";} 
			else { echo "<h2><font color='#ff0000'>Peserta ke-$loop</font></h2>";}
            $loop++;}
    }?>
</body>
</html>