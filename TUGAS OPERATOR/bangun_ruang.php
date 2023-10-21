<?php
$a = 2;
$b = 3;
$c = 4;
$phi = 3.14159;

echo "Tugas Volume Bangun Ruang";
echo "<br>";
echo "<br>";

$kubus = $a**3;
echo "<fieldset><legend>Volume Kubus V = s³ </legend> Volume Kubus dengan sisi $a adalah $kubus </fieldset>";
echo "<br>";
$balok = $a*$b*$c;
echo "<fieldset><legend>Volume Balok V = p x l x t </legend> Volume Balok dengan panjang $a, lebar $b dan tinggi $c adalah $balok</fieldset>";
echo "<br>";
$silinder = $phi*$a**2*$b;
echo "<fieldset><legend>Volume Silinder V = π x r² x h </legend> Volume Silinder dengan jari jari $a dan tinggi $b adalah $silinder </fieldset>";
echo "<br>";
?>