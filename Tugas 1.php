<!DOCTYPE html>
<html>
<head>
    <title>Tugas 1</title>
</head>
<body>
    <h3>Pengulangan untuk mencari kategori bilangan :</h3>
    <ul>
        <?php
        function isPrima($angka) {
            if ($angka < 2) {
                return false;
            }
            for ($i = 2; $i <= sqrt($angka); $i++) {
                if ($angka % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        for ($i = 1; $i <= 20; $i++) {
            $kategori = "Angka $i adalah bilangan ";

            // Cek ganjil/genap
            if ($i % 2 == 0) {
                $kategori .= "genap";
            } else {
                $kategori .= "ganjil";
            }

            // Cek prima
            if (isPrima($i)) {
                $kategori .= " sekaligus bilangan prima";
            }

            echo "<li>$kategori</li>";
        }
        ?>
    </ul>
</body>
</html>
