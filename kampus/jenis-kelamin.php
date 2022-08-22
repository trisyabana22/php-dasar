<?php

require 'jenis-kelamin-functions.php';

$jenis_kelamin = query("SELECT * FROM jenis_kelamin");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jenis Kelamin</title>
</head>

<body>

    <h1>Data Jenis Kelamin </h1>
    <br>
    <a href="tambah-jenis-kelamin.php">Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode Jenis Kelamin</th>
            <th>Nama Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($jenis_kelamin as $row) : ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row["id_kelamin"]; ?></td>
                <td><?php echo $row["jenis_kelamin"]; ?></td>
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