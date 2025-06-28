<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2c</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            border: 1px solid black;
        }

        .clear {
            clear: both;
        }

        .ganjil {
            background-color: #003;
            color: #fff;
        }

        .genap {
            background-color: #999;
        }
    </style>
</head>
<body>

<?php
$baris = 5;

for ($i = 1; $i <= $baris; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        // Gunakan kelas ganjil/genap berdasarkan nomor baris
        $kelas = ($i % 2 == 1) ? "ganjil" : "genap";
        echo "<div class='kotak $kelas'>$j</div>";
    }
    echo "<div class='clear'></div>";
}
?>

</body>
</html>
