<!DOCTYPE html>
<html>
<head>
    <title>Soal 4</title>
</head>
<body>
<?php
$array = array("Samsung Galaxy S22","Samsung Galaxy S22+","Samsung Galaxy A03","Samsung Galaxy Xcover 5");
echo "<table border='2'";
echo "<tr><th>Daftar Smartphone Samsung</th></tr>";
foreach ($array as $data) {
	echo "<tr><td>". $data ."</td></tr>";}
echo "</table>";
?>
</body>
</html>