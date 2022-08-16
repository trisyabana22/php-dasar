<?php

// konek ke DBMS
require 'functions.php';

$id = $_GET["id"];

// Query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek tombol submit ditekan atau tidak
if( isset($_POST["submit"]) ){

    // cek apakah data berhasil ditambahkan atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href= 'index.php';
            </script>
            ";
    } else {
        echo "data Gagal diubah";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>

    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>" />
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>" />
        <ul>
            <li>
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs["nrp"]?>" required>
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]?>" required>
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"]?>" required>
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]?>" required>
            </li>
            <li>
                <label for="gambar">gambar</label><br>
                <img src="img/<?= $mhs["gambar"]; ?>" width="80" alt=""><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit" id="submit">Ubah Data</button>
            </li>
        </ul>
    </form>

</body>
</html>