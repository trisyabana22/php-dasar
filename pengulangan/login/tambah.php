<?php

// konek ke DBMS
require 'functions.php';

// $namaErr = "";


if( isset($_POST["submit"]) ){
    
    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href= 'index.php';
            </script>
            ";
    } else {
        echo "data Gagal ditambahkan";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>

    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" id="nrp" >
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" >
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" >
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" >
            </li>
            <li>
                <label for="gambar">gambar</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit" id="submit">Tambah Data</button>
            </li>
        </ul>
    </form>

</body>
</html>