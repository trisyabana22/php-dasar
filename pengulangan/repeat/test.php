<?php
$namaErr = "";
$nama = "";

// cek tombol submit di klik
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
        $namaErr = "Nama Harus Diisi";
    } else {
        $nama = $_POST["nama"];
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Form input Test</h1>

    <form action="" method="post">
        <label for="nama">Ketikan nama</label>
        <input type="text" name="nama" id="nama">
        <button>Tanbah Data</button>
        <br>
        <?php echo $namaErr; ?>
    </form>


    <h2>namamu adalah : <?php if (!isset($nama)) : ?>

            <?php echo ""; ?></h2>
<?php endif; ?>
<?php echo $nama; ?>

</body>

</html>