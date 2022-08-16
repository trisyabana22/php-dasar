<?php
// $_GET
// $_GET["nama"] = "Febyan";
// $_GET = ["nama" => "Tri Syabana"];

$mahasiswa = [
    [
        "nama" => "Tri Syabana Octabiar",
        "nrp" => "10222000",
        "email" => "tri@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.png"
    ],
    [
        "nama" => "Febyan Nabila Szaqina",
        "nrp" => "02282001",
        "email" => "febyan@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "2.png"
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
    
<h1>Daftar Mahasiswa</h1>

<ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan3.php?gambar=<?= $mhs["gambar"]; ?>&nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"] ?></a>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>