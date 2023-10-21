<?php
$nama = "kris";
// tinggi badan (cm)
$tinggi_badan = 165; 
// berat badan (kg)
$berat_badan = 53;

// rumus = [berat badan (kg) : (tinggi badan (m) x tinggi badan (m))]

$bmi = $berat_badan / (($tinggi_badan/100)**2);
// tinggi badan dibagi 100 supaya mendapatkan satuan (m)
if($bmi<18.5){
    $kategori = "Kurus";
}elseif($bmi<25){
    $kategori = "Sedang";
}else{

    $kategori = "Gemuk";
}

echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk $kategori"
?>