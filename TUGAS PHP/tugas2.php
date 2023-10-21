<?php
for($i=9; $i>0; $i--){ //membuat loop luar dengan nilai awal 9 dan terus akan dikurangi 1 jika $i>0 terpenuhi.
    for($j=0; $j<$i ;$j++){ //membuat loop dalam dengan nilai awal 1 dan terus akan ditambah 1 jika $j<$i terpenuhi.
        echo "*"; //akan mencetak * sebagai hasil dari loop dalam.
    }
    echo "<br>"; // memberikan baris baru tiap loop luar dilakukan.
}
?>