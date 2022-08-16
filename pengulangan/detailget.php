<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["judulBuku"]) || !isset($_GET["tahunTerbit"]) || !isset($_GET["pengarang"]) || !isset($_GET["harga"]) ) {
    // Redirect
    header('Location: globalVariable.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detail buku</h1>
    <ul>
       <li>Judul Buku : <?= $_GET["judulBuku"]; ?></li>
       <li>Tahun Terbit :<?= $_GET["tahunTerbit"]; ?></li>
       <li>Pengarang : <?= $_GET["pengarang"]; ?></li>
       <li>Harga : <?= $_GET["harga"]; ?></li>
    </ul>

    <a href="getvar.php"></a>
</body>
</html>