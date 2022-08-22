<?php

require 'agama-functions.php';

$agama = query("SELECT * FROM agama");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Agama</title>
</head>

<body>

    <h1>Data Agama</h1>
    <br>
    <a href="tambah-agama.php">Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode Agama</th>
            <th>Nama Agama</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($agama as $row) : ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row["id_agama"]; ?></td>
                <td><?php echo $row["nama_agama"]; ?></td>
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