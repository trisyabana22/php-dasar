<?php

// Variable Scope / lingkup variable
// $x = 10;


// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();


// var_dump($_SERVER);






// Superglobals
// variable milik PHP
// merupakan Array Associative


// $_GET
// $_GET["nama"] = "Tri Syabana";
// $_GET["nrp"] = "10222000";
// var_dump($_GET);


$books = [
        [
            "judulBuku" => "React JS",
            "tahunTerbit" => "2019",
            "pengarang" => "Tri Syabana",
            "harga" => 200000,
        ],
        [
            "judulBuku" => "VUE JS",
            "tahunTerbit" => "2020",
            "pengarang" => "Febyan Nabila",
            "harga" => 345000,
        ],
        [
            "judulBuku" => "Panduan Sholat Wajib",
            "tahunTerbit" => "2000",
            "pengarang" => "Imam Taufiqur Rahman",
            "harga" => 900000,
        ],
];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <ul>
        <?php foreach($books as $book): ?>
            <li><a href="detailget.php?judulBuku=<?= $book["judulBuku"]; ?>&tahunTerbit=<?= $book["tahunTerbit"]; ?>&pengarang=<?= $book["pengarang"]; ?>&harga=<?= $book["harga"]; ?>"><?= $book["judulBuku"]; ?></a></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>