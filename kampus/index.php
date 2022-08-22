<?php
session_start();

if (!isset($_SESSION["login"])) {
    header('Location: login.php');
    exit;
}


require 'mahasiswa-functions.php';



$mahasiswas = query("SELECT *, agama.nama_agama, jurusan.nama_jurusan, jenis_kelamin.jenis_kelamin
FROM mahasiswa
INNER JOIN jurusan ON mahasiswa.id_jurusan=jurusan.id_jurusan
INNER JOIN agama ON mahasiswa.id_agama=agama.id_agama
INNER JOIN jenis_kelamin ON mahasiswa.id_kelamin=jenis_kelamin.id_kelamin;");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>

    <h1>Data Mahasiswa Universitas Udin</h1>
    <br>
    <h3><a href="logout.php">Logout</a></h3>
    <br>
    <a href="tambah-Mahasiswa.php">Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="10" width="90%" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Mahasiswa</th>
            <th>NRP</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Agama</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($mahasiswas as $row) : ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td>
                    <img src="img/<?php echo $row["gambar"]; ?>" width="60" alt="">
                </td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["nrp"]; ?></td>
                <td><?php echo $row["umur"]; ?></td>
                <td><?php echo $row["alamat"]; ?></td>
                <td><?php echo $row["no_telepon"]; ?></td>
                <td><?php echo $row["jenis_kelamin"]; ?></td>
                <td><?php echo $row["nama_jurusan"]; ?></td>
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