<?php
$a = 2;
$b= 3;
$c = 4;
$phi =3.14159;

echo "Tugas Luas Bangun Datar";
echo "<br>";
echo "<br>";

$persegi = $a * $a;
echo "<fieldset><legend>Luas Persegi L = s x s</legend> Luas Persegi dengan sisi = $a adalah $persegi</fieldset>";
echo "<br>";
$persegi_panjang = $a * $b;
echo "<fieldset><legend>Luas Persegi Panjang L = p x l</legend> Luas Persegi Panjang dengan panjang = $a dan lebar $b adalah $persegi_panjang</fieldset>";
echo "<br>";
$segitiga = 1/2 * $a * $b;
echo "<fieldset><legend>Luas Segitiga L = 1/2 x a x t</legend> Luas Segitiga dengan Alas = $a dan Tinggi $b adalah $segitiga</fieldset>";
echo "<br>";
$lingkaran = $phi * $a**2;
echo "<fieldset><legend>Luas Lingkaran A = π x r²</legend> Luas Lingkaran dengan Jari-jari = $a adalah $lingkaran</fieldset>";
echo "<br>";
$trapesium = 1/2 * ($a+$b) *$c;
echo "<fieldset><legend>Luas Trapesium L = 1/2 x (a + b) x t</legend> Luas Trapesium dengan Sisi Atas = $a, Sisi Bawah = $b dan Tinggi = $c adalah $trapesium</fieldset>";

?>