<?php
echo "<h3> Mengkonversi Nilai Suhu</h3>";
echo "Celsius ke Farenheit : 9/5 C +32 <br>Celsius ke Reamur : 4/5 C<br>Celsius ke Kelvin : C+273<br> " ;

$celsius = 37.841;
$Farenheit = 9/5*$celsius+32;
$Reamur = 4/5*$celsius;
$Kelvin = $celsius+273;

echo "<br>Farenheit =".$Farenheit."&deg";
echo "<br>Reamur =".$Reamur."&deg";
echo "<br>Kelvin =".$Kelvin."&deg";
?>



