<?php

require 'jurusan-functions.php';

$jurusan = query("SELECT * FROM jurusan");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan</title>
</head>

<body>

    <h1>Data Jurusan Universitas </h1>
    <br>
    <a href="tambah-jurusan.php">Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode Jurusan</th>
            <th>Nama Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($jurusan as $row) : ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row["id_jurusan"]; ?></td>
                <td><?php echo $row["nama_jurusan"]; ?></td>
                <td>
                    <a href="">Edit</a> |
                    <a href="">Hapus</a>
                </td>
            </tr>
            <?php $no++ ?>
        <?php endforeach; ?>
    </table>

</body>

</html>