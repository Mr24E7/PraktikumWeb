<!DOCTYPE html>
<head>
    <title>Soal 3</title>
</head>
<body>
    <form action="" method="post">
        Batas Bawah <br> <input type="text" name="b"><br>
        Batas Atas <br> <input type="text" name="a"><br>
        <input type="submit" value="cetak" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $b = $_POST['b'];
        $a = $_POST['a'];
        do {
            if (($b + 7) % 5 == 0) {
                echo "<img src=\"soal 3-4.png\" height=\"25\" width=\"25\">";
            } else {
                echo "$b ";
            }
            $b++;} 
			while ($b <= $a);}?>
</body>
</html>