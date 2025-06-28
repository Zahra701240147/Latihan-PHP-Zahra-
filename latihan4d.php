<!DOCTYPE html>
<html>
<head>
    <title>Data Negara ASEAN</title>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
        }
        th, td {
            border: 1px double black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h3>Daftar Negara ASEAN, Ibukota, dan Kode Telepon</h3>
    <table>
        <tr>
            <th>Negara</th>
            <th>Ibukota</th>
            <th>Kode Telepon</th>
        </tr>

        <?php
        $asean = [
            ["negara" => "Indonesia", "ibukota" => "D.K.I. Jakarta", "kode" => "+62"],
            ["negara" => "Singapura", "ibukota" => "Singapura", "kode" => "+65"],
            ["negara" => "Malaysia", "ibukota" => "Kuala Lumpur", "kode" => "+60"],
            ["negara" => "Brunei", "ibukota" => "Bandar Seri Begawan", "kode" => "+673"],
            ["negara" => "Thailand", "ibukota" => "Bangkok", "kode" => "+66"],
            ["negara" => "Laos", "ibukota" => "Vientiane", "kode" => "+856"],
            ["negara" => "Filipina", "ibukota" => "Manila", "kode" => "+63"],
            ["negara" => "Myanmar", "ibukota" => "Naypyidaw", "kode" => "+95"]
        ];
        foreach ($asean as $data) {
            echo "<tr>";
            echo "<td>{$data['negara']}</td>";
            echo "<td>{$data['ibukota']}</td>";
            echo "<td>{$data['kode']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
