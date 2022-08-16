<?php

require 'functions.php';

$buku = query("SELECT * FROM buku");

$datas = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM buku"));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buku Tri Syabana Octabiar</title>

</head>

<body>
    <h1>Admin Toko Buku</h1>
    <p>Selamat datang, selamat bekerja</p>

    <p>
        <a href="tambah.php">Tambah Data</a>
    </p>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar Sampul</th>
            <th>Judul Buku</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php if ($datas < 1) : ?>
            <tr>
                <td colspan="6" style="text-align:center ;">Data kosong</td>
            </tr>
        <?php endif; ?>
        <?php $no = 1; ?>
        <?php foreach ($buku as $row) : ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td>
                    <img src="img/<?php echo $row["gambar"]; ?>" style="display:block;margin:auto;" width="60" alt="">
                </td>
                <td><?php echo $row["judul_buku"]; ?></td>
                <td><?php echo $row["penerbit"]; ?></td>
                <td><?php echo $row["tahun_terbit"]; ?></td>
                <td>
                    <a href="">Edit</a> |
                    <a href="">Hapus</a>
                </td>
            </tr>

            <?php $no++; ?>
        <?php endforeach; ?>

    </table>
</body>

</html>