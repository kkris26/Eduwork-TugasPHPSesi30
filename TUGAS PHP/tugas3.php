<?php
for($i=0; $i<=8; $i++){ //membuat loop luar dengan nilai awal 1 dan terus akan ditambah 1 jika $i<=9 terpenuhi.
    for($j=0; $j<=$i; $j++){ //membuat loop dalam dengan nilai awal 0 dan terus akan ditambah 1 jika $j<$i terpenuhi.
        echo "$j"; //akan mencetak nilai dari $j sebagai hasil dari loop dalam.
    }
    echo"<br>"; //memberikan baris baru tiap loop luar dilakukan.
}
?>
