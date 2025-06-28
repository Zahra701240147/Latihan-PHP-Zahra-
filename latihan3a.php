<?php

function ganti_style ($tulisan,$kelas) {
    return "<p class= $kelas>$tulisan</p>";
}
$tulisan = "Hello World! Here I come";
$kelas = "ganti-style";

echo ganti_style ($tulisan, $kelas);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Style</title>
</head>
<body>
    <style>
        .ganti-style {
            font-size : 28px;
            font-family : Arial;
            color : #1a0547;
            font-style : italic;
            font-weight : bold;
        }
    </style>
</body>
</html>
