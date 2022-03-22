<?php
echo "<h3> Menghitung Volume Bola </h3>";
echo "Rumus Volume Bola : 4/3 * phi (r<sup>3</sup>)";

$phi = 3.14;
$Jari_jari = 4.2;
$Tinggi = 5.4;
$Panjang = 8.9;
$Lebar = 14.7;
$Sisi = 7.9;

echo "<br>Phi =".$phi;
echo "<br>Jari-jari =".$Jari_jari;
echo "<br>Volume Bola =";
echo  (4/3*$phi*$Jari_jari*$Jari_jari*$Jari_jari)."m<sup>3</sup>";
?>