<!DOCTYPE html>
<head>
    <title>Soal 2</title>
    <style>
        .star {
            width: 22px;
            height: 25px;}
    </style>
</head>
<body>
    <form action="" method="post">
	<table border="0">
       <tr><td> Tinggi </td><td>:&nbsp <input type="text" name="tinggi" size="30"></tr></td> 
        <tr><td>Alamat Gambar </td><td>:&nbsp <input type="text" name="alamat" size="30"></tr></td> 
        <tr><td><input type="submit" value="cetak" name="submit"></tr></td>
		</table>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $tinggi = $_POST['tinggi'];
        $alamat = $_POST['alamat'];
        $a = 1;
        while ($a <= $tinggi) {
            $b = 1;
            while ($b < $a) { echo "&nbsp;" . "&emsp;"; $b++;}
            $c = $tinggi;
            while ($c >= $a) { echo "<img src='$alamat'class='star'>";
            $c--;}
            echo '<br>';
            $a++;}
    }?>
</body>
</html>