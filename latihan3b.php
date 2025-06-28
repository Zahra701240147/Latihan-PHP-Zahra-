
<?php
echo "1. FUNGSI ISSET () </br>";
echo "-Mengecek apakah variabel sudah ada dan isinya BUKAN null.</br> ";
echo "-Jika variabel belum dibuat atau nilainya null, hasilnya (false).</br>";
echo 'kalau variabel ada dan berisi nilai termasuk "", hasilnya (true).<br>';
echo "2. FUNGSI EMPTY () </br>";
echo "-Mengecek apakah variabel kosong.</br>";
echo '-Nilai yang dianggap kosong: "" (string kosong), 0, "0", null, (false), array kosong, atau variabel belum dibuat.</br>';
echo "-Jika kosong, hasilnya (true).</br>";

echo "Contoh : </br>";
$nama = "Zahra";
$kosong = "";
$angka = 0;

// Cek dengan isset()
echo "isset(\$nama): " . (isset($nama) ? "true" : "false") . "<br>";
echo "isset(\$kosong): " . (isset($kosong) ? "true" : "false") . "<br>";
echo "isset(\$angka): " . (isset($angka) ? "true" : "false") . "<br><br>";

// Cek dengan empty()
echo "empty(\$nama): " . (empty($nama) ? "true" : "false") . "<br>";
echo "empty(\$kosong): " . (empty($kosong) ? "true" : "false") . "<br>";
echo "empty(\$angka): " . (empty($angka) ? "true" : "false")."<br>";
?>