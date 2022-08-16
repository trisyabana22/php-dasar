<?php

require 'functions.php';





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
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
    <title>Tambah Data Buku</title>
    <style>
        label {
            display: block;
        }

        ul li {
            margin-bottom: .6rem;

        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Tambah Data Buku</h1>
    <p>
        <a href="index.php">Back</a>
    </p>
    <ul>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <li>
                <label for="judul_buku">Judul Buku</label>
                <input type="text" name="judul_buku" id="judul_buku">
                <br>
                <?php echo "<span class='error'>$judul_buku_err</span>";  ?>
            </li>
            <li>
                <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit" id="penerbit">
                <br>
                <?php echo "<span class='error'>$penerbit_err</span>";  ?>
            </li>
            <li>
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="text" name="tahun_terbit" id="tahun_terbit">
                <br>
                <?php echo "<span class='error'>$tahun_terbit_err</span>";  ?>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar">
                <br>
                <?php echo "<span class='error'>$gambar_err</span>";  ?>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </form>
    </ul>
</body>

</html>