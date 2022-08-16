<?php
    // $mahasiswa = [
    //     ["Tri Syabana", "10222000", "tri@gmail.com", "Teknik Informatika"],
    //     ["Febyan Nabila Szaqina", "02282001", "febyan@gmail.com", "Teknik Informatika"],
    // ];

    // Array Associative
    // definisinya sama seperti array numeric, kecuali
    // key-nya adalah string yang kita buat sendiri

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

    echo $mahasiswa[1]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]?>" width="100" alt="">
            </li>
            <li>Nama :<?= $mhs["nama"]?></li>
            <li>NRP :<?= $mhs["nrp"]?></li>
            <li>Email :<?= $mhs["email"]?></li>
            <li>Jurusan :<?= $mhs["jurusan"]?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>