<?php
$penemu = [
    [
        "nama" => "Thomas Alva Edison",
        "penemuan" => "Bola lampu",
        "tahun" => 1879,
        "negara" => "Amerika Serikat",
        "gambar" => "thomas.jpg"
    ],
    [
        "nama" => "Alexander Graham Bell",
        "penemuan" => "Telepon",
        "tahun" => 1876,
        "negara" => "Skotlandia",
        "gambar" => "alexander.jpg"
    ],
    [
        "nama" => "Nikola Tesla",
        "penemuan" => "Arus bolak-balik (AC)",
        "tahun" => 1887,
        "negara" => "Serbia-Amerika",
        "gambar" => "nikola.jpg"
    ],
    [
        "nama" => "James Watt",
        "penemuan" => "Mesin uap",
        "tahun" => 1765,
        "negara" => "Skotlandia",
        "gambar" => "james.jpg"
    ],
    [
        "nama" => "Wright Bersaudara",
        "penemuan" => "Pesawat terbang",
        "tahun" => 1903,
        "negara" => "Amerika Serikat",
        "gambar" => "wright.jpg"
    ],
    [
        "nama" => "Galileo Galilei",
        "penemuan" => "Teleskop astronomi",
        "tahun" => 1609,
        "negara" => "Italia",
        "gambar" => "galileo.jpg"
    ],
    [
        "nama" => "Johannes Gutenberg",
        "penemuan" => "Mesin cetak",
        "tahun" => 1440,
        "negara" => "Jerman",
        "gambar" => "johanes.jpg"
    ],
    [
        "nama" => "Marie Curie",
        "penemuan" => "Radioaktivitas",
        "tahun" => 1898,
        "negara" => "Polandia-Perancis",
        "gambar" => "marie.jpg"
    ],
    [
        "nama" => "Tim Berners-Lee",
        "penemuan" => "World Wide Web (WWW)",
        "tahun" => 1989,
        "negara" => "Inggris",
        "gambar" => "tim berners.jpg"
    ],
    [
        "nama" => "Benjamin Franklin",
        "penemuan" => "Penangkal petir",
        "tahun" => 1752,
        "negara" => "Amerika Serikat",
        "gambar" => "benjamin.jpg"
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Penemu Terkenal</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px;
            text-align: center;
        }
        img {
            
            width: 100px;
        }
    </style>
</head>
<body>

<h2>Data Penemu Terkenal di Dunia</h2>

<table>
    <tr>
        <th>Nama</th>
        <th>Penemuan</th>
        <th>Tahun</th>
        <th>Negara</th>
        <th>Gambar</th>
    </tr>
    <?php foreach ($penemu as $p): ?>
        <tr>
            <td><?= $p['nama'] ?></td>
            <td><?= $p['penemuan'] ?></td>
            <td><?= $p['tahun'] ?></td>
            <td><?= $p['negara'] ?></td>
            <td><img src="img/<?= $p["gambar"]; ?>"></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>