<?php

require 'functions.php';

session_start();

if (!isset($_SESSION["login"])) {
    header("Location:login.php");
}


$id = $_GET["id"];

$buku = query("SELECT * FROM buku WHERE id = $id")[0];




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // cek apakah data berhasil ditambahkan atau tidak
    if (ubah($_POST) > 0) {
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
    <title>Ubah Data Buku</title>
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
    <h1>Ubah Data Buku</h1>
    <p>
        <a href="index.php">Back</a>
    </p>
    <ul>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?php echo $buku['id']; ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $buku['id']; ?>">
            <li>
                <label for="judul_buku">Judul Buku</label>
                <input type="text" name="judul_buku" id="judul_buku" value="<?php echo $buku['judul_buku']; ?>">
                <br>
                <?php echo "<span class='error'>$judul_buku_err</span>";  ?>
            </li>
            <li>
                <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit" id="penerbit" value="<?php echo $buku['penerbit']; ?>">
                <br>
                <?php echo "<span class='error'>$penerbit_err</span>";  ?>
            </li>
            <li>
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="text" name="tahun_terbit" id="tahun_terbit" value="<?php echo $buku['tahun_terbit']; ?>">
                <br>
                <?php echo "<span class='error'>$tahun_terbit_err</span>";  ?>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar" value="<?php echo $buku['gambar']; ?>">
                <br>
                <?php echo "<span class='error'>$gambar_err</span>";  ?>
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </form>
    </ul>
</body>

</html>