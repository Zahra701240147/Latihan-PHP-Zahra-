<?php
function faktorial($a) {
    $hasil = 1;
    for ($i = 1; $i <= $a; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

$a = 5;
$hasil = faktorial($a);

echo "Faktorial dari $a = $hasil<br>";
?>