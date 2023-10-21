<?php
$nilai = 1;

switch (true){
    case ($nilai >=90 && $nilai <= 100):
        echo "Nilai A";
        break;
    case ($nilai >=80 && $nilai <90):
        echo "Nilai B";
        break;
    case ($nilai >=70 && $nilai <80):
        echo "Nilai C";
        break;
    case ($nilai >=0 && $nilai <70):
        echo "Nilai D";
        break;
}
?>