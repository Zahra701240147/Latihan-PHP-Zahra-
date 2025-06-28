<?php 
function pangkat ($angka, $pangkat) {
    return pow ($angka, $pangkat);
}
$angka = 5;
$pangkat = 4;
$hasil = pangkat ($angka,$pangkat);

echo "$angka Pangkat $pangkat = $hasil </br>";

?>