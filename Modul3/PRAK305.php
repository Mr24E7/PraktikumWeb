<!DOCTYPE html>
<head>
    <title>soal 5</title>
</head>
<body>
    <form action="" method="post">
	<h3>Masukkan Huruf atau Simbol</h3>
        <input type="text" name="input" onkeypress="return event.charCode < 48 || event.charCode  > 57">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $kata = $_POST['input'];
        $arrayKata = str_split($kata);
        $jumlahKata = count($arrayKata);
		foreach ($arrayKata as $key => $value) {
            for ($i = 0; $i < $jumlahKata; $i++) {
                if ($i == 0) {
                    echo strtoupper($value);} 
						else {
                    echo strtolower($value);}
            }
        }
    }
    ?>
</body>
</html>