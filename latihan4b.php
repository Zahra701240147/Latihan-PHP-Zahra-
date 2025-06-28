<?php
// Array awal berisi 5 negara
$negara = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Negara Asean</title>
</head>
<body>

    <h1>Daftar Negara ASEAN awal:</h1>
    <ul>
        <?php 
        foreach ($negara as $n) {
            echo "<li>$n</li>";
        }
        ?>
    </ul>

<?php
// Tambah 3 negara lagi
array_push($negara, "Laos", "Filipina", "Myanmar");
?>

    <h1>Daftar Negara ASEAN baru:</h1>
    <ul>
        <?php 
        foreach ($negara as $n) {
            echo "<li>$n</li>";
        }
        ?>
    </ul>

</body>
</html>