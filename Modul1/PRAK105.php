<!DOCTYPE html>
<html>
<head>
    <title>Soal 5</title>
</head>
<body>
<?php
$array = array(1=>"Samsung Galaxy S22",2=>"Samsung Galaxy S22+",3=>"Samsung Galaxy A03",4=>"Samsung Galaxy Xcover 5");
echo "<table border='2'";
echo "<tr><th width=350px height=50px bgcolor= #FF0000 style='font-size:25px'>Daftar Smartphone Samsung</th></tr>";
foreach ($array as $data) {
	echo "<tr><td>". $data ."</td></tr>";}
echo "</table>";
?>
</body>
</html>