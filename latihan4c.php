<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara ASEAN dan Ibukota</title>
</head>
<body>
    <h3>Daftar Negara ASEAN dan Ibukota :</h3>
    <ul>
        <?php
        // Array asosiatif negara => ibukota
        $asean = array(
            "Indonesia" => "D.K.I. Jakarta",
            "Singapura" => "Singapura",
            "Malaysia" => "Kuala Lumpur",
            "Brunei" => "Bandar Seri Begawan",
            "Thailand" => "Bangkok",
            "Laos" => "Vientiane",
            "Filipina" => "Manila",
            "Myanmar" => "Naypyidaw"
        );

        // Menampilkan dengan foreach
        foreach ($asean as $negara => $ibukota) {
            echo "<li>$negara : $ibukota</li>";
        }
        ?>
    </ul>
</body>
</html>