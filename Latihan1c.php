<?php
$a = "A";
$b = "B";
$c = "C";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1c</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <div class="baris">
    <div class="kotak"><?= $a ?> </div>
   </div> 
    <div class="baris">
    <div class="kotak"><?= $a ?> </div>
    <div class="kotak"><?= $b ?> </div>
</div>
<div class="baris">
    <div class="kotak"><?= $a ?></div>
    <div class="kotak"><?= $b ?></div>
    <div class="kotak"><?= $c ?></div>
    </div>
</body>
</html>