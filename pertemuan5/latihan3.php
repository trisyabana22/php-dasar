<?php
$mahasiswa = [
    ["Tri", "213231", "Teknik Informatika", "tri@gmail.com"],
    ["Febyan", "435432", "Management Ekonomi", "feby@gmail.com"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $m) :?>
    <ul>
        <li>Nama : <?= $m[0]; ?></li>
        <li>NRP :<?= $m[1]; ?></li>
        <li>Jurusan :<?= $m[2]; ?></li>
        <li>Email :<?= $m[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>